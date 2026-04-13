
<?php 
  require"Config.php";
    
       session_start();
       function au()
       {
          global $conn; 
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        if(empty($email) || empty($pass) || empty($cpass))
        {
        echo '<script>alert("Error:Fill All the Deatils of User ")</script>';
        }
        else if($pass!=$cpass)
        {
            echo '<script>alert("Error:Confirm password is incorrect")</script>';
        }
        else 
        {   
           $query3="SELECT *FROM USERS WHERE EMAIL='$email';";
           $r=mysqli_query($conn,$query3);
           if($r->num_rows===1)
           {
               echo "<script>alert('Error:A User With Email Already Exist')</script>";
           }
           else
           {
           try
           {
           $query="INSERT INTO USERS(EMAIL,PASSWORD) values('$email','$pass');";
        
           if(mysqli_query($conn,$query))
           {
                echo '<script>alert("Registration Successfully")</script>';
           }
           else
           {
                $err=mysqli_error($conn);
                echo "<script>alert('$err')</script>";
           }
           }
           catch(Exception $e)
           {
               $mes=$e->getMessage();
               echo "<script>alert('Error:Make Sure Correct Details are Entered')</script>";
           }
           
        }
        }
       }
      
       if($_SERVER["REQUEST_METHOD"] == "POST") 
       {
            au();
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




<div  style="background-color: #81A6C6;" class="jumbotron text-center">
  <h1>Medical Diagnosis System</h1>
 <p> <strong></strong>(AI and Robotics Integrated Project)</strong></p>  
</div>
  <center>

<form style="height:350px; width:400px;border:3px; border-color: black; background-color: #81A6C6;; border-radius: 15px;"  method="post">
  <br>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:300px;" name="email">
   
  </div>
   <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" style="width:300px;" name="pass">
  </div>
 <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" style="width:300px; "  name="cpass">
  </div>

   <br>  
  <a href="index.php">
  <button type="button" class="btn btn-primary" style="width:100px;">Back</button>
  </a>
  <button type="submit" class="btn btn-primary" style="width:100px;">Register</button>
      <br>  
      <br>
  <div id="emailHelp" class="form-text">If Already Have an Account?Click Back</div>
</form>
</center>

</body>
</html>
