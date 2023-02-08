<?php 
include 'dbconnect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pw'];
$confirmpassword = $_POST['confirmpw'];

if ($password != $confirmpassword){
    die("Cannot create account. Passwords do not match.");
} else 
    {
    $sql = "INSERT INTO accnts(username, email, password) VALUES ('$username', '$email', '$password')";
    $result = $link->query($sql);
    echo ("Account Created. <br> Redirecting....");
    sleep(5);
    header('Location: display_login.html');
    exit();
}

?>