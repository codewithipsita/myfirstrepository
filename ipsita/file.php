<?php
/*//print_r($_FILES);
if($_FILES['uploadfile']){
    $path = $_FILES['uploadfile']['name'];
    $upload_path = "./uploads/".$path;
//echo $upload_path;
move_uploaded_file( $_FILES['uploadfile']['tmp_name'] ,$upload_path);
 or die("failed to upload");
}else{
    die("no file found");
}*/

//print_r($_FILES);
/*if($_FILES['uploadfile']){
    $path = $_FILES['uploadfile']['name'];
    $upload_path = "./uploads/".$path;
//echo $upload_path;
move_uploaded_file($_FILES['uploadfile']['tmp_name'], $upload_path) || die("failed to upload");}*/

// print_r($_FILES);

// if (isset($_FILES['uploadfile'])) {

//     $path = $_FILES['uploadfile']['name'];
//     $upload_path = "./uploads/" . $path;

//     move_uploaded_file($_FILES['uploadfile']['tmp_name'], $upload_path)
//         || die("failed to upload");

// } else {
//     die("no file found");
// }




if (isset($_FILES['uploadfile'])) {

    $fileName = basename($_FILES['uploadfile']['name']);
    $tempPath = $_FILES['uploadfile']['tmp_name'];
    $uploadPath = "uploads/" . $fileName;

    if (move_uploaded_file($tempPath, $uploadPath)) {
        echo "File uploaded successfully";
    } else {
        echo "Failed to upload file";
    }

} else {
    echo "No file found";
}


?>
