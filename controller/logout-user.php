<?php
    require_once(__DIR__ . "/../model/config.php");
    
    unset($_SESSION["authenticated"]);

    session_destroy();
?>
<html>
<head>
	<header>
	<button type="button">
		<a href="<?php echo $path . "register.php"?>">register</a>
	</button>
		<button type="button">
		<a href="<?php echo $path . "login.php"?>">login</a>
	</button>
	</header>
	<title></title>
</head>
<body>

</body>
</html>