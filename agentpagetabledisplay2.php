<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM policecomplaints;");
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="FBI.css">
    <style >
        h1{
            object-position: center;
        }
    	table {
            background-color:beige;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 5px solid #dddddd;
    text-align: left;
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    </style>
</head>
<body>
	<?php
echo  "<table>";
    	echo  "<tr><th>Complaint</th><th>Country</th><th>Assigned Force</th><th>Assigned Agent</th><th>Status</th></tr>";
    	while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>" . $row['Complaint'] . "</td><td> " . $row['Country'] . "</td><td>" . $row['AssignedForce'] . "</td><td>" . $row['Assignedagent'] . "</td><td>" . $row['Status'] . "</td></tr>";
      
      echo "<br />";
      }
      echo "</table>";
      ?>
      <script type="text/javascript">
        window.print();
      </script>
      <button ><a href="welcome.php">Back</a></button>
</body>
</html>