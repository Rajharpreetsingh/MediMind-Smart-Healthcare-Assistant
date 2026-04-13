 <?php   
         session_start();
         if($_SESSION['loggedin']!==1) 
         {
          header("Location:Home.php");
          exit();
        }      
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MEDI-MIND</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#F3F4F4;">
  
<center>
<div style="height:800px;">
<?php
if(isset($_POST['prompt']))
{
    include 'API.php';
}
?>
<br>
<br>
<br>
<br>
<div style="height: 1800px;width:1400px;background-color:white;border-radius:10px;box-shadow: 10px 10px 10px;border:solid 0.1px; ">
<br>

<h1 style="color:#337AB7;font-size:40px">  <strong> 🩺 Health Diagnosis Report ❤️ </strong></h1>
<hr>
<br>
<br>

<labeL style="font-size:30px;font-style:normal;position:relative;left:-500px;color:#337AB7">Patient Details</labeL>
<br>
<br>
<div class="container">

<label style="position: relative;left:-450px;font-size:25px">Name:</label><label style="position: relative;left:-450px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['pname'] ?></label>
<label style="position: relative;left:200px;font-size:25px">Age:</label><label style="position: relative;left:200px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['age'] ?></label>
<br>
<br>
<label style="position: relative;left:-360px;font-size:25px">Gender:</label><label style="position: relative;left: -350px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['gender'] ?></label>
<label style="position: relative;left:260px;font-size:25px">Body Temparture:</label><label style="position: relative;left:260px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['bt'] ?></label>
<br>
<br>
<label style="position: relative;left:-335px;font-size:25px">Blood Pressure:</label><label style="position: relative;left: -335px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['bp'] ?></label>
<label style="position: relative;left:160px;font-size:25px">Heart Rate:</label><label style="position: relative;left:160px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['pulse'] ?></label>
<br>
<br>
<label style="position: relative;left:-300px;font-size:25px">Respiratory Rate:</label><label style="position: relative;left: -300px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['rr'] ?></label>
<label style="position: relative;left:235px;font-size:25px">Oxygen Saturation:</label><label style="position: relative;left: 240px;font-size:25px;font-family:monospace;color:gray"><?php echo $_POST['oxygen'] ?></label>
<br>
<br>
<br>
<labeL style="font-size:30px;font-style:normal;position:relative;left:-525px;color:#337AB7">Diagnosis</labeL>
<center>
<br>
<br>
<textarea style="width:1200px;height:400px;font-size:24px;border-radius:2px;border:solid 0.5px;font-family:Verdana, Geneva, Tahoma, sans-serif">
<?php echo $aiResponse ?? "No diagnosis generated."; ?>
</textarea>
<br>
<br>
</center>
<br>
<br>
<button  onclick="window.print()" class="btn btn-primary" style="width:700px;height:100px;font-size:26px;">Print Report  🖨️</button>
<br>

<br>
<a href="Dashboard.php">
<button   class="btn btn-primary" style="width:700px;height:100px;font-size:26px;">Back</button>
</a>
<br>
</div>
</center>
</body>
</html>

