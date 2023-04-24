<?php

namespace Core;

use PDO;
abstract class DB
{
    private $db;

    private const ACTION_CREATE='create';
    private const ACTION_UPDATE='update';
    private const ACTION_DELETE='delete';
    private const ACTION_SELECT='select';
    private string $currentAction;

    
    
    protected ?string $table='';
    private string $sql='';
    private string $select='*';
    private ?string $limit=null;
    private ?string $offSet=null;

    private bool $isMultiple=true;
    private array $where=[];
    private array $insertData=[];
    private array $updateData=[];
    private array $params=[];

    public function __construct()
    {
        try {
            if( !defined('DB_HOST') ||
                !defined('DB_NAME') ||
                !defined('DB_USERNAME') ||
                !defined('DB_PASSWORD') )
            {
                throw new \Exception("credentials not defined");
            }

            $this->db=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);

        }catch (\Exception $e)//global namespace
        {
            die($e->getMessage());
        }
    }

    public function setAction($action)
    {
        $this->currentAction=$action;
        return $this;
    }

    public function setMultiple(bool $isMultiple)
    {
        $this->isMultiple=$isMultiple;
        return $this;
    }
    public function setLimit($limit)
    {
        $this->limit=(string)$limit;
        return $this;
    }
    public function setOffset($offSet)
    {
        $this->offSet=(string)$offSet;
        return $this;
    }

    public function setSelect(array $select=['*'])
    {
        $this->select=implode(',',$select);
        return $this;
    }
    public function setWhere(string $column, $query, string $operator= '=')
    {
        $this->where[]=[
            'column'=>$column,
            'query'=>$query,
            'operator'=>$operator ];
//        die($where['column']);
//        if (!$this->where){
//            die('where yoxdu');
//        }
//        print_r($this->where);
//        die();
        return $this;
    }
    public function handleLimit()
    {
        if($this->limit){
            if($this->offSet){
                $this->sql .=' limit '.$this->offSet.','.$this->limit;
            }else{
                $this->sql .=' limit '.$this->limit;
            }
        }
    }
    public function handleWhere(){
//
//        if (!$this->where) {
//            die('yoxdu');
//        }

        foreach ($this->where as $index=>$where){
            if($index==0){
                $this->sql.=' where ';
            }
            else{
                $this->sql.=' and ';
            }
            $this->sql.=$where['column'].' '.$where['operator'].' ?';
            $this->params[]=$where['query'];
        }
//        die($this->sql);
        //$this->sql.=" where id = 2";
    }
    public function buildQuery()
    {
        switch ($this->currentAction){
            case self::ACTION_SELECT:
                $this->buildSelect();
                break;
                
            case self::ACTION_CREATE:
                $this->buildCreate();
                break;

            case self::ACTION_DELETE:
                $this->buildDelete();
                break;

            case self::ACTION_UPDATE:
                $this->buildUpdate();
                break;
        }
    }

   
    public function runQuery()
    {
//        die($this->sql);
        if(!$this->sql){
            throw  \Exception("no sql");
        }
        $query=$this->db->prepare($this->sql);

        print_r($this->params);
        $query->execute($this->params);
        if($this->currentAction==self::ACTION_SELECT) {

            if ($this->isMultiple) {
                $response = $query->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $response = $query->fetch(PDO::FETCH_ASSOC);
            }
            $this->reset();
            return $response;
        }
//        else{
////            print_r([$this->sql,$this->params]);
////            die();
//            $query->execute($this->params);
//        }
        $this->reset();
    }

    public function reset()
    {
        $this->sql='';
        $this->select='*';
        $this->where=[];
        $this->limit=null;
        $this->offSet=null;
        $this->isMultiple=true;
        $this->insertData=[];
        $this->updateData=[];
        $this->params=[];
    }
    public function buildSelect()
    {
        $this->sql='select '.$this->select.' from '.$this->table;
        $this->handleWhere();
        $this->handleLimit();
//        die($this->sql);
    }

    public function buildCreate()
    {
        if(!$this->insertData){
            throw new \Exception('no insert data');
        }
        $this->sql='insert into '.$this->table.' (';

        foreach ($this->insertData as $column=>$value){
            $this->sql.=$column.',';
            $this->params[]=$value;

        }

        $this->sql=rtrim($this->sql,',');
        $this->sql=$this->sql.') values ('
            .rtrim(str_repeat('?,',count($this->params)),',').')';
//        die($this->sql);
    }

    public function buildUpdate()
    {
        if(!$this->updateData){
            throw new \Exception('no updates data');
        }
        $this->sql='update '.$this->table;

        $count=false;
        foreach ($this->updateData as $column=>$value){
            if(!$count){
                $this->sql.=' set ';
                $count=true;
            }
            else{
                $this->sql.=', ';
            }
            $this->sql.=$column.' = ? ';
            $this->params[]=$value;
        }

        $this->sql=rtrim($this->sql,', ');

        $this->handleWhere();
        $this->handleLimit();
    }
    public function buildDelete()
    {
        $this->sql='delete from '.$this->table;
        $this->handleWhere();
        $this->handleLimit();
    }
    public function first()
    {
        $this->setAction(self::ACTION_SELECT);
        $this->setMultiple(false);
        $this->setLimit(1);
        $this->buildQuery();
        $response=$this->runQuery();

        return $response ?? null;

    }
    public function all()
    {
        $this->setAction(self::ACTION_SELECT);
        $this->setMultiple(true);
        $this->buildQuery();
        $response=$this->runQuery();
        return $response;
    }

    public function create(array $insertData)
    {
        $this->insertData=$insertData;
        $this->setAction(self::ACTION_CREATE);
        $this->buildQuery();
        $this->runQuery();
    }
    public function update(array $updateData)
    {
        $this->updateData=$updateData;
        $this->setAction(self::ACTION_UPDATE);
        $this->buildQuery();
        $this->runQuery();
    }
    public function delete(): void
    {
        $this->setAction(self::ACTION_DELETE);
        $this->buildQuery();
        $this->runQuery();
    }
}