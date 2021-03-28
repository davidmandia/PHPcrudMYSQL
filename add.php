<?php 
    include 'db.php';

    if(isset($_POST['send'])){
        $name = $_POST['task'];
        $sql = "INSERT INTO tasks (name)
VALUES ('$name')";

if ($db->query($sql) === TRUE) {
  header('location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;


    
    }
}

?>