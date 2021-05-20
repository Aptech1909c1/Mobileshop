<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	if(isset($_POST["btn"]))
	{
		$email = $_POST["email"];
		$pwd = $_POST["pass"];
		if($email == "admin@gmail.com" && $pwd == "admin")
		{
			header("Location:dashboard.php");
		}
		else
		{
			$error = "Inavlid Email & password";
		}
		
		
	}
	
	
	?>
</body>
</html>