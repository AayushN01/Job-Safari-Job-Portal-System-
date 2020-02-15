<?php
session_start();
$username = "";
$password = "";
$errors = array();

$db = mysqli_connect('localhost','root','','joblister');
//LOGIN USER
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
   // $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Enter username");
    }
    if (empty($password)) {
        array_push($errors, "Enter password");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM jobseeker WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in Successfully";
            header('location: jsprofile.php');
        } else {
            array_push($errors, "Enter correct username and password");
        }
    }
}