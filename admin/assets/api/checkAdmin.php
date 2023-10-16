<?php
require '../../../includes/config.php';

$name = $_POST['name'];
$password = $_POST['password'];

$query = "SELECT Id,Username, Password FROM Admin WHERE Username = '$name' AND Password = '$password'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);

print_r($data);

if ($result) {
    $_SESSION['username'] = $data['Username'];
    $_SESSION['userid'] = $data['Id'];
    Header("Location: ../../index.php");
} else {
    Header("Location: ../../pages/login.php");
}
