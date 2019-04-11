<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM FBI");
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FBI Database</title>
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
    	<h1 align="center" style="color:white;">Federal Bureau of Investigation</h1>
    		<?php
    	echo  "<table>";
    	echo  "<tr><th>Agent ID</th><th>Agent Name</th><th>Branch</th><th>Missions</th><th>Specialised Weapons</th><th>Operating Country</th></tr>";
    	while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>" . $row['AgentID'] . "</td><td> " . $row['Name'] . "</td><td>" . $row['Branch'] . "</td><td>" . $row['Missions'] . "</td><td>" . $row['specialisedweapons'] . "</td><td>" . $row['operatingcountry'] . "</td></tr>"; //these are the fields that you have stored in your database table employee
      echo "<br />";
      }
      echo "</table>"
      ?>
<button><a href="Open%20database.php">Back</a></button>
    </body>
</html>
<?php
mysqli_close($con);
    ?>
