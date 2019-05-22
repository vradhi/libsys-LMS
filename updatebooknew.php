<?php 

mysql_select_db('books',mysql_connect('localhost','root',''))or die(mysql_error());

if (isset($_POST['submit'])){
$bookid=$_POST['bookid'];
$bname=$_POST['bname'];
$bauthor=$_POST['bauthor'];
$bpublic=$_POST['bpublic'];
$bprice=$_POST['bprice'];





mysql_query("update bookinfo set bname='$bname',bauthor='$bauthor',bpublic='$bpublic',bprice = '$bprice' where bookid = '$bookid'")or die(mysql_error());
$success_message = 'Data has been updated successfully.';								
								 
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update books</title>
</head>
<body>
<h2>Update book info</h2>

<?php  
if(isset($success_message)) {echo $success_message;}
?>

<br>
<div class="form">
<form action="" method="post">
<table>
	<tr>
		<td> Enter the book id that you want to update:</td>
		<td><input type="number" name="bookid" placeholder="book id" required></td>
	</tr>
	<tr>
		<td>Book Name: </td>
		<td><input type="text" name="bname" placeholder="Book Name" required></td>
	</tr>
	<tr>
		<td>Author's Name: </td>
		<td><input type="text" name="bauthor" placeholder="Author" required></td>
	</tr>
	<tr>
		<td>Publication: </td>
		<td><input type="text" name="bpublic" placeholder="publication name" required></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="bprice" placeholder="Price" required></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Insert" name="submit"></td>
	</tr>
</table>
</form>
</div>
</body>
</html>	