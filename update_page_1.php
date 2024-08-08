<?php
include("connection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM To_Do.student WHERE `id` = '$id'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}

if (isset($_POST['update_students'])) {
    if (isset($_GET['id_new'])) {
        $idn = $_GET['id_new'];
    }
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];

    $query = "UPDATE `to_do`.`student` SET `fname`='$fname', `lname`='$lname', `age`='$age' WHERE `id` = '$idn'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    } else {
        header('location:index.php?mesg=Updated Successfully!');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 id="main_title" class="text-center">UPDATE</h1>
    <div class="container">
        <form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="fName">First Name</label>
                <input type="text" name="fname" class="form-control" id="fName" placeholder="Enter your first name" value="<?php echo $row['fName']; ?>">
            </div>
            <div class="form-group">
                <label for="lName">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lName" placeholder="Enter your last name" value="<?php echo $row['lName']; ?>">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age" value="<?php echo $row['age']; ?>">
            </div>
            <input type="submit" class="btn btn-success" name="update_students" value="Update">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>