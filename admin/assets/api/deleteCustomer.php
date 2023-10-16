<?php

include('../../../includes/config.php');

$id = $_GET['id'];

$deleteReservations = "DELETE FROM `Reservations` WHERE `CustomerId` = '$id'";
mysqli_query($connection, $deleteReservations);
$deleteCustomer = "DELETE FROM `Customer` WHERE `Id` = $id";
mysqli_query($connection, $deleteCustomer);

mysqli_close($connection);

Header("Location: ../../pages/customers.php");
