<?php

include 'db.php';

$db = new db();


    $email = $_POST['email'];
    $password = $_POST['password'];

    if($db->login($email, $password)){
        echo "<script>alert('User logged in successfully');</script>";
        echo "<script>window.location.href='../welcome.php';</script>";
    }else{
        echo "<script>alert('User not found');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    }
