<?php
session_start();
$firstname = "";
$lastname = "";
$gender = "";
$email = "";
$username = "";
$password1 = "";
$password2 = "";
$dob = "";
$address = "";
$contact = "";
$interest = "";
$errors = array();

$db = mysqli_connect('localhost','root','','joblister');
 if(isset($_POST['submit'])){
 	$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
 	$lastname = mysqli_real_escape_string($db,$_POST['lastname']);
 	$gender = mysqli_real_escape_string($db,$_POST['gender']);
  	$email = mysqli_real_escape_string($db,$_POST['email']);
 	$username = mysqli_real_escape_string($db,$_POST['username']);
 	$password1 = mysqli_real_escape_string($db,$_POST['pwd1']);
 	$password2 = mysqli_real_escape_string($db,$_POST['pwd2']);
 	$dob = mysqli_real_escape_string($db,$_POST['dob']);
 	$address = mysqli_real_escape_string($db,$_POST['address']);
	$contact = mysqli_real_escape_string($db,$_POST['contact']);
	$interest = mysqli_real_escape_string($db,$_POST['interest']);

		if(empty($firstname) || empty($lastname)){
 	 	array_push($errors, "Enter complete name");
 		 }

 		if(empty($username)){
 	 	array_push($errors, "Enter username");
 		 }

 	 if(empty($email)){
 	 	array_push($errors, "Enter email");
 		 }

 		  if(empty($password1)){
 	 	array_push($errors, "Enter password");
 		 }
           if(empty($password2)){
        array_push($errors, "Enter password");
         }
           if($password1 != $password2){
        array_push($errors, "The passswords does not match");
         }
        
 	$user_check_query = "SELECT * FROM jobseeker WHERE username = '$username' OR email = '$email' LIMIT 1";
 	$result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
    	if($user['username'] === $username){
    		array_push($errors, "Username already exists");
    	}
    	if($user['email'] === $email){
    		array_push($errors, "Email already exists");
    	}
    }

    if(count($errors) == 0){
    //	$password = md5($password_1);//HASH FUNCTION..encrypt password before saving in the database
    	$query = "INSERT INTO jobseeker (firstname, lastname, gender, email, username, dob, password, address, contact, interest) VALUES('$firstname','$lastname','$gender','$email','$username','$dob','$password1','$address','$contact', '$interest')";
      
    	mysqli_query($db, $query);
    	$_SESSION['username'] = $username;
    	$_SESSION['success'] = "Successfully registered";
    	header('location: jobseeker_login.php');
    }
 }
