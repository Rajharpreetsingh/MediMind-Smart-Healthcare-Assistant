 <?php   
         session_start();
         if($_SESSION['loggedin']!==1) 
         {
          header("Location:index.php");
          exit();
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




<body style="background-color:white;">



<div  style="background-color:#337AB7;box-shadow: 10px 10px 10px" class="jumbotron text-center">
 <strong> <p style="color:#F3F4F4;font:verdana;font-size:100px;position:relative;width:100%">MediMind 💊</p> </strong>

</div>


  <br>
   



<center>
<img src="medical.jpg"  style="width:100%;opacity:50%;position: absolute; left: 0px; top: 0px;z-index:-1;">
<div style="height:2200px;width:1200px;background-color:#F3F4F4;border:solid 1px;border-radius:15px;box-shadow: 10px 10px 10px;z-index:0;">
   
        <br>
        <br>
  
<form  action="Download.php" method="POST">



  <br>
  <label style="font-size:30px;position:relative;left:-250px;color:gray">Enter Patient's Name  </label>
  <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px;" placeholder="Name of Patient"  required>
  <br>
  <br>
  <label style="font-size:30px;position:relative;left:-250px;font-family:sans-serif;color:gray">Enter Patient's Age  </label>
  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px; " placeholder="Age of Patient" name="age" min=0 max=120  required>
  <br>
  <br>
  <label style="font-size:30px;position:relative;left:-240px;font-family:sans-serif;color:gray">Enter Blood Pressure</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px; " placeholder="Blood Pressure" name="bp"  min=70 max=200 required>
  <br>
  <br>

  
  <label style="font-size:30px;position:relative;left:-220px;font-family:sans-serif;color:gray">Enter Heart Rate (Pulse)</label>
  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px; " placeholder="Current Heart Rate of the Patient" name="pulse" min=40 max=180 required>
  <br>
  <br>
  <label style="font-size:30px;position:relative;left:-220px;font-family:sans-serif;color:gray">Enter Body Temperature</label>
  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px; " placeholder="Current Body Temperature" name="bt" required>
  <br>
  <br>
  <label style="font-size:30px;position:relative;left:-220px;font-family:sans-serif;color:gray">Enter Respiratory Rate</label>
  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px; " placeholder="Current Respiratory Rate" name="rr"  min="8" max="40" required>
    <br>
  <br>
    <label style="font-size:30px;position:relative;left:-220px;font-family:sans-serif;color:gray">Enter Oxygen Saturation</label>
  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:800px;height:90px;font-size:36px; " placeholder="Oxygen Saturation" name="oxygen" min="50" max="100" required>
  <br>
  <br>
  <label    style="font-size:40px;" >Gender  </label>
  <br>
  <select style="font-size:40px;width:300px" name="gender" required>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
  <br>
  <br>
  <br>
<label for="exampleInputEmail1" class="form-label"  style="font-size:30px;">Describe Your Symptoms</label>
<br>
<?php



if(isset($_POST['prompt']))
{
    include 'API.php';
}
?>
  <br>
  <br>
<div class="mb-3">

  <textarea name="prompt" class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:900px;height:300px;font-size:30px;border-radius:15px;border:solid 1px;border-color:black" required></textarea>


 <br>


<br>
<button type="submit" class="btn btn-primary"  style="height:70px;width:800px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size:26px;">Submit Symptoms</button>
<br>
<br>
<br>
<a href="index.php">
<button type="button" class="btn btn-primary"  style="height:70px;width:800px;font-family: Verdana, Geneva, Tahoma, sans-serif;font-size:26px;">Sign Out</button>
</a>
</form>

</center>
</div>

</body>
</html>