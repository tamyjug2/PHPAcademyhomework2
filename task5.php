<?php

$file_name = $_FILES['pic']['name'];
$file_size = $_FILES['pic']['size'];
$file_tmp = $_FILES['pic']['tmp_name'];
$file_type = $_FILES['pic']['type'];
$array = explode('.', $_FILES['pic']['name']);
$file_ext = strtolower(end($array));
$errors = array();
$extensions = array("jpeg", "jpg", "png");

if (isset($_FILES['pic']))
{

    if (in_array($file_ext, $extensions) === false)
    {
        echo "Wanted file is not allowed, please choose a JPEG or PNG file.";
    }
    if ($file_size > 1000000)
    {
        echo "choose a file less then 1 MB";
    }
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "Pictures/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>
<html lang="'en">
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="submit"/>
</form>
</body>
</html>