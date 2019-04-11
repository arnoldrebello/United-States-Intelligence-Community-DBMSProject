<?php
$AgentID=$_POST['AgentID'];
$Name=$_POST['Name'];
$dateofbirth=$_POST['dateofbirth'];
$operatingcountry=$_POST['operatingcountry'];
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

     
$result=mysqli_query($con,"INSERT INTO USIC VALUES ('$AgentID', '$Name','$dateofbirth','$operatingcountry');");  
header("refresh:0;url=USIC%20database.php");
mysqli_close($con);
      ?>