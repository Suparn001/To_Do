<?php
include("connection.php");
if(isset($_POST['add_students']))
{
   $fName = $_POST['fName'];
   $lName = $_POST['lName'];
   $age = $_POST['age'];
}
// validation
if(empty($fName)){
      header('location:index.php?message=You need to fill in the first name!');
       exit();
    }
    if(empty($lName)){
        header('location:index.php?message=You need to fill in the last name!');
         exit();
      }    
else{    
   $sql = "INSERT INTO `to_do`.`student`(`fName`, `lName`, `age`) VALUES ('$fName', '$lName', '$age')";
    $result = mysqli_query($con,$sql);

   if(!$result){
    die("query failed".mysqli_error($con));
   }
    else{
        header('location:index.php?insert_msg= Your data has been added successfully');
    }
}
?>
