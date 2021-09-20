<?php

class DataValidation {

    function sanitizeInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);

        return $input;
    }

    function isDataEmpty($fname, $lname, $email, $password) {

        $fname = $this->sanitizeInput($fname);
        $lname = $this->sanitizeInput($lname);
        $email = $this->sanitizeInput($email);
        $password = $this->sanitizeInput($password);
        
        $name = "/^[a-zA-Z ]+$/";
        $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
        $number = "/^[0-9]+$/";

        if (strlen($fname) == 0) {
            $this->showMsg("Firstname is required");
            exit();
        }

        if (strlen($fname) < 4) {
            $this->showMsg("Firstname should be more than 3 letters");
            exit();
        }

        if (!preg_match($name, $fname)) {
            $this->showMsg("Firstname is not valid..!");
            exit();
        }

        if (strlen($lname) == 0) {
            $this->showMsg("Lastname is required");
            exit();
        }

        if (strlen($lname) < 4) {
            $this->showMsg("Lastname should be more than 3 letters");
            exit();
        }

        if (!preg_match($name, $lname)) {
            $this->showMsg("Lastname is not valid..!");
            exit();
        }

        if (strlen($email) == 0) {
            $this->showMsg("Email is required");
            exit();
        }

        if (!preg_match($emailValidation, $email)) {
            $this->showMsg("This $email is not valid..!");
            exit();
        }

        if (strlen($password) == 0) {
            $this->showMsg("Password is required");
            exit();
        }

        if (strlen($password) < 9) {
            $this->showMsg("Password is weak");
            exit();
        }

        $this->showMsg("Success");
    }

    function showMsg($msg) {
        echo $msg;
    }
}