<?php

    include "validation.php";
    session_start();


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    class User extends DataValidation {
        function greet() {
            echo "Hello";
        }
    }

    $obj = new User();
    $obj -> isDataEmpty($fname, $lname, $email, $password);


