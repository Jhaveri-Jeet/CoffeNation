<?php

include('../../../includes/config.php');

$categoryName = $_POST['updateCategoryName'];
$id = $_POST['updateId'];

$updateCategory = "UPDATE `Category` SET `Name` = '$categoryName' WHERE `Id` = $id";
mysqli_query($connection, $updateCategory);

mysqli_close($connection);

Header("Location: ../../pages/category.php");
