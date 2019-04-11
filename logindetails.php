<?php
    $con=mysqli_connect("localhost","root","","DBMSProject");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM logindetails");
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Agent Login Details</title>
    <link rel="stylesheet" type="text/css" href="Welcome%20page.css">
    <style >
    body{ background-image: url(login%20page%20image.jpg);
    background-position:top;
    background-size: cover;
    background-repeat: repeat-y;
     }
        h1{
            object-position: center;
        }
    	table {
            background-color:beige;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
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
    	<h1 align="center" style="color:white; font-family: sans-serif;">Login Details</h1>
    		<?php
    	echo  "<table>";
    	echo  "<tr><th>Agent ID</th><th>Last Login</th></tr>";
    	while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>" . $row['AgentID'] . "</td><td> " . $row['lastlogin'] . "</td></tr>"; 
      echo "<br />";
      }
      echo "</table>";
      ?>
<button><a href="welcome.php">Back</a></button>
    </body>
</html>
<?php  
mysqli_close($con);
    ?>