<?php
$con=mysqli_connect("localhost","root","AAla4321@","users");
$q="SELECT *FROM `myguests`";
$s=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>all Customers</title>
  <link href="styles\style.css" rel="stylesheet">
  <style>
  table {
     border-collapse: collapse;
     width: 100%;}
   td {
    padding: 1%;
    text-align: left;
    padding-left:4%;
    border-bottom: 1px solid #ddd;
    font-size:20px;
  }
  th{
    padding: 2%;
    text-align: center;
    border-bottom: 1px solid #ddd;
    color:red;
    font-size:40px;
    padding-top:10%;

    }
  td:hover {background-color: coral;}
</style>
</head>
</head>
<body>
<div ip="nav">
    <div class="button"><p class="log">Sing Up</p></div>
    <div class="button"><p class="log">Sing In</p></div></div>
  <h1 id="a_t">Customers List</h1>
  <div class="small_img"></div>
<table>
  <thead>
    <tr>
      <th>Names</th>
      <th>Balance</th>
    </tr>
  </thead>
  <?php
  while($row=mysqli_fetch_assoc($s)){
    ?>
    <tr>
     <td> <a href="one_user.php?link=<?=$row['name']?>"target="_blank"> <?=$row['name']?> </a></td>
     <td> <a href="one_user.php?link=<?=$row['balance']?>"target="_blank"> <?=$row['balance']?> </a></td>
    </tr>
    <?php
  }
  ?>

</tbody>

</body>
</html>
<?php
  mysqli_free_result($s);
  mysqli_close($con);
  ?>
