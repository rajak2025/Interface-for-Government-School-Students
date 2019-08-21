<html>
<head>
<style>
</style>
</head>
<body>
<h1 align=center>Enter the particular student id who left the school</h1>
<form action="delete.php" method="POST">
<p align=center>Id:<input type="text" name="uid"></p>
<p align=center><input type="submit" name="submit" value="delete"></p>
<?php
require "connection.php";
$uid=$_POST['uid'];
$sql="select * from students where uid='$uid'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
  while($row=mysqli_fetch_assoc($res))
  {
    $sid=$row['uid'];
    $first=$row['firstname'];
    $last=$row['lastname'];
    $mobile=$row['mobile'];
    $gender=$row['gender'];
    $father=$row['father'];
    $mother=$row['mother'];
    $sqlly="insert into drops (uid,firstname,lastname,mobile,gender,mother,father) value('$uid','$first','$last','$mobile','$gender','$mother','$father')";
    if (mysqli_query($conn, $sqlly)) {
        echo "Record inserted successfully";

     $sqll="delete from students where uid='$uid' ";
     if (mysqli_query($conn, $sqll)) {
         echo "Record deleted successfully";
     } else {
         echo "Error deleting record: " . mysqli_error($conn);
     }
   }
   else {
      echo "Error inserting record: " . mysqli_error($conn);
  }
  }
}
else {
  echo "no such student exists";
}

  ?>
