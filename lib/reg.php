<?php 
require_once 'db.php';
$login = trim(filter_var($_POST['login']),FILTER_SANITIZE_SPECIAL_CHARS);
$username = trim(filter_var($_POST['username']),FILTER_SANITIZE_SPECIAL_CHARS);
$email = trim(filter_var($_POST['email']),FILTER_SANITIZE_EMAIL);
$password = trim(filter_var($_POST['password']),FILTER_SANITIZE_SPECIAL_CHARS);

if(strlen($login) < 2){
    echo "Login error";
    exit;
}
if(strlen($username) < 2){
    echo "Login error";
    exit;
}
if(strlen($email) < 4 && !str_contains($email, '@')){
    echo "Login error";
    exit;
}
if(strlen($password) < 5 ){
    echo "Pass error";
    exit;
}
//Password
$salt = '56!@##%%$)(%4634FFGVGjjhhh';
$password = md5($salt . $password);

$sql = 'INSERT INTO users(login, username, email , password) VALUES(?,?,?,?)';

$query = $pdo -> prepare(($sql));
$query -> execute([$login, $username, $email, $password]);//array
header('Location: /views/pages/registr.php');

?>