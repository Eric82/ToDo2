<!DOCTYPE html>
<html>
<head>
	<title>Eric's Todo2</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="wrap">
		<div class="task-list">
			<ul>
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
		<form>
			<input type="text" name="new-task" placeholder="Add new item...">
		</form>
	</div>
</body>
</html>