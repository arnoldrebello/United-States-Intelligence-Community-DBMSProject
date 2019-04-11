<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $Complaint=$_POST['Complaint'];
     $result1= mysqli_query($con,"SELECT AssignedForce,Country from policecomplaints where Complaint='$Complaint';");

     while ($row=mysqli_fetch_array($result1)) {
     	$type=$row['AssignedForce'];
     	$country=$row['Country'];
     	
     }
     $result2=mysqli_query($con,"SELECT * from $type where operatingcountry='$country';");
     while ($row2=mysqli_fetch_array($result2)) {
     	$Name=$row2['Name'];
     	$AgentID=$row2['AgentID'];
     }

     $result3=mysqli_query($con,"UPDATE policecomplaints SET Status='Solved',Assignedagent='$Name' where Complaint='$Complaint';");
     $result4=mysqli_query($con,"UPDATE $type SET Missions='$Complaint' WHERE AgentID='$AgentID';");
     header("refresh:0;url=welcome.php");
    ?>