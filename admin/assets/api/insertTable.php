<?php

include('../../../includes/config.php');

$tableNumber = $_POST['tableNumber'];
// echo $categoryName;

$insertTable = "INSERT INTO `Tables` (`TableNumber`) VALUES ($tableNumber) ";
mysqli_query($connection, $insertTable);

mysqli_close($connection);

Header("Location: ../../pages/tables.php");
