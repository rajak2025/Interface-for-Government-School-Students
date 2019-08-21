<?php
echo "<h3><i>Attendance of the students of your school must be updated....</h3></i>";
?>
<table>
  <form action="attendance1.php" method="POST">
    <tr>
       <td> School Id:</td>
       <td><input type="text" name="schoolid" pattern=[0-9]{1,5} title="only numbers are allowed" required placeholder="SchoolId"></td>
    </tr>
    <tr>
        <td>Region:</td>
        <td><input type="text" name="region" pattern=[A-Za-z]{1,20} title="only 20 alphabets are  are allowed" required placeholder="Region"></td>
   </tr>
    <tr>
        <td>City:</td>
        <td><input type="text" name="city" pattern=[A-za-z]{1,20} title="only 20 alphabets are allowed" required placeholder="City"></td>
   </tr>
   <tr>
       <td>Employee uid:</td>
       <td><input type="text" name="uid" pattern=[0-9]{1,12} title="only 12 numbers are allowed" required placeholder="Employee UID"></td>
   </tr>
 </table>
 <input type="submit" name="submit" value="Submit">
</form>
