
<?php
include('connection.php');


if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

$delete = "DELETE FROM `to_do`.`student` where `id` = '$id'";

$result  = mysqli_query($con, $delete);

if(!$result){
    die("query is invalid".mysqli_connect_error());
}
else{
    header('location:index.php?delete_msg=You have deleted the record');
}

?>