<?php
include "connection.php";
session_start();
$username=$_SESSION['login'];
$result=mysqli_query($db, "SELECT * FROM jobseeker WHERE username = '$username'");
  $retrieve = mysqli_fetch_array($result);
  //print_r($retrieve);
  $firstname = $retrieve['firstname'];
  $lastname = $retrieve['lastname'];
  $email = $retrieve['email'];
    $username = $retrieve['username'];
    $password = $retrieve['password'];
    $address = $retrieve['address'];
  $contact = $retrieve['contact'];
  $interest = $retrieve['interest'];
  $file = $retrieve['file'];

?>

<!DOCTYPE html>
<html>
<head>  
  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width= device-width, initial-scale=1" >
      <title>PROFILE-UPDATE</title>
      <style type="text/css">
        .wrapper{
          width: 500px;
          margin: 0 auto;

        }
      </style>
</head>
 <body>
  <div class="container">
      <div class="header clearfix">
        <nav style="font-size: 25px;">
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="homejoblister.php">Home</a></li>&nbsp &nbsp
           
                        <li role="presentation"><a href="jsprofile.php">Profile</a></li>&nbsp &nbsp
                        <li role="presentation"><a href="index.php">LogOut</a></li>&nbsp &nbsp

          </ul>
        </nav><br>
            </div>
        </div>     
        <div class="wrapper" style="color: black;">

        <h2 style="text-align: center; font-size: 30px;"><b>WELCOME, </b>
          <?php echo $username; ?>
        </h2><br>
        <h1 style="text-align: center; font-size: 25px;">Edit your Profile</h1><br>     
      
   
        <center><img style="width: 250px;" src="images/pic.jpg"></center><br>
        <form name="profile-edit" action="" method="post">
       <table class="table table-border">
        <tr>
          <td style="padding:10px; font-size: 18px;">First Name</td>
          <td>
            <input class="form-control"  type="text" name="firstname" value="<?php echo $firstname ; ?>"  style="height: 30px; width: 100%">
          </td>
        </tr>
        <tr>
          <td style="padding:10px; font-size: 18px;">Last Name</td>
          <td>
            <input class="form-control"  type="text" name="lastname" value="<?php echo $lastname ; ?>"  style="height: 30px; width: 100%">
          </td>
        </tr>
         <tr>
          <td style="padding:10px; font-size: 18px;">Email</td>
          <td>
            <input class="form-control"  type="text" name="email" value="<?php echo $email ; ?>"  style="height: 30px; width: 100%">
          </td>
        </tr>   
            <tr>
          <td style="padding:10px; font-size: 18px;">Username</td>
          <td>
            <input class="form-control"  type="text" name="username" value="<?php echo $username ; ?>"  style="height: 30px; width: 100%">
          </td>
        </tr> 
       
        <tr>
          <td style="padding:10px; font-size: 18px;">Password</td>
          <td><input class="form-control"  type="text" name="password" value="<?php echo $password ; ?>" style="height: 30px; width: 100%"></td>
        </tr>
          
          <tr>
          <td style="padding:10px; font-size: 18px;">Contact</td>
          <td>
            <input class="form-control"  type="text" name="contact" value="<?php echo $contact ; ?>" style="height: 30px; width: 100%">
          </td>
        </tr>
          <tr>
          <td style="padding:10px; font-size: 18px;">Address</td>
          <td>
            <input class="form-control"  type="text" name="address" value="<?php echo $address ; ?>" style="height: 30px; width: 100%">
          </td>
        </tr>
          <tr>
          <td style="padding:10px; font-size: 18px;">Area of interest</td>
          <td>
                <select name="interest">
              <option value="...">Choose a category</option>
              <option value="Business">Business</option>
              <option value="Technology">Technology</option>
              <option value="Retail">Retail</option>
              <option value="Construction">Construction</option>
              <option value="Health">Health</option>
              <option value="Education">Education</option>
              <option value="Repair & Maintainence">Repair & Maintainence</option>
              <option value="Environment">Environment</option>
              <option value="Travel">Travel</option>
              <option value="Others">Others</option>              
            </select>
          </td>
          </td>
        </tr>
            <tr>
          <td style="padding:10px; font-size: 18px;">Your CV</td>
          <td>
             <input class="form-control"  type="file" name="file" style="height: 45px; width: 100%">
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
            <input class="btn btn-default"  type="submit" name="submit1" value="Update" style="width: 25%;height: 35px; background-color: #20c997;">
          </td>
        </tr>
      </table>
      <a href="jsprofile.php" style="font-size: 20px;">Back</a>
      
    </form>
        
       <?php       
$username=$_SESSION['login'];
       if(isset($_POST['submit1'])){
    $firstname = $_POST['firstname'];     
     $lastname = $_POST['lastname'];
      $email = $_POST['email'];
  $username = $_POST['username']; 
   $password = $_POST['password'];   
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $interest = $_POST['interest'];
 $file = $_POST['file'];

  $sqli = "UPDATE jobseeker SET firstname = '$firstname', lastname = '$lastname',  email = '$email', username = '$username', password = '$password', address = '$address', contact = '$contact', interest ='$interest', file = '$file' WHERE username = '".$_SESSION['login']."'; ";
  if(mysqli_query($db, $sqli)){
    ?>
    <script type="text/javascript">
      alert("Profile updated")
     window.location.href="jsprofile.php"
    </script>
    <?php
  } 

       }
       ?>

      </div>