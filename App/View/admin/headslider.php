<?php view('admin/partial/header');?>


<form  action="<?php url('App/View/admin/headslider')?>"  method="post"  enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" value="<?= $headslider['title'] ?? '' ?>" class="form-control"  placeholder="title">
<!--        <small id="emailHelp" class="form-text text-muted">title daxil edin</small>-->
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Text</label>
        <textarea name="text" class="form-control" id="textAreaExample2" rows="8"><?= $headslider['text'] ?? ''?></textarea>
    </div>
<br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <br>
        <?php
        if ($headslider['image'] ?? ''){?>
            <img src="<?= img($headslider['image'] ?? '') ?>" width="200px">
        <?php
        }
        ?>
        <input name="image" type="file" value="<?php $headslider['image'] ?? ''?>" class="form-control-file mt-3" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php view('admin/partial/footer');?>

