<?php

$user= [
    "joe" => "123",
    "joe" => "123"
];


session_start();

// verfit the login

if (isset($_POST['user']) && !isset($_SESSION['user'])) {

    if ($user[$_POST['user']] == $_POST['password']) {

    $_SESSION['user'] = $_POST['user'];
    }



//Failed Login
 if (!isset($_SESSION['user'])) {$failed = true;}

}
 // LOgin Vaild 

if (isset($_SESSION['user'])){

    header("Location: index.php");
    exit(); 

 }

 ?>

 
