<?php
include('config.php');
$uname=$_POST['name'];
$id=$_POST['ktuid'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sql = "INSERT INTO stud_reg (`name`, `ktu_id`, `age`, `gender`) VALUES ('$uname', '$id', '$age', '$gender')";
$res=mysqli_query($conn,$sql);

if ($res) {
   ?>
<script>alert("Registered")</script>
   <?php
}
?>