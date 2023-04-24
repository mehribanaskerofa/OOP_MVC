<?php
view('admin/partial/header');
use Core\Validation;
$val = new Validation;

?>


<form  action="<?php url('admin/contact')?>"  method="post"  enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" name="address" value="<?= $data['address'] ?? '' ?>"  class="form-control"  placeholder="address">
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Map</label>
        <textarea name="map" class="form-control" id="textAreaExample2" rows="8"><?= $data['map'] ?? ''?></textarea>
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Phone</label>
        <input type="text" name="phone" value="<?= $data['phone'] ?? ''?>" class="form-control"  placeholder="Phone">
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Email</label>
        <input type="email" name="email" value="<?= $data['email'] ?? ''?>" class="form-control"  placeholder="Email">
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Instagram</label>
        <input type="text" name="instagram" value="<?= $data['instagram'] ?? ''?>" class="form-control"  placeholder="Instagram">
    </div>
    <div class="form-outline">
        <label class="form-label" for="textAreaExample2">Youtube</label>
        <input type="text" name="youtube" value="<?= $data['youtube'] ?? ''?>" class="form-control"  placeholder="Youtube">
    </div>
    <br>

    <?= $result['error'] ?? ''; ?><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php view('admin/partial/footer');?>
