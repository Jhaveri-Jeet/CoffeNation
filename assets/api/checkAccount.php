<?php
require '../../includes/config.php';

$name = $_POST['name'];
$password = $_POST['password'];

$query = "SELECT Id,Name, Password FROM Customer WHERE Name = '$name' AND Password = '$password'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);

print_r($data);

if ($result) {
    $_SESSION['name'] = $data['Name'];
    $_SESSION['id'] = $data['Id'];
    echo $_SESSION['name'];
    Header("Location: ../../index.php");
} else {
    Header("Location: ../../pages/login.php");
}
