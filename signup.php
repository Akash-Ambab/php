<?php

    include "validation.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    class User extends DataValidation {
        function __constuct() {
            parent::isDataEmpty($fname, $lname, $email, $password);
        }
    }

    $obj = new User;
    $obj -> isDataEmpty($fname, $lname, $email, $password);


