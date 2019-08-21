<?php
if(isset($_POST['submit']))
{
  require "connection.php";
  $uid=$_POST['uid'];
  $sid=$_POST['schoolid'];
 $sql="select * from emp where uid='$uid' ";
  $res=mysqli_query($conn,$sql);
  if( mysqli_num_rows($res) >0)
  {
    while($row = mysqli_fetch_assoc($res))
    {
     if($row['schoolid']==$sid)
     {
     echo "you can update";
     echo " update the student's attendance of a pariticular day one after the other...<br>click done when completed ";
     ?>
    <form action="func.php" method="POST">
    <p>Studentid:<input type="text" name="uid" required></p>
    <p><input type="submit" name="upload" value="upload"></p>
    <p><input type="submit" name="done"  value="Done..!!"></p>
    </form>

<?php if(isset($_POST['upload']))
   {  echo"hello";
      echo $_POST['uid'];
   } ?>

<?php
      }
     else {
       echo "you cannot";
     }
   }

  }
  else {
    echo "you cannot update the attendance";
  }


}
?>
