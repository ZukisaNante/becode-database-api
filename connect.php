<?php
//connect to the database server
  $connection = mysql_connect("localhost", "root", "") or die("Couldn't connect to the server");
  //connect to the database
  $db = mysql_connect_db("users", $connection) or die ("Couldn't select database");
?>