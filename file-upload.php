<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// http://php.net/manual/en/function.move-uploaded-file.php
// First : make sure that the file is not empty.

// Second : make sure the file name in English characters, numbers and (_-.) symbols, For more protection.

// Third : make sure that the file name not bigger than 250 characters.

// Fourth: Check File extensions and Mime Types that you want to allow in your project. You can use : pathinfo() http://php.net/pathinfo

// or you can use regular expression for check File extensions as in example

// #^(gif|jpg|jpeg|jpe|png)$#i

// or use in_array checking as

// 

// $ext_type = array('gif','jpg','jpe','jpeg','png');


// You have multi choices to checking extensions and Mime types.

// Fifth: Check file size and make sure the limit of php.ini to upload files is what you want, You can start from http://www.php.net/manual/en/ini.core.php#ini.file-uploads

// And last but not least : Check the file content if have a bad codes or something like this function http://php.net/manual/en/function.file-get-contents.php.

// You can use .htaccess to stop working some scripts as in example php file in your upload path.

// use :

// AddHandler cgi-script .php .pl .jsp .asp .sh .cgi
// Options -ExecCGI  


// ---------------------------------------------------------------------------------------------

// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
// }
?>