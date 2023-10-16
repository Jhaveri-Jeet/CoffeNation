<?php

include('../../includes/config.php');

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];

$insertCustomer = "INSERT INTO `Customer` (`Name`, `Number`, `Email`, `Password`) VALUES ('$name','$number', '$email', '$password') ";
mysqli_query($connection, $insertCustomer);

mysqli_close($connection);

Header("Location: ../../pages/login.php");
