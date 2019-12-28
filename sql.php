<?php
require('config/db.php');

// INSERTING TO THE DATABASE
if(isset($_POST['todo'])){
        
        $task_name = $_POST['add-todo'];
        $date_created = date('l dS F\, Y');

        $sql = "INSERT INTO todoapp (task_name, date_created)
        VALUES ('$task_name', '$date_created')";

        if (mysqli_query($connection, $sql)) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);
}


?>















