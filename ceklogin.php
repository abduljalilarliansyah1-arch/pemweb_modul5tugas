<?php
session_start();

$akun = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "yaha" => "pass@yaha4"
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($akun[$username])) {
    if ($akun[$username] == $password) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $_SESSION['error'] = "Password yang dimasukkan salah";
        header("Location: login.php");
    }
} else {
    $_SESSION['error'] = "Username tidak terdaftar";
    header("Location: login.php");
}
?>
