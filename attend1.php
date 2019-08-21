<html>
<body>
<?php
if(isset($_POST["submit"]))
{
  require "connection.php";
       $uid=$_POST['uid'];
      $squ="select * from students where uid='$uid'";
     $res=mysqli_query($conn,$squ);
     if(mysqli_num_rows($res) > 0)
      {
        while($row=mysqli_fetch_assoc($res))
        {
          $at= $row['attendance'];
          $att= $at+1;
         }

      $sql = "update students set attendance='$att' where uid='$uid'";
      if ($conn->query($sql) === TRUE)
       {
         $count=1;
         header('Location: http://localhost/csi/attend.php');
        }
     else
      {
        echo "Error: " . $sql . "<br>" . $conn->error;
       }
     }
     else {
       echo "no such student exists";
     }

   
   }
 ?>

</body>
</html>
