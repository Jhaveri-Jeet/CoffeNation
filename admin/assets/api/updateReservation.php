<?php

include('../../../includes/config.php');

$status = $_POST['updateStatus'];
$id = $_POST['updateId'];

$updateStatus = "UPDATE `Tables` SET `Status` = '$status' WHERE `Id` = $id";
mysqli_query($connection, $updateStatus);

mysqli_close($connection);

Header("Location: ../../pages/allRequest.php");
