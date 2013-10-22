<?php
include 'db.inc.php';

$db=mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('unable to connect . ');
mysql_select_db(MYSQL_DB,$db) or die(mysql_error($db));
?>
<html>
	<head>
		<title>log</title>	
	</head>
	<body>
		<form action="backend.php" method="post">
			Username : <input type="text" name="username" />
			Password : <input type="password" name="password" />
			<input type="submit" value="submit" name="submit" />
		</form>
	</body>
</html>
<?php
$username=(isset($_POST['username']))?trim($_POST['username']):'';
$password=(isset($_POST['password']))?trim($_POST['password']):'';
$submit=(isset($_POST['submit']))?trim($_POST['submit']):'';
if(($submit == "submit" ) && ($username== "surya") && ($password == "dcecaptcha")) {
 


$query='SELECT *FROM register';
$result=mysql_query($query,$db) or die(mysql_error($db));

echo '<table>';
echo '<tr>';
echo '<th>sno</th>';
echo '<th>Unique id</th>';
echo '<th>name</th>';
echo '<th>email</th>';
echo '<th>sex</th>';
echo '<th>phone number</th>';
echo '<th>year</th>';
echo '<th>Department</th>';
echo '<th>college name</th>';
$count =0;
echo '</tr>';
while($row= mysql_fetch_assoc($result)) {
	echo '<tr>';
		echo '<td>'.$count.'</td>';
		echo '<td>'.$row['random_number'].'</td>';
		echo '<td>'.$row['name'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['sex'].'</td>';
		echo '<td>'.$row['phone_no'].'</td>';
		echo '<td>'.$row['year'].'</td>';
		echo '<td>'.$row['department'].'</td>';
		echo '<td>'.$row['college_name'].'</td>';
	echo '</tr>';
	$count=$count+1;
}
echo '</table>';
}
else {
	echo 'You are not authorized to view this page';
	die();
	
}
?>

