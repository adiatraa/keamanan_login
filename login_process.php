<?php
session_start();
include 'connection.php';
include 'caesar_cipher.php';

$email = $_POST["email"];
$password = $_POST["password"];
$password_md5 = md5($password . $email);

$passkey = substr($password, 2);
$key = ((strlen($password)) + (strlen($email)) - 5);
$plaintext=$email;
$userencryption = encrypt($plaintext, $key);
echo $password_md5;

$data = mysqli_query($conn, "SELECT * FROM useraccount WHERE email='$userencryption' and password='$password_md5'");
if($data->num_rows>0){
    $fetch = mysqli_fetch_assoc($data);

    //menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    $user_logged_in = $fetch['idUser'];
    $_SESSION['user_id'] = $user_logged_in;

    header("Location:dashboardUser.php");
} else{
    echo"login gagal";
}
?>