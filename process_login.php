<?php 
include 'dbconnect.php';

$email = $_POST['email'];
$password = $_POST['pw'];

$sql = "SELECT email,password FROM accnts WHERE email = '$email' AND password = '$password'";
$result = $link->query($sql);
if (!$row = $result->fetch_assoc()){
    echo "INVALID CREDENTIALS";
}else {
    echo "LOGGED IN";
    header('Location: display_login.html');
    exit();
}
?>