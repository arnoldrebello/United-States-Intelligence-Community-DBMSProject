<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $AgentID=$_POST['AgentID'];
      $Name=$_POST['name'];
      $operatingforce=$_POST['operatingforce'];
      $specialisedequipment=$_POST['specialisedequipment'];
      $operatingcountry=$_POST['operatingcountry'];
      $Missions=$_POST['Missions'];
      $result=mysqli_query($con,"INSERT INTO USNavy VALUES ('$AgentID', '$Name','$operatingforce','$specialisedequipment','$operatingcountry','$Missions');");
       header("refresh:0;url=US%20navy2%20database.php");
mysqli_close($con);
      ?>