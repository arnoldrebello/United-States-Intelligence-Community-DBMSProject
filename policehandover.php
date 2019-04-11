<?php

    $con=mysqli_connect("localhost","root","","DBMSProject");
if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $Complaint=$_POST['customercomplaints'];
$Country=$_POST['Location'];
$Type=$_POST['Type'];
      $result=mysqli_query($con,"INSERT INTO policecomplaints (Complaint,Country,AssignedForce) VALUES ('$Complaint','$Country','$Type');");  

header("refresh:0;url=index.php");
echo $Complaint;
echo $Country;
mysqli_close($con);
      ?>