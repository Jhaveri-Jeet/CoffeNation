<?php

include('../../../includes/config.php');

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_FILES['image'];

$time = time();
$fileName = "$time-" . $_FILES['image']['name'];
$tmpFileName = $_FILES['image']['tmp_name'];

$fileUploaded = move_uploaded_file($tmpFileName, pathOf("admin/assets/uploads/productImage/$fileName"));

if (!$fileUploaded) {
    echo json_encode(["status" => false, "message" => "Error uploading file."]);
    exit();
}


$insertProduct = "INSERT INTO `Products` (`Name`, `Description`,`Price`,`CategoryId`,`ImageName`) VALUES ('$name', '$description', '$price','$category','$fileName') ";
mysqli_query($connection, $insertProduct);

mysqli_close($connection);

Header("Location: ../../pages/products.php");
