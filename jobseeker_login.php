<?php 
//include "servers.php";
include "connection.php";
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jobseeker Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
     <header>
         <nav style="text-align: inherit; float: left; word-spacing: 10px; font-size: 25px;">
        <ul>
        <li><a href="jobseeker_login.php">JOB-SEEKER</a></li>
        <li><a href="recruiter_login.php">ADMIN</a></li>
        </ul>
      </nav>    
    </header>
     <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="row">
            <div class="col-md-5 register-left">
               </div>
            <div class="col-md-7 register-right">
              <h2>Login Here</h2>
                  <div class="box1">
                    <h1 style="text-align: center; font-size: 30px;">JOB-SEEKER LOGIN</h1><br><br>
        
    <form name="login" action="" method="post" >
      <?php //include"errors.php"; ?>
    <table>
        <tr>
          <td style="padding:10px; font-size: 18px;">Username</td>
          <td>
            <input class="form-control" type="text" name="username" placeholder="username" style="height: 30px; width: 100%">
          </td>
        </tr>
        <tr>
          <td style="padding:10px; font-size: 18px;">Password</td>
          <td><input class="form-control"  type="password" name="pwd"placeholder="password" style="height: 30px; width: 100%"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
            <input class="btn btn-default"  type="submit" name="submit" value="Login" style="width: 75%;height: 35px; background-color: #20c997;">
          </td>
        </tr>
      </table><br>
    </form><br>
    <p>
                Not registered?<a href="jsregistration.php">Register</a>
              </p><br>
              
    </div>    
    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $password=$_POST['pwd'];
    //$password = md5($password);

    $count = 0;
    $result = mysqli_query($db, "SELECT * FROM jobseeker WHERE username='".$username."' and password='".$password."'");
      $count = mysqli_num_rows($result);






      if($result){
    while ($row=mysqli_fetch_array($result)) {
      echo '<script type="text/javascript"> alert("Login successful as jobseeker ( '.$row['username'].' )")</script>';
    } 
  
    if (mysqli_num_rows($result)>0) {
      ?>
      <script type="text/javascript">
        window.location.href="home.php"
      </script>
      <?php
    }else{
      if (empty($username)) {
array_push($errors,"username is required");
  }
  if (empty($password)) {
  array_push($errors,"Password is required");
  }
    }
    }else{
      echo "no user found";
    }
    if($count==0)
    {
      ?>
      <script type="text/javascript">
        alert("Enter valid username and password");
      </script>
      <?php     
    }
    else
    {
      $_SESSION['login']= $username;
      ?>
      <script type="text/javascript">
        window.location.href="jsprofile.php"
      </script>
      <?php
    }
}

?>  
</body>

  </body>
</html>
