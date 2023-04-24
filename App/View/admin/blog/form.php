<?php view('admin/partial/header');?>


<form  action="<?= $blog ? url('admin/blog/'.$blog['id']) : url('admin/blog/create')?>"  method="post"  enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" value="<?= $blog['title'] ?? '' ?>" class="form-control"  placeholder="title">
        <!--        <small id="emailHelp" class="form-text text-muted">title daxil edin</small>-->
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Text</label>
        <textarea name="text" class="form-control" id="textAreaExample2" rows="8"><?= $blog['text'] ?? ''?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Slag</label>
        <input type="text" name="slag" value="<?= $blog['slag'] ?? '' ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
        <!--        <small id="emailHelp" class="form-text text-muted">title daxil edin</small>-->
    </div>
    <br>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <br>
        <?php
        if ($blog['image'] ?? ''){?>
            <img src="<?= img($blog['image'] ?? '') ?>" width="200px">
            <?php
        }
        ?>
        <input name="image" type="file"  class="form-control-file mt-3" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php view('admin/partial/footer');?>

