<?php
require('connect.php');
?>
<html>
<head>
<title>Delete record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<form method="POST">
<input type="text" placeholder="Email for which rec to be deleted" name="em"/><br><br>
<input type="submit" placeholder="Delete"/></form>
<a href="index.php">Main</a></center>
<?php
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$q3="delete from php where email='$email' ";
$res3=mysqli_query($con,$q3);
echo "deleted row successfully";
}
//echo '<a href="index.php" class="btn btn-success">Main</a>';
?>
</body>
</html>