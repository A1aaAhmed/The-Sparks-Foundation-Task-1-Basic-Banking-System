<?php
$con=mysqli_connect("localhost","root","AAla4321@","users");
$name=$_GET['link'];
$q="SELECT *FROM `myguests` WHERE `myguests`.`name`='{$name}'";
$s=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($s);
?>
<html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>transfer Money</title>
  <link href="styles\style.css" rel="stylesheet">
  
</head>
<body>
<div ip="nav">
    <div class="button"><p class="log">Sing Up</p></div>
    <div class="button"><p class="log">Sing In</p></div></div>
    <h1 id="t_t">User Details</h1>
  <div class="small_img3"></div>
  <div class="user">
  </div>
 <a class="button" id="t" href="transfer.php" target="_blank"><p class="log">Transfer</p></a>
<div class="user">
Name:<p class="info"><?=$row['name']?></p>
Email:<p class="info"><?=$row['email']?></p>
Current Balance:<p class="info"><?=$row['balance']?></p>
</div>
</body>
</html>
<?php
mysqli_free_result($s);
mysqli_close($con);
?>