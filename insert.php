<?php
require('connect.php');
?>
<html>
<head>
<title>Insert record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.form-control{
	width:450px;
}
</style>
</head>
<body>
<center>
<br><br>
<form action="" method="post">
<input type="text" placeholder="Name" name="nm" class="form-control"/><br>
<input type="text" placeholder="Phone" name="pn" class="form-control"/><br>
<input type="text" placeholder="Email id" name="em" class="form-control"/><br>
<input type="submit" class="btn btn-primary" value="click to insert"/>
</form>
<a href="index.php" class="btn btn-success">Main</a>
</center>
<?php 
if(isset($_POST["submit"]))
{ require('connect.php');
	$n=$_POST['nm'];
	$p=$_POST['pn'];
	$e=$_POST['em'];
	$q="insert into (name,phone,email) php values('$n','$p','$e')";
	$res=mysqli_query($con,$q);
	if($res)
	{echo 'alert("inserted successfully")';}
	else
	{echo 'alert("error while_inserting")';}
	
 }
?>
	</body>
</html>