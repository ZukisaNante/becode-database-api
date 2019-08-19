
<?php
  /*********************************************************** 
  * Programmer: Zukisa NANTE                                 *
  * Qualifications: Computer Sysyems Engineering             *
  * Current Position: Web Developer @ BeCode ANTWERP BELGIUM *
  ***********************************************************/
  //PHP JSON CRUD API
  header("Content-Type: application/json");
  //connect to database
  $connection = mysqli_connect("localhost", "root", "", "notes_db");
  //check connection
  if(!$connection){
    die('Could not connect: '.mysqli_error());
  }
  $result = mysqli_query($connection, "SELECT * FROM my_notes");
  while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
  }
  print(json_encode($output, JSON_PRETTY_PRINT));
  mysqli_close($connection);
?>
  

