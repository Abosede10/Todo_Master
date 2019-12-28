<?php

include('config/db.php');

// $name = '';
// //Editing the data 
// if(isset($_GET['edit'])){

//     $id = $_GET['edit'];
// }

//Updating the data

if(isset($_POST['edit'])){
    $update = $_POST['add-todo'];

  

$sql = "UPDATE todoapp SET task_name='$update' WHERE id= $edit";

if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}
}

?>



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
   

<div class="container">
        <a href="#" id="clear"><i class="fas fa-sync"></i></a>
        <h1 class="text"><span class="styling">TODO</span> APPLICATION</h1>
         <!-- <h1 class="text">TODO APP</h2> -->
        <div class="date"></div>
</div>



 <form action="" method="POST">
                <?php
                        $name = '';
                        //Editing the data 
                        if(isset($_GET['edit'])){
                        
                            $id = $_GET['edit'];
                       

                    $sql =("SELECT * FROM todoapp WHERE id = $edit");
                    $result = mysqli_query($connection, $sql);
                    if(count($result)==1){
                        $row = $result->fetch_array();
                        $name = $row['task_name'];
                    }

                }
                ?>

     <div class="input-div">
    <input type="text" class="input" name="add-todo" placeholder="What your todo name?" value="<?php echo $name; ?>">         
     <a href="#" > <button name="todo" class="addButton"><i class="fas fa-pen-alt"></i></button> </a>
</form>

 
    
<script src="java.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>