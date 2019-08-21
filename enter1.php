<html>
<head>
<style>
body {
     border: 2px solid black;
     }
div {

    margin-top: 50px;
    margin-bottom: 90px;
    margin-right: 500px;
    margin-left: 500px;
     background-position: right top;
     background-attachment: fixed;

}
</style>
</head>
<body>
<div>
<h1><font size="7"><i>Please fill the below details to register new student.....!!! </i></font></h1>
<form action="enter1.php" method="POST">
 <table>
  <tr>
     <td><b><font size="5">UID:</font></b></td>
     <td><input type="text" name="uid"  placeholder="unique aadhar id"
                     pattern="[0-9]{12}" title="Only 12 numbers are allowed" required > </td>
   </tr>
  <tr>
      <td><b><font size="5">First Name:</font></b></td>
      <td><input type="text" name="first" pattern="[A-Za-z\s]{1,21}" title="Only 21 alphabets and blankspaces are allowed" required  placeholder=" First name"></td>
   </tr>
   <tr>
       <td><b><font size="5">Last Name:</font></b></td>
       <td><input type="text" name="last" pattern="[A-Za-z\s]{1,21}"  title="Only 21 alphabets and blankspaces are allowed" required  placeholder=" Last name"  ></td>
     </tr>
     <tr>
         <td><b><font size="5">Father Name:</font></b></td>
         <td><input type="text" name="father" pattern="[A-Za-z\s]{1,21}"   title="Only 21 alphabets and blankspaces are allowed" required  placeholder="Father name"></td>
       </tr>
       <tr>
            <td><b><font size="5">Mother Name:</font></b></td>
            <td><input type="text" name="mother"  pattern="[A-Za-z\s]{1,21}"  title="Only 21 alphabets and blankspaces are allowed" required   placeholder="Mother name"></td>
       </tr>
       <tr>
             <td><b><font size="5">DOB:</font></b></td>
             <td><input type="date" name="dob"   required></td>
        </tr>

       <tr>
             <td><b><font size="5">Mobile Number:</font></b></td>
             <td><input type="text" name="mobile" pattern="[0-9]{10}" title="Only 10 numbers are allowed" required   placeholder="Mobile number"></td>
        </tr>
        <tr>
		<td><b><font size="5">Email:</font></b></td>
		<td><input type="text" name="email" pattern="[a-z0-9._%+-]+@gmail+\.[a-z]{2,3}$" title="enter a valid email-id" required   placeholder=" email-id "></td>
        </tr>
        <tr>
		<td><b><font size="5">Gender:</font></b></td>
	        <td><font size="5"><input type="radio" name="gender" value="male" required> Male
 				   <input type="radio" name="gender" value="female" required>Female</font></td>
	</tr>
  <tr>
        <td><b><font size="5">SchoolId:</font></b></td>
        <td><input type="text" name="schoolid" pattern="[0-9]" title="Only maximum of 5 numbers are allowed" required   placeholder="SchoolId"></td>
   </tr>
   <tr>
         <td><b><font size="5">Region:</font></b></td>
         <td><input type="text" name="region" pattern="[A-Za-z]" title="Only 20 alphabets are allowed" required   placeholder="Region"></td>
    </tr>
    <tr>
          <td><b><font size="5">City:</font></b></td>
          <td><input type="text" name="city" pattern="[A-Za-z]" title="Only 20 alphabets are allowed" required   placeholder="city"></td>
     </tr>
     <tr>
           <td><b><font size="5">Attendance:</font></b></td>
           <td><input type="text" name="attendance" pattern=[0-9]  required   placeholder="attendance"></td>
      </tr>


<p><input type="submit" name="submit" value="Register"></p>

</form>
</div>
 </body>
</html>




<?php
if(isset($_POST["submit"]))
{
  require "connect.php";
  $count=0;
  $uid=$_POST['uid'];
  $first=$_POST['first'];
  $last=$_POST['last'];
  $father=$_POST['father'];
  $mother=$_POST['mother'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $gender=$_POST['gender'];
  $schoolid=$_POST['schoolid'];
  $region=$_POST['region'];
  $city=$_POST['city'];
  $dob=$_POST['dob'];
  $attendance=$_POST['attendance'];
   $sqll="select uid from students where uid='$uid'";
     $result =mysqli_query($conn,$sqll);

     if (mysqli_num_rows($result) > 0)

     echo "<h3>"."<p>"."This user-id is already existing..!!Enter the vaild user-id to register "."</p>"."</h3>";
      else
  {


     $sql = "INSERT INTO students (id,first,last,father,mother,email,mobile,gender,schoolid,region,city,dob,attendance)
       VALUES ('$id', '$first', '$last','$father','$mother','$email','$mobile','$gender','$schoolid','$region','$city','$dob','$attendance')";

	     if ($conn->query($sql) === TRUE) {
         echo "<b>"."<h3>"."You have been registered successfully....!! Now student can login and use the services...!!"."<h3>"."</b>";
           } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
           }
    }
   }
?>
