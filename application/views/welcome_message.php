<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	Post to `welcome/set_value`
	<form method="post" action="<?php echo base_url('welcome/set_value'); ?>">
		<textarea name="text">
		</textarea>
		<input type="submit" value="Post!">
	</form>

	Post to `welcome/form_validation`
	<form method="post" action="<?php echo base_url('welcome/form_validation'); ?>">
		<textarea name="text">
		</textarea>
		<input type="submit" value="Post!">
	</form>
</div>

</body>
</html>
