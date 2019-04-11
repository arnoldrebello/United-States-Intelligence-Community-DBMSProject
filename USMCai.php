<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $AgentID=$_POST['AgentID'];
      $Name=$_POST['name'];
      $Missions=$_POST['Missions'];
      $division=$_POST['division'];
      $specialisedweapons=$_POST['specialisedweapons'];
      $operatingcountry=$_POST['operatingcountry'];
      $result=mysqli_query($con,"INSERT INTO USMC VALUES ('$AgentID', '$Name','$Missions','$division','$specialisedweapons','$operatingcountry');");
       header("refresh:0;url=US%20marinecorps%20database.php");
mysqli_close($con);
      ?>