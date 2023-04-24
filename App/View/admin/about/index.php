<?php
view('admin/partial/header');
use Core\Validation;
$val = new Validation;

?>


<form  action="<?php url('App/View/admin/about')?>"  method="post"  enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" value="<?= $data['title'] ?? '' ?>" pattern="<?php echo $val->patterns['text']; ?>" class="form-control"  placeholder="title">
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Text</label>
        <textarea name="text" class="form-control" id="textAreaExample2" pattern="<?php echo $val->patterns['text']; ?>" rows="8"><?= $data['text'] ?? ''?></textarea>
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Button name</label>
        <input type="text" name="button" value="<?= $data['button'] ?? '' ?>" pattern="<?php echo $val->patterns['words']; ?>" class="form-control"  placeholder="button name">
    </div>
    <br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <br>
        <?php
        if ($data['image'] ?? ''){?>
            <img src="<?= img($data['image'] ?? '') ?>" width="200px">
            <?php
        }
        ?>
        <input type="hidden" name="image" value="<?= $data['image'] ?? ''?>">
        <input name="image" type="file"  data-file="<?= $data['image'] ?? ''?>" pattern="<?php echo $val->patterns['file']; ?>" class="form-control-file mt-3" id="exampleFormControlFile1">
    </div>
    <?= $result['error'] ?? ''; ?><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php view('admin/partial/footer');?>
