<?php
session_start();
echo "WELCOME"." ".$_SESSION["mail2"];
?>
<body bgcolor="lightgreen" >
<p align="center"> Click here to visit <a href="home.html">YOUR PROFILE</a> </p>
<p align="center">or</p>
<p align="center"><a href="logout.php">Logout</a></p>
</body>