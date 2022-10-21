<?php
include 'connection.php';
include 'caesar_cipher.php';

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$saltPassword = $password . $email ;
$password_md5 = md5($saltPassword);

$passkey = substr($password, 2);
$key = ((strlen($password)) + (strlen($email)) - 5);
$plaintext=$email;
$userencryption = encrypt($plaintext, $key);

$sql = "INSERT INTO `useraccount` (`fullname`, `email`, `password`) VALUES ('$fullname', '$userencryption', '$password_md5')";

if ($conn->query($sql) === TRUE){
    header("Location:login.php");
} else {
    echo "error :" . $sql . "<br>" . $conn->error;
}


$conn->close();

