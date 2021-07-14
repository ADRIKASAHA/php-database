<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
</head>
<?php
session_start();
?>
<body>
	<h1>welcome<?php echo $_SESSION['username'];?></h1>

</body>
</html>