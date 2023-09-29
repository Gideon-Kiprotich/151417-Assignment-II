<?php

class db{
    public function __construct(){
        // Connect to the db using PDO
        $this->db = new PDO('mysql:host=localhost;dbname=gideon', 'root', '');
    }

    public function register($fname, $mname, $lname, $email, $password, $phone){
        // Prepare the query
        $query = $this->db->prepare("INSERT INTO users (fname, mname, lname, email, password, phone) VALUES (?, ?, ?, ?, ?, ?)");
        // Execute the query
        $query->execute([$fname, $mname, $lname, $email, $password, $phone]);
        // Return the result
        return $query;
    }
    public function login($email, $password){
        // Prepare the query
        $query = $this->db->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        // Execute the query
        $query->execute([$email, $password]);
        if($query->rowCount() > 0){
            // Return the result
            return $query->fetch();
        }else{
            return false;
        }
    }
}