<?php 
include "navbar.php";
 ?>

<div class="container">
  <div class="row">
<form class="form-horizontal" action="file-upload-2.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Choose a file from your computer to upload to us</legend>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-12 control-label" for="filebutton"></label>
  <div class="col-md-12">
    <input id="fileToUpload" name="fileToUpload" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for="singlebutton"></label>
  <div class="col-md-12">
    <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
  </div>
</div>
</fieldset>
</form>
<div  class="col-md-12">
  <legend>Here is your list of uploaded files so far</legend>
  <div class="col-md-12">
    <?php
    //Scan the uploads folder and return a list of the uploaded files
$files = array_slice(scandir('uploads/'), 2);
echo implode(" <br><br>",$files);
?>
  </div>
</div>
</div>
</div>



