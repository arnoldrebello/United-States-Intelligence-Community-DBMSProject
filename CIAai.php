<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $AgentID=$_POST['AgentID'];
$Name=$_POST['name'];
$Rank=$_POST['Rank'];
$Directorate=$_POST['Directorate'];
$operationsundertaken=$_POST['Missions'];
$operatingcountry=$_POST['operatingcountry'];
$result=mysqli_query($con,"INSERT INTO CIA VALUES ('$AgentID', '$Name','$Rank','$Directorate','$operationsundertaken','$operatingcountry');"); 
header("refresh:0;url=CIA%20database.php");
mysqli_close($con);
      ?>