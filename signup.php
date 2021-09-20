<?php

    include "validation.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    class User extends DataValidation {
        
    }

    $obj = new User();
    $obj -> isDataEmpty($fname, $lname, $email, $password);


