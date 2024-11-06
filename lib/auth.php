<?php 
require_once 'db.php';

 $email = trim(filter_var($_POST['email']),FILTER_SANITIZE_EMAIL);
 $password = trim(filter_var($_POST['password']),FILTER_SANITIZE_SPECIAL_CHARS);


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


//INSERT
$sql = 'SELECT id FROM users WHERE email = ? AND password = ? ';

$query = $pdo -> prepare(($sql));
$query -> execute([$email, $password]);//array

if($query->rowCount()== 0){
    echo "User doesn't sign up";
}
else{
    setcookie('email',$email,time() + 3600 * 24 * 30 , "/");
    header('Location: ../views/pages/user.php');
}


?>