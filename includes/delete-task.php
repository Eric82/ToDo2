<?php 
$task_id = strip_tags($_POST['id']);
	require('connect');
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');

	if ($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")) {
	
	}
?>