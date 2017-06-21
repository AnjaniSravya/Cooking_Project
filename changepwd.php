<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/changepwd.css">
</head>
<body>
<div class="container-fluid">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-lg-12 col-lg-12 padding">
        <form method="POST" action="">
            <center>
                <h3>Change Password</h3>
            </center>
            <div class="from-group">
                <input type="password" class="form-control" name="newpassword" id="new password" placeholder="Enter New Password" required>
            </div>
            <div class="from-group">
                <input type="password" class="form-control" name="repeatnewpassword" id="reenter password" placeholder="Re-Enter Password" required>
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
session_set();
$user = $_SESSION['e'];
$id = $_SESSION['id'];
if ($user) {
	if(isset($_POST['sub'])) {
		$newpassword = $_POST['newpassword'];
		$repeatnewpassword = $_POST['repeatnewpassword'];
		 if($newpassword==$repeatnewpassword) {
			 $sql = "UPDATE `admin` SET `password` = '$newpassword' WHERE `admin`.`id` = $id";

				$query = mysqli_query($conne, $sql);
				if($query) {
                    session_destroy();
					header('Location:admin.php');
				}
		}
        else {
        echo "<center><h2 style='margin-top:15px;color:red;font-size:20px'>Password does not match</h2></center>";
        }
    }
	}
	?>
