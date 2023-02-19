<?php
// Initialize variables with empty values
$name = $username = $password = $confirm_password = $email = $phone = $dob = $ssn = "";
$name_err = $username_err = $password_err = $confirm_password_err = $email_err = $phone_err = $dob_err = $ssn_err = "";

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your full name.";
    } else {
        $name = trim($_POST["name"]);
    }

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Passwords do not match.";
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    }

    // Validate phone
    if (empty(trim($_POST["phone"]))) {
        $phone_err = "Please enter your phone number.";
    } else {
        $phone = trim($_POST["phone"]);
    }

    // Validate date of birth
    if (empty(trim($_POST["dob"]))) {
        $dob_err = "Please enter your date of birth.";
    } else {
        $dob = trim($_POST["dob"]);
    }

    // Validate social security number
    if (empty(trim($_POST["ssn"]))) {
        $ssn_err = "Please enter your social security number.";
    } else {
        $ssn = trim($_POST["ssn"]);
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($phone_err) && empty($dob_err) && empty($ssn_err)) {
        // TODO: insert user into database, redirect to login page
        echo "Registration successful!";
    }
}
?>