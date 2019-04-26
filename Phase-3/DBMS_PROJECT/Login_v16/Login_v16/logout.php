<?php
setcookie("Email", "a", time()-(86400*30), "/");
setcookie("Password", "b", time()-(86400*30), "/");
//$_COOKIE["Email"]=$_POST["email"];
//$_COOKIE["Password"]=$_POST["password"];
?>
<html>
<head>
</head>
<body>
<h1><a href="login.html">Click Here to go to login page</a></h1>
</body>
</html>