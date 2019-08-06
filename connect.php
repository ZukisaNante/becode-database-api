<?php
//connect to the database server
  $connection = mysql_connect("localhost", "root", "") or die("Couldn't connect to the server");
  //connect to the database
  $db = mysql_connect_db("users", $connection) or die ("Couldn't select database");
  //reading the table and getting all the records
  $query = "SELECT * FROM users_info";
  //return datatable full of rows
  $result = mysql_query($query) or die ("Query failed: " . mysql_error());
  //display table data
  echo "<table border='1'>";
  echo "<tr>";
  echo "<th>First Name</th><th>Last Name</th>";
  echo "</tr";
  //fetching rows from the table and using a while loop to make sure all rows have been fetched
  while ($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>", $row['First Name'], "</td><td>", $row['Last Name'], "</td>";
    echo "</tr>";
    //close connection
    echo "</table>";
    mysql_close($connection);
  }

?>