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
                        <li><a href="changepwd.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </ul>

        </div>
    </div>
</nav>
<div class="container">
    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-lg-12 col-lg-12 padding">
      <form action="" method="POST">
          <center><h2>New Entry</h2></center>
         <div class="form-group">
           <input type="text" class="form-control" id="title" name="title" placeholder="Enter Your Title" required>
         </div>
          <div class="form-group">
            <input type="text" class="form-control" id="type" name="type" placeholder="Enter Your Type" required>
          </div>
          <div class="form-group">
              <textarea class="form-control" rows="4" id="description" name="desc" placeholder="Enter Your Description"></textarea>
          </div>
          <div class="form-group">
              <textarea class="form-control" rows="3" id="ingredients" name="ingre" placeholder="Enter Ingredients"></textarea>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="url" name="url" placeholder="Enter Youtube URL" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="2" id="keywords" name="key" placeholder="Enter Keywords"></textarea>
          </div>
          <div>
              <button type="submit" name="sub" class="btn btn-lg btn-primary">Submit</button>
          </div>
      </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include_once "conne.php";
if(isset($_POST['title']))
{
	$title = $_POST['title'];
	$type  = $_POST['type'];
	$desc  = $_POST['desc'];
	$ingre = $_POST['ingre'];
	$url = $_POST['url'];
	$key = $_POST['key'];
	
	$sql = "INSERT INTO `newentry` (`title` , `type`, `description` , `ingredients` , `url` , `keywords`) VALUES ('".$title."' , '".$type."' , '".$desc."' , '".$ingre."' , '".$url."' , '".$key."')";
	$data = mysqli_query($conne , $sql);
    if($data)
  {
		header('Location:index.php');
	}
	else
	{
		echo "not moved";
	}
}
?>
 

