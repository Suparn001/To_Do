<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <?php include('connection.php'); ?>
</head>
<body>
    <h1 id="main_title" class="text-center my-4">CRUD application in PHP</h1>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Students</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Students</button>
        </div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First_Name</th>
                    <th>Last_Name</th>
                    <th>Age</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM to_do.student";
                $result = mysqli_query($con, $sql);

                if (!$result) {
                    die("Query failed: " . mysqli_error($con));
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <tr>
                           
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['fName']?></td>
                        <td><?php echo $row['lName']?></td>
                        <td><?php echo $row['age']?></td>
                          
                        <td><a href = "update_page_1.php?id=<?php echo $row['id']?> " class="btn btn-success">Update</a></td>
                        <td><a href = "delete_page_1.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                <?php



                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>

<?php
if(isset($_GET['message'])) {
 echo "<h6>".$_GET['message']."</h6>";
}
?>

<?php
if(isset($_GET['insert_msg'])) {
 echo "<h6 id='green'>".$_GET['insert_msg']."</h6>";
}
?>

<?php
if(isset($_GET['mesg'])) {
 echo "<h6 id='green'>".$_GET['mesg']."</h6>";
}
?>

<?php
if(isset($_GET['delete_msg'])) {
 echo "<h6>".$_GET['delete_msg']."</h6>";
}
?>






        <!-- Modal -->
        <form action="insert_data.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                                <div class="form-group">
                                    <label for="fName">First Name</label>
                                    <input type="text" name="fName" class="form-control" id="fName" placeholder="Enter your first name">
                                </div>
                                <div class="form-group">
                                    <label for="lName">Last Name</label>
                                    <input type="text" name="lName" class="form-control" id="lName" placeholder="Enter your last name">
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-success" name="add_students" value="ADD">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




<script src="index.js"></script>

</body>
</html>
