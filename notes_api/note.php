 <?php  include('process.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title> CRUD PHP NOTES FORM </title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
  <?php require_once 'process.php';?>
  <?php
    if (isset($_SESSION['message'])):
  ?>
  <div class="alert alert-<?=$_SESSION['msg_type']?>">

  <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  ?>
  </div>
    <?php endif ?>

  <?php
  //create connection to the database
    $mysqli = new mysqli('localhost', 'root', '', 'notes_db') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM my_notes") or die($mysqli->error);
    //call function
  
    //pre_r($result);//Can encode to json
    //the pre show the data from the table
    ?>
    <div class = "row justify-content-center">
     <table class="table">
       <thead>
         <tr>
           <th>Title</th>
           <th>Notes</th>
           <th>Author</th>
           <th colspan="2">Action</th>
         </tr>
       </thead>
       <?php
       //pull records from the database
        while ($row = $result->fetch_assoc()):?>
       <tr>
         <td><?php echo $row['title']; ?></td>
         <td><?php echo $row['notes']; ?></td>
         <td><?php echo $row['author']; ?></td>
         <td>
           <a href="note.php?edit=<?php echo $row['id']; ?>"
           class="btn btn-info">Edit</a>
           <a href="process.php?delete=<?php echo $row['id']; ?>"
           class="btn btn-danger">Delete</a>
         </td>
       </tr>
<?php endwhile; ?>
     </table> 
    </div>
    <?php

    function pre_r($array){
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
  ?>
	<form method="post" action="process.php" ><!--POST HTTP Request-->
  <!--title-->  

    <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="input-group">
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $title; ?>" placeholder="title">
    </div>
    <!--Notes-->
		<div class="input-group">
			<label>Notes</label>
			<input type="text" name="notes" value="<?php echo $notes; ?>"  placeholder="enter notes...">
    </div>
    <!--Author-->
    <div class="input-group">
			<label>Author</label>
			<input type="text" name="author" value="<?php echo $author; ?>"  placeholder="author">
		</div>
		<div class="input-group">
      <?php
        if ($update == true):   
      ?>
      <button class="btn btn-inf" type="submit" name="update" >Update</button>
        <?php else: ?>
      <button class="btn btn-primary" type="submit" name="save" >Save</button>
        <?php endif; ?>
		</div>
	</form>
</body>
</html>