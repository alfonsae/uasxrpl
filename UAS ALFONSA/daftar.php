<?php
include ('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST ['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO user (email, username, password) VALUES('$email', '$username', '$password')";
    $result = $conn -> query($sql);
    header ("Location: indexuser.php");
}
?>