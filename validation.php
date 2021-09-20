<?php

session_start();

class DataValidation {
    function isDataEmpty($fname, $lname, $email, $password) {
        $name = "/^[a-zA-Z ]+$/";
        $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
        $number = "/^[0-9]+$/";

        if (strlen($fname) == 0) {
            echo "Firstname is required";
            exit();
        }

        if (strlen($fname) < 4) {
            echo "Firstname should be more than 3 letters";
            exit();
        }

        if (!preg_match($name, $fname)) {
            echo "This $fname is not valid..!";
            exit();
        }

        if (strlen($lname) == 0) {
            echo "Lastname is required";
            exit();
        }

        if (strlen($lname) < 4) {
            echo "Lastname should be more than 3 letters";
            exit();
        }

        if (!preg_match($name, $lname)) {
            echo "This $lname is not valid..!";
            exit();
        }

        if (strlen($email) == 0) {
            echo "Email is required";
            exit();
        }

        if (!preg_match($emailValidation, $email)) {
            echo "This $email is not valid..!";
            exit();
        }

        if (strlen($password) == 0) {
            echo "Password is required";
            exit();
        }

        if (strlen($password) < 9) {
            echo "Password is weak";
            exit();
        }

        echo "Success";
    }
}