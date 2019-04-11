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
      $airbase=$_POST['airbase'];
      $aircraftinventory=$_POST['aircraftinventory'];
      $operatingcountry=$_POST['operatingcountry'];
      $result=mysqli_query($con,"INSERT INTO USAF VALUES ('$AgentID', '$Name','$Missions','$airbase','$aircraftinventory','$operatingcountry');");
       header("refresh:0;url=US%20airforce%20database.php");
mysqli_close($con);
      ?>