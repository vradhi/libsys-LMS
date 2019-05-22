<?php
mysql_select_db('books',mysql_connect('localhost','root',''))or die(mysql_error());
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['bname'])) {
			throw new Exception('Name can not be empty');
		}
		
		if(empty($_POST['bauthor'])) {
			throw new Exception('Author can not be empty');
		}
		
		if(empty($_POST['bpublic'])) {
			throw new Exception('Publication name can not be empty');
		}
		
		if(empty($_POST['bprice'])) {
			throw new Exception('Price can not be empty');
		}
		
		$result = mysql_query("insert into bookinfo (bname,bauthor,bpublic,bprice) values('$_POST[bname]','$_POST[bauthor]','$_POST[bpublic]','$_POST[bprice]') ");
		
		$success_message = 'book has been added successfully.';
		
	
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
	<title>Add Book</title>
</head>
<body>

<h2>Add Book</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>
<div class="form">
<form action="" method="post">
<table>
	<tr>
		<td>Book Name: </td>
		<td><input type="text" name="bname" placeholder="Name" required></td>
	</tr>
	<tr>
		<td>Author: </td>
		<td><input type="text" name="bauthor" placeholder="author" required></td>
	</tr>
	<tr>
		<td>Pyblication: </td>
		<td><input type="text" name="bpublic" placeholder="publication name" required></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="bprice" placeholder="price in Rs." required></td>
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
















