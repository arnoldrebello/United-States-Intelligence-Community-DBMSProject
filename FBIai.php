<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $AgentID=$_POST['AgentID'];
      $Name=$_POST['name'];
      $Branch=$_POST['Branch'];
      $Missions=$_POST['Missions'];
      $specialisedweapons=$_POST['specialisedweapons'];
      $operatingcountry=$_POST['operatingcountry'];
      $result=mysqli_query($con,"INSERT INTO FBI VALUES ('$AgentID', '$Name','$Branch','$Missions','$specialisedweapons','$operatingcountry');"); 
      header("refresh:0;url=FBI%20database.php");
mysqli_close($con);
?>
