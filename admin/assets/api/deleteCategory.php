<?php

include('../../../includes/config.php');

$id = $_GET['id'];

$deleteCategory = "DELETE FROM `Category` WHERE `id` = $id";
mysqli_query($connection, $deleteCategory);

mysqli_close($connection);

Header("Location: ../../pages/category.php");
