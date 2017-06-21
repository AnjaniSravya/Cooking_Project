<?php
include_once "conne.php";
session_set();
$sql = "SELECT * FROM `newentry`";
$query = mysqli_query($conne,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>index page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/index.css">
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
         <div class="col-lg-4 col-lg-offset-4 col-md-4 col-sm-12 col-xs-12">
             <center>
               <a href="new.php" type="Newentry" name="new" class="btn btn-lg btn-primary">Newentry</a>
             </center>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <center>
              <table id="Table1" style="...">
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>Type</th>
                          <th>Description</th>
                          <th>Ingredients</th>
                          <th>Youtube url</th>
                          <th>keywords</th>
                          <th>Options</th>
                      </tr>
                  </thead>
                  <tbody>
					  <?php
					  while($row = mysqli_fetch_array($query)) {
						  echo "<tr>
						  <td>".$row[1]."</td>
						  ";
						  echo "
						  <td>".$row[2]."</td>
						  ";
						  echo "
						  <td>".$row[3]."</td>
						  ";
						  echo "
						  <td>".$row[4]."</td>
						  ";
						   echo "
						  <td>".$row[5]."</td>
						  ";
						   echo "
						  <td>".$row[6]."</td>
						  ";
						 
						  echo "
			
						  <td><span class='dropdown drpdwn'>
                                <button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Options
                                    <span class='caret'></span></button>
                                <ul class='dropdown-menu'>
                                    <li><a href='delete.php?delete=$row[0]'>Delete</a></li>
                                    <li><a href='update.php?update=$row[0]'>Update</a></li>
                                </ul></td>
						  </tr>";
					  }
					  ?>
                  </tbody>
              </table>
         </center>
         </div>
     </div>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready(function(){
             $('#Table1').DataTable();


         });

     </script>


</body>
</html>
