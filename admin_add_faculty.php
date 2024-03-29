<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}

elseif($_SESSION['username']=='student')
{
    header("location:login.php");
}

$host="localhost";

$user="root";

$password="";  

$db="schoolproject";

$data=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['add_faculty']))
{
    $t_name=$_POST['name'];
    $t_Specialization=$_POST['Specialization'];
    $file=$_FILES['image']['name'];

    $dst="./image/".$file;

    $dst_db="image/".$file;

    move_uploaded_file($_FILES['img']['tmp_name'],$dst);

    $sql="INSERT INTO faculty1 (name,Specialization,image) VALUES ('$t_name','$t_Specialization','$dst_db')";

    $result=mysqli_query ($data,$sql);

    if($result)
    {
    header('location:admin_add_faculty.php');
    }
}
?>

<html>
    <head>
        <title>Admin Dashboard</title>
<style type="text/css">
  
  
  .div_deg
  {
    background-color: A99DE0;
    padding-top: 70px;
    padding-bottom: 70px;
    width: 500px;
  }
</style>

        <link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js:6S" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

 <!-- Include Bootstrap JavaScript -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <?php
include 'admin_sidebar.php';
 ?>  
</head>
<body>
 
<div class="content">
    <center>
<h1>Add Faculty</h1>
<br><br><br>
<div class="div_deg">
    <form action="#" method="POST" enctype="multipart/form-data">
    <div>
    <label>Faculty Name : </label>
    <input type="text" name="name">
    </div>

<br><br>

    <div>
    <label>Specialization : </label>
    <textarea  name="Specialization"></textarea>
    </div>
    <br><br>
    <div>
    <label>Image : </label>
    <input type="file" name="image">
    </div>
    <br><br>
    <div>
    <input type="submit" name="add_faculty" value="Add Faculty" class="btn btn-primary">
    </div>
</form>
</div>
</center>
    </div>

</body>
</html>