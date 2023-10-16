<?php

include('../../../includes/config.php');

$id = $_GET['id'];

$deleteTable = "DELETE FROM `Tables` WHERE `id` = $id";
mysqli_query($connection, $deleteTable);

mysqli_close($connection);

Header("Location: ../../pages/tables.php");
