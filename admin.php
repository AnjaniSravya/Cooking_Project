<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/changepwd.css">
</head>
<body>
<div class="container-fluid">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-lg-12 col-lg-12 padding">
        <form action="admin.php" method="POST">
            <center>
                <h3>ADMIN LOGIN</h3>
            </center>
            <div class="from-group">
                <input type="text" class="form-control" id="Username" name="name" placeholder="UserName" required>
            </div>
            <div class="from-group">
                <input type="password" class="form-control" id="Password" name="pwd" placeholder="Password" required>
            </div>
            <center>
                <button type="Submit" name="sub" class="btn btn-block btn-primary">Submit</button>
            </center>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include_once "conne.php";
if(isset($_POST['sub'])) {
if(isset($_POST['name']) && isset($_POST['pwd'])) {
	$sql = "SELECT * FROM `admin` WHERE 1";
	$query = mysqli_query($conne,$sql);
	if(mysqli_num_rows($query) != 0) {
		while($row = mysqli_fetch_assoc($query)) {
			if($row['name'] == $_POST['name'] && $row['password'] == $_POST['pwd']) {
				$_SESSION['e'] = $_POST['name'];
				$_SESSION['id'] = $row['id'];
		header('Location:index.php');
	}
            else {
                echo "<center><h2 style='margin-top:15px;color:red;font-size:20px'>Incorrect Username/password</h2></center>";
            }
}
}
}
}
?>
