<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5208a81fc6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sancreek&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Farsan|Sancreek&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Farsan&display=swap" rel="stylesheet">
    <link  href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">

    <title>Task Master</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
<?php require_once('sql.php'); ?> 
<div class="container">
        <a href="#" id="clear" onclick="Refresh()"><i class="fas fa-sync"></i></a>
        <h1 class="text"><span class="styling">TODO</span> APPLICATION</h1>
         <!-- <h1 class="text">TODO APP</h2> -->
        <div onload="renderTime()"></div>
        <p  id="clockDisplay"></p>
        </div>

<div>
<form action="index.php" method="POST" class="search">
            <div class="form-group">
             <input type="text" class="form-control form-control-md " name="search" placeholder="Search your list">         
            </div>
           <div class="form-group">
           <button type="submit" class="btn btn-md">Search</button>
           </div> 
        </form>
 </div>
 
 <div class="content">
 <table class="table table-hover">
  <thead>
    <tr class="thead">
      <th scope="col">My Tasks</th>
      <th scope="col">Date Created</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>

    </tr>
  </thead>
  <tbody class="trow">
    <?php 
include('config/db.php');
// SELECTING FROM THE DATABASE
$sql = "SELECT id, task_name, date_created FROM todoapp";
$result = $connection->query($sql);

    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $task_name = $row['task_name'];
      $date_created = $row['date_created'];
      

              if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                // sql to delete a record
              $sql = "DELETE FROM todoapp WHERE id = $id";

              if ($connection->query($sql) === TRUE) {
                  // echo "Record deleted successfully";
                  header('Location: index.php');
              } else {
                  echo "Error deleting record: " . $connection->error;
              }


              }
 
?>
    <tr >
      <td><?php echo $task_name;?></td>
      <td><?php echo $date_created ;?></td>
      <td><a href="index.php?delete=<?php echo $row['id'];?>"><i id="delete" class="fas fa-trash-alt"></i></a></td>
      <td><a href="edit.php?edit=<?php echo $row['id'];?>"><i class="fas fa-edit"></i></a></td>
    </tr>
    <tr>


 <?php  

}

?>
  </tbody>


 
</table>
 </div>


 <form action="index.php" method="POST">
    <div class="input-div">
    <input type="text" class="input" name="add-todo" placeholder="What your todo name?">         
     <a href="#" > <button name="todo" class="addButton"><i class="fas fa-plus-circle"></i></button> </a>
</form>

 
    
<script src="java.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>