<?php
include_once "conne.php";
session_set();
if(isset($_GET['update'])) {
 $id = $_GET['update'];
 $sql_values = "Select * FROM `newentry` WHERE id='".$id."'";
 $query_values = mysqli_query($conne, $sql_values);

 while($roww = mysqli_fetch_assoc($query_values)) {
  $title = $roww['title'];
  $type = $roww['type'];
  $description = $roww['description'];
  $ingredients = $roww['ingredients'];
  $url = $roww['url'];
  $keywords = $roww['keywords'];


 
}
if(isset($_POST['sub'])) {
 $newtitle = $_POST['newtitle'];
 $newtype = $_POST['newtype'];
 $newdesc = $_POST['newdesc'];
 $newingre = $_POST['newingre'];
 $newurl = $_POST['newurl'];
 $newkey = $_POST['newkey'];

$sql = "UPDATE `newentry` SET `title`='".$newtitle."' ,`type`='".$newtype."', `description`='".$newdesc."', `ingredients`='".$newingre."' ,`url`='".$newurl."',`keywords`='".$newkey."' WHERE `id` = '".$id."' ";
$query = mysqli_query($conne ,$sql);
//$queryy = "SELECT * FROM `admin`";
$row = mysqli_fetch_array($query);
if($query) {
 header('Location:index.php');
}
else {
 echo "not";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>New entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/newentry.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <h3>COOKING PROJECT</h3>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Change Password</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </ul>

        </div>
    </div>
</nav>
<div class="container">
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-lg-12 col-lg-12 padding">
        <form action="" method="POST">
            <center><h2>Update</h2></center>
        <div class="form-group">
			<label>Title</label>
            <input type="text" class="form-control" id="title" name="newtitle" value="<?php echo $title;?>" placeholder="Enter Your Title" required>
        </div>
        <div class="form-group">
			<label>Type</label>
            <input type="text" class="form-control" id="type" name="newtype" value="<?php echo $type;?>" placeholder="Enter Your Type" required>
        </div>
        <div class="form-group">
			<label>Description</label>
            <input type="text" class="form-control" id="description" name="newdesc" value="<?php echo $description;?>" placeholder="Enter Your Description"></textarea>
        </div>
        <div class="form-group">
			<label>Ingredients</label>
            <input type="text" class="form-control" id="ingredients" name="newingre" value="<?php echo $ingredients;?>" placeholder="Enter Ingredients"></textarea>
        </div>
        <div class="form-group">
			<label>URL</label>
            <input type="text" class="form-control" id="url" name="newurl"value="<?php echo $url;?>" placeholder="Enter Youtube URL" required>
        </div>
        <div class="form-group">
			<label>Keywords</label>
            <input type="text" class="form-control" id="keywords" name="newkey"value="<?php echo $keywords;?>" placeholder="Enter Keywords"></textarea>
        </div>
        <div>
                <button type="submit" name="sub" class="btn btn-lg btn-primary">Submit</a>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>

