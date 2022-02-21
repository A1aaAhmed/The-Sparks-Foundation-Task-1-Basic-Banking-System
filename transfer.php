<?php
$con=mysqli_connect("localhost","root","AAla4321@","users");
?>
<?php


if(isset($_POST['submit']))

{
    $name = $_POST['name'];
    $money = $_POST['money'];
    print $money;
    $sql="SELECT *FROM `myguests` WHERE `myguests`.`name`='{$name}'";
    $query = mysqli_query($con,$sql);
    $s = mysqli_fetch_array($query); 
                $new= $s['balance'] + $money;
                $sql="UPDATE `myguests` SET `balance`='{$new}' WHERE `myguests`.`name`='{$name}'";
                mysqli_query($con,$sql);

                $new= 0;
                $money =0;
        }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic banking System</title>
  <link href="styles\style.css" rel="stylesheet">
</head>
<body>
<div ip="nav">
    <div class="button"><p class="log">Sing Up</p></div>
    <div class="button"><p class="log">Sing In</p></div></div>
    <h1 id="t_t">Transfer Money</h1>
  <div class="small_img2"></div>
  <a class="button" id="c" href="customers.php" target="_blank"><p class="log">Customers</p></a>
  <form name="form" method="post">  
  <label for="name">Enter the user name to transfer to :</label>
  <input type="text" name="name">
  <label for="name">Enter the amount of money in $:</label>
  <input type="number" name="money">
  <input type="hidden" name="form_submitted" value="1" />
  <input type="submit" name="submit" value="submit"> 
  </form> 
 

 
</body>
</html>
