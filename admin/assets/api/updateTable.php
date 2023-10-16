<?php

include('../../../includes/config.php');

$updateTableNumber = $_POST['updateTableNumber'];
$updateStatus = $_POST['updateStatus'];
$id = $_POST['updateId'];

$updateTable = "UPDATE `Tables` SET `TableNumber` = '$updateTableNumber', `Status` = '$updateStatus' WHERE `Id` = $id";
mysqli_query($connection, $updateTable);

mysqli_close($connection);

Header("Location: ../../pages/tables.php");
