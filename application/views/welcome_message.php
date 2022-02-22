<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="assets\css\main.css">

</head>
<body>

<div class="parent">
	<header>
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<p>There are 4 grids to this page</p>
		<!-- <p>This is  1/4 full length</p> -->
	</header>
	<div class="left-side">
		<p>If you would like to edit this page you'll find it located at:</p>
		<p>This is 1 / 2 = 1/3 of the page starting with 1 going to 2</p>
		<p>If you would like to edit this page you'll find it located at:</p>
		<p>This is 1 / 2 = 1/3 of the page starting with 1 going to 2</p>
		<p>If you would like to edit this page you'll find it located at:</p>
		<p>This is 1 / 2 = 1/3 of the page starting with 1 going to 2</p>
	</div>
	<main contenteditable="true">
		<p>This is 2 / 3. Starting from grid 2 and going to 3  </p>
		<p>This is 2 / 3. Starting from grid 2 and going to 3 </p>
	</main>
	<div class="right-side">
		<p>The corresponding controller for this page is found at</p>
		<p>This is 3/4. Starting with grid 3 and going to 4.</p>
	</div>
	<footer>
		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		<p>This is again 1 / 4. From grid 1 to grid 4</p>
		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</footer>
</div>
</body>
</html>
