<?php

include('../../../includes/config.php');

$categoryName = $_POST['categoryName'];
echo $categoryName;

$insertCategory = "INSERT INTO `Category` (`Name`) VALUES ('$categoryName') ";
mysqli_query($connection, $insertCategory);

mysqli_close($connection);

Header("Location: ../../pages/category.php");
