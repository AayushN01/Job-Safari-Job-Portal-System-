<?php
session_start();
$username = "";
$email = "";
$password1 = "";
$password2 = "";
$address = "";
$contact = "";
$errors = array();

$db = mysqli_connect('localhost','root','','joblister');
 if(isset($_POST['submit'])){
  $username = mysqli_real_escape_string($db,$_POST['username']);
  	$email = mysqli_real_escape_string($db,$_POST['email']); 
 	$password1 = mysqli_real_escape_string($db,$_POST['pwd1']);
 	$password2 = mysqli_real_escape_string($db,$_POST['pwd2']);
 	$address = mysqli_real_escape_string($db,$_POST['address']);
	$contact = mysqli_real_escape_string($db,$_POST['contact']);
	
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
        
 	$user_check_query = "SELECT * FROM recruiter WHERE username = '$username' OR email = '$email' LIMIT 1";
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
    //	$password = md5($password_1);//encrypt password before saving in the database
    	$query = "INSERT INTO recruiter (username, email, password, address, contact) VALUES('$username','$email','$password1','$address','$contact')";
      
    	mysqli_query($db, $query);
    	$_SESSION['username'] = $username;
    	$_SESSION['success'] = "Successfully registered";
    	header('location: recruiter_login.php');
    }
 }
