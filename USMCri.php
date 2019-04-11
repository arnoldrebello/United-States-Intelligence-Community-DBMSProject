<?php
$AgentID=$_POST['AgentID'];

    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $result=mysqli_query($con,"DELETE FROM USMC WHERE AgentID='$AgentID';");  
header("refresh:0;url=US%20marinecorps%20database.php");
mysqli_close($con);
      ?>