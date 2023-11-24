<?php
require('db.php');
// =========================================================inloggen========================//
if ($_POST['formType'] == "login") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $tag = $_POST['tag']; 

    if(!$tag)
    {
        $user = selectOne('SELECT * FROM login WHERE user_name = :username AND user_password = :password', [
            ":username" => $username,
            ":password" => $password
        ]);
        if($user){
            $_SESSION['id'] = $user['user_ID'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['admin'] = $user['user_admin'];
            header('Location: ../dashboard.php');
            exit;
        }
        header('Location: ../index.php');
        exit;
    }
    elseif($tag)
    {
        $user = selectOne('SELECT * FROM login WHERE user_tag = :tag', [
            ":tag" => $tag
        ]);
        if($user){
            $_SESSION['id'] = $user['user_ID'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['admin'] = $user['user_admin'];
            header('Location: ../dashboard.php');
            exit;
        }
        header('Location: ../index.php');
        exit;
    }
    else
    {
        header('Location: ../index.php');
        exit;
    }
    
}
elseif ($_POST['formType'] == 'logout') {
    $_SESSION = [];
    session_destroy();
    header('Location: ../index.php');
    exit;  
}
?>