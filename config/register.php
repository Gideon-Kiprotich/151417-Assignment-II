<?php

include 'db.php';

$db = new db();


    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $db->register($fname, $mname, $lname, $email, $password, $phone);
    echo "<script>alert('User registered successfully');</script>";
    echo "<script>window.location.href='../views/welcome.php';</script>";
