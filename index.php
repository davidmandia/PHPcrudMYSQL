<!DOCTYPE html>
 <?php include 'db.php'; 
  $total = $db->query("select * from tasks")->num_rows;

  

 
  $sql = "select * from tasks";
  $rows = $db->query($sql);
  
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <title>Crud App</title>
</head>
<body>

<div class="container">
    <div class='row'>
        <center><h1>To Do List</h1></center>
        

            <div class='col-md-10 col-md-offset-1'>
            <table class="table table-hover">
            <button type='button' data-target="#myModal" data-toggle="modal" class='btn btn-success'>Add To Do</button>
            <button type='button' class='btn btn-default pull-right' onclick="print()">Print</button>
            <hr>
            <br>


            <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

            <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Task</h4>
      </div>
      <div class="modal-body">
        
        <form method="post" action="add.php">
            <div class='form-group'>
                <label>Task Name</label>
                <input type="text" required name='task' class="form-control">
            </div>
            <input type="submit" name="send" value="Add Task" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Task</th>
    </tr>
  </thead>
  <tbody>
    
       <?php while($row = $rows->fetch_assoc()): ?>
       

       <tr>
    
      <th scope="row"><?php echo $row['id'] ?></th>
      <td class="col-md-10"><?php echo $row['name'] ?></td>
      <td><a href="./update.php?id=<?php echo $row['id'];?>" class='btn btn-success'>Edit</td>
      <td><a href="./delete.php?id=<?php echo $row['id'];?>" class='btn btn-danger'>Delete</td>
      </tr>
      <?php endwhile; ?>
    
    
  </tbody>
</table>


<!-- pagination -->

             </div>


    </div>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>