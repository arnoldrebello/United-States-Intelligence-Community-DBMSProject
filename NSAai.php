<?php

    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $AgentID=$_POST['AgentID'];
      $Name=$_POST['name'];
      $Organisation=$_POST['Organisation'];
      $Missions=$_POST['Missions'];
      $technicalskillset=$_POST['technicalskillset'];
      $operatingcountry=$_POST['operatingcountry'];
      $result=mysqli_query($con,"INSERT INTO NSA VALUES ('$AgentID', '$Name','$Organisation','$Missions','$technicalskillset','$operatingcountry');");
       header("refresh:0;url=NSA%20database.php");
mysqli_close($con);
      ?>