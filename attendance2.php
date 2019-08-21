<?phpif(isset($_POST['upload']))
{
  $raj=$_POST['uid'];
  $at=$_POST['attendance'];
  mark($raj,$at);
}


function mark($p,$q)
{
  require "connection.php";
  $squ="select attendance from students where uid='$p'";
  $r=mysqli_query($conn,$squ);
  if(mysqli_num_rows($r)>0)
   {
     if($q==1)
      echo "1";
      else {
        echo "0";
      }
   }

}


?>
