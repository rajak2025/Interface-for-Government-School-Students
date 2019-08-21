<?php
if(isset($_POST['submit']))
{
  require "connection.php";
  $uid=$_POST['uid'];
  $schoolid=$_POST['schoolid'];
  $region=$_POST['region'];
  $city=$_POST['city'];
  $sql="select * from emp where schoolid='$schoolid' ";
  $result =mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0)
    {
       $sqll="select * from emp where uid='$uid' ";
        $re= mysqli_query($conn,$sqll);
          if (mysqli_num_rows($re) > 0)
          {
            echo "you can update the attendance..!!!";
             echo "Enter the student ids who are present today to update the attendance status of a child one by one
                 and then click on 'done' when you completed the updation" ;
            ?>
          <form action ="attendance1.php" method="POST">
            UID<input type="text" name="id" required>
              <input type="submit" name="upload" >
          </form>
<?php
   if(isset($_POST['upload']))
    {
      $stu=$_POST['id'];
      echo $stu;
    }

             }
             else {
               echo" you cannot update ";
             }

      }



else
  echo "enter a valid schoolid";
}







?>
