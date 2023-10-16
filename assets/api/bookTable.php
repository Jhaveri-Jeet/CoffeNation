<?php

include('../../includes/config.php');

$customerId = $_POST['id'];
$date = $_POST['date'];
$tableNumber = $_POST['tableNumber'];

$insertTable = "INSERT INTO `Reservations` (`TableId`, `Date`, `CustomerId`) VALUES ('$tableNumber','$date', '$customerId') ";
mysqli_query($connection, $insertTable);

mysqli_close($connection);

Header("Location: ../../index.php");
