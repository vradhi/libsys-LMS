<?php 

mysql_select_db('books',mysql_connect('localhost','root',''))or die(mysql_error());

if (isset($_POST['submit'])){
$bookid=$_POST['bookid'];

$query=mysql_query("select * from bookinfo where bookid = '$bookid'")or die(mysql_error());
$row = mysql_fetch_array($query);
    echo $row['bname'];
	echo "<br>";
	echo $row['bauthor'];
	echo "<br>";
	echo $row['bpublic']; 
	echo "<br>";
 echo $row['bprice'];
	echo "<br>";
$success_message = 'The book information is displayed above.';								
								 
} 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search book by id</title>
</head>
<body>
<h2>Search book by id</h2>

<?php  
if(isset($success_message)) {echo $success_message;}
?>

<br>
<div class="form">
<form action="" method="post">
<table>
	<tr>
		<td> Enter the book id:</td>
		<td><input type="search" name="bookid" placeholder="book id" required></td>
	</tr>
	<tr> <td><input type="submit" name="submit" value="Search"></td>
	</tr>
	
</table>
</form>
</div>
</body>
</html>	