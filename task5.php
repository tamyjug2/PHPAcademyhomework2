<?php

$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$array = explode('.', $_FILES['image']['name']);
$file_ext = strtolower(end($array));
$errors = array();
$extensions = array("jpeg", "jpg", "png");

if (isset($_FILES['image'])) {

    if (in_array($file_ext, $extensions) === false) {
        echo "Extension not allowed, please choose a JPEG or PNG file.";
    }
    if ($file_size > 1000000) {
        echo "File size must be less then 1 MB";
    }
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "Pictures/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>
<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="submit"/>
</form>
</body>
</html>