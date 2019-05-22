<?php
mysql_select_db('newest',mysql_connect('localhost','root',''))or die(mysql_error());
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['name'])) {
			throw new Exception('Name can not be empty');
		}
		
		if(empty($_POST['age'])) {
			throw new Exception('Roll can not be empty');
		}
		
		if(empty($_POST['addrs'])) {
			throw new Exception('Age can not be empty');
		}
		
		if(empty($_POST['result'])) {
			throw new Exception('Email can not be empty');
		}
		
		$result = mysql_query("insert into tbl_student (name,age,addrs,result) values('$_POST[name]','$_POST[age]','$_POST[addrs]','$_POST[result]') ");
		
		$success_message = 'Data has been inserted successfully.';
		
	
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Insert</title>
</head>
<body>

<h2>Insert Data</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>
<div class="form">
<form action="" method="post">
<table>
	<tr>
		<td>Name: </td>
		<td><input type="text" name="name" placeholder="Name" required></td>
	</tr>
	<tr>
		<td>Age: </td>
		<td><input type="text" name="age" placeholder="Age" required></td>
	</tr>
	<tr>
		<td>Address: </td>
		<td><input type="text" name="addrs" placeholder="Address" required></td>
	</tr>
	<tr>
		<td>Result: </td>
		<td><input type="text" name="result" placeholder="Result" required></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Insert" name="form1"></td>
	</tr>
</table>
</form>
</div>	
</body>
</html>

















?>