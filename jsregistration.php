<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
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
              <h2>Register Here</h2>
             <div class="box2">
      <h1 style="text-align: center; font-size: 23px;">JOB-SEEKER REGISTRATION</h1><br>
      
    <form name="Registration" action="" method="post">
      <?php  include "errors.php"; ?>

    <table>
        <tr>
          <td style="padding:10px; font-size: 18px;">First Name</td>
          <td>
            <input class="form-control"  type="text" name="firstname" placeholder="Firstname" style="height: 30px; width: 100%">
          </td>
        </tr>
        <tr>
          <td style="padding:10px; font-size: 18px;">Last Name</td>
          <td>
            <input class="form-control"  type="text" name="lastname" placeholder="Last Name" style="height: 30px; width: 100%">
          </td>
        </tr>
        <tr>
          <td style="padding:10px; font-size: 18px;">Gender</td>
          <label class="radio-inline">
            <td>
            <input   type="radio" name="gender" value="male">Male
            <input   type="radio" name="gender" value="Female">Female
            <input  type="radio" name="gender" value="Others" >Others
            </td>
          </label>  
        </tr>
          <tr>
          <td style="padding:10px; font-size: 18px;">Email</td>
          <td>
            <input class="form-control"  type="text" name="email" placeholder="Email" style="height: 30px; width: 100%">
          </td>
        </tr>   
            <tr>
          <td style="padding:10px; font-size: 18px;">Username</td>
          <td>
            <input class="form-control"  type="text" name="username" placeholder="Username" style="height: 30px; width: 100%">
          </td>
        </tr> 
          <tr>
          <td style="padding:10px; font-size: 18px;">Date of Birth</td>
          <td>
            <input class="form-control"  type="date" name="dob" placeholder="DOB" style="height: 30px; width: 100%">
          </td>
        </tr>   
        <tr>
          <td style="padding:10px; font-size: 18px;">Password</td>
          <td><input class="form-control"  type="password" name="pwd1"placeholder="password" style="height: 30px; width: 100%"></td>
        </tr>
          <tr>
          <td style="padding:10px; font-size: 18px;">Re-Enter Password</td>
          <td><input class="form-control"  type="password" name="pwd2"placeholder="password" style="height: 30px; width: 100%"></td>
        </tr>
        
          <tr>
          <td style="padding:10px; font-size: 18px;">Contact</td>
          <td>
            <input class="form-control"  type="text" name="contact" placeholder="Contact" style="height: 30px; width: 100%">
          </td>
        </tr>
          <tr>
          <td style="padding:10px; font-size: 18px;">Address</td>
          <td>
            <input class="form-control"  type="text" name="address" placeholder="Address" style="height: 30px; width: 100%">
          </td>
        </tr>
          <tr>
          <td style="padding:10px; font-size: 18px;">Area of interest</td>
          <td>
            <select name="interest">
              <option value="...">Select </option>
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
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
            <input class="btn btn-default"  type="submit" name="submit" value="Register" style="width: 75%;height: 35px; background-color: #20c997;">
          </td>
        </tr>
      </table>
      
    </form><br>
    </div>    

            </div>

          </div>

        </div>

      </div>

    </div>
  </body>
</html>
