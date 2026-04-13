
<?php 
session_start();
require_once "Config.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $query="SELECT *FROM USERS WHERE EMAIL='$email' AND PASSWORD='$pass'";
 $result = mysqli_query($conn,$query);
 if($result && mysqli_num_rows($result)===1)
 {
  $_SESSION['loggedin'] = 1;
  header("Location:Dashboard.php");
  exit();
 }
 else
 {
   echo "<script>alert('Invalid Username or Password')</script>";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>MEDI-MIND</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    
</head>
<body style="background-color:#F3F4F4;">
<img src="http://medimind.gt.tc/Medical.jpg"  style="width:100%;opacity:30%;position: absolute; left: 0px; top: 0px; z-index: -1;">


<div  style="background-color: #81A6C6;z-index: 1;" class="jumbotron text-center">
  <h1>Medical Diagnosis System</h1>
 <p> <strong></strong>(AI and Robotics Integrated Project)</strong></p>  
</div>
<div style="position:fixed;left:45%;">
    <center>
<form style="height:1000px; width:700px;border:3px; border-color: black; background-color: #81A6C6; border-radius: 15px;z-index: 1;border:solid 2px;"  method="post">
    <br>
    <br>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="position:fixed;left:46%;font-size:30px;">Email address</label>
      <br>
      <br>
        <br>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:90%;height:80px;font-size:30px;left:46%;" name="email" placeholder="Enter Email">
      <br>
    <div id="emailHelp" class="form-text" style="font-size:23px;">We'll never share your email with anyone else.</div>
  </div>
    <br>
    <br>
  <div class="mb-3">
    <label for="exampleInputPassword1"  style="position:fixed;left:46%;font-size:30px;" class="form-label">Password</label>
      <br>
        <br>
        <br>
    <input type="password" class="form-control" id="exampleInputPassword1" style="width:90%;height:80px;font-size:30px;left:46%;" id="pws" name="pass" placeholder="Enter Password">
  </div>
    <br>
    <br>
    

   <br>  
   <br>
    <br>
      <br>
    <br>
   
    <br>
    <br>
      <br>
    <br>
       <br>
      <br>
    <br>
   <input type="submit" class="btn btn-primary" style="width:90%;font-size:30px;" value="Login">
   <br>
   <br>
  <a href="register.php">
  <button type="button" class="btn btn-primary" style="width:90%;font-size:30px;">Register</button>
  </a>
  <br>
  
   <br>
  <div id="emailHelp" class="form-text"  style="font-size:23px;">If Don't Have an Account?Click Register</div>
</form>
        </center>
</div>

<br>
<br>
<br>
<br>
<footer style="position:fixed;bottom:0;left:0;width:100%;">

<div  style="background-color: #81A6C6;z-index: 1;height:400px;"class="jumbotron text-center">
  <h1>Project Made by RajharpreetSingh,Swaym Singh keerti, nikhil , Sourav</h1>
</div>

</footer>
</body>
</html>
