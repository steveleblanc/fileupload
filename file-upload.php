<meta http-equiv="refresh" content="3;URL=/">
<?php
include "navbar.php";
 ?>
 <div class="container">
  <div class="row">
  <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".<br>";
        //$uploadOk = 1;
    //} else {
        //echo "File is not an image.<br>";
        //$uploadOk = 0;
   // }
//}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size is not bigger than 11mb or 92274688 bits
if ($_FILES["fileToUpload"]["size"] > 92274688) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //header("refresh:3;url=/help/fileupload/");
    echo "Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //header("refresh:3;url=/help/fileupload/file-upload-2.php");
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br>";
    } else {
        //header("refresh:3;url=/help/fileupload/");
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

?>
</div>
</div>