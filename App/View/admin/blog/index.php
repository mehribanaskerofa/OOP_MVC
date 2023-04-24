<?php view('admin/partial/header');?>

<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        margin: 10px;
    }
.blog-head{
    margin: 10px;
}
    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>
</head>
<body>

<div>
    <a href="<?= url('admin/blog/create')?>" class="btn btn-primary mb-3 ">Add Blog</a>
</div>

<h1 class="blog-head">Blog Table</h1>
<br>
<br><br>
<div></div>
<table id="customers" class="mt-3">
    <thead>
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Text</th>
        <th>Slag</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($blogs as $blog):
    ?>
    <tr>
        <td><?= $blog['id']?></td>
        <td><?= $blog['title']?></td>
        <td><?= $blog['text']?></td>
        <td><?= $blog['slag']?></td>
        <td><?= $blog['image']?></td>
        <td><a href="<?= url('admin/blog/'.$blog['id'])?>" class="btn btn-secondary">Edit</a></td>
        <td>
            <form action="<?= url('admin/blog-delete/'.$blog['id']) ?>" method="post">
                <button class="btn btn-danger">delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>


</table>

<?php view('admin/partial/footer');?>

