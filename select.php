<?php 
$con=mysqli_connect("localhost","root","","phptest") or die(mysli_error($con));
?>
<html>
<head>
<title>Select records</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table{
	padding-top:40px;
	border:solid 1px silver;
}
</style>

</head>
<body>
<?php
$q1="select * from php";
$res1=mysqli_query($con,$q1);

echo "<center><table class='table table-striped'>";

while($row=mysqli_fetch_array($res1))
{
echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['email'];
echo "</td></tr>";
}
echo "</table></center>";

$q2="select * from php where name='hijk' ";
$res2=mysqli_query($con,$q2);
$row1=mysqli_fetch_array($res2,MYSQLI_ASSOC);
echo "<center><table class='table table-striped' ><tr><td>";
echo $row1['id'];
echo "</td><td>";
echo $row1['name'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['email'];
echo "</td></tr><table>";
echo '<a href="index.php" class="btn btn-success">Main</a>';
?>

</body>
</html>