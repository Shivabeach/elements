<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
	<head>
		<meta charset="UTF-8">
		<title>		<?php echo $title;?>	</title>
		<script>
			let localS = localStorage.getItem("theme"),
			themeToSet = localS
			document.documentElement.setAttribute("data-theme", themeToSet)
		</script>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
		<script>let FF_FOUC_FIX;</script>
	</head>
	<body id="prime">
		<div id="prime-container">
			<header class="head">
				<span class="title"><?php echo $header;?></span>
				<?php $this->load->view("menu/menu");?>
			</header>
			<div id="left">
				<header class="section-head">
					<h3>Left Side</h3>
				</header>
				<ul id="title-list">
				</ul>
			</div>
			<section>
				<header class="section-head">
					<h3>Section title</h3>
				</header>
				<!-- json file entered here -->
				<div id="article-container">
				</div>
			</section>
			<aside>
				<header class="section-head">
					<h3>Aside</h3>
				</header>
				<p>This page is using a color switcher</p>
				<div id="theme-switcher">
					<img src="assets/images/icons8-sun-with-face-48.png" class="icon-sun">
					<img src="assets/images/icons8-new-moon-face-48.png" class="icon-moon">
				</div>
			</aside>
			<footer class="footer">
				<div class="box" id="box1">
					<div id="datey"></div>
					<div class="copy">Elements</div>
					<div>Project Started 2/22/2022</div>
				</div>
				<div class="box" id="box2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, unde?</div>
				<div class="box" id="box3">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ex nemo, distinctio eum id?</p>
				</div>
				<div class="box" id="box4">
					p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, minima omnis repellendus perferendis accusantium ducimus, suscipit consequatur voluptates maiores quam!
				</div>
				<div class="box" id="box5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ex.</div>
				<div class="box" id="box6">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, iusto dignissimos optio deleniti laboriosam aperiam, id voluptatum sunt veniam necessitatibus.</p>
				</div>
			</footer>
		</div>
		<script type="module" src="<?php echo base_url('assets/js/script.js');?>"></script>
		<script type="module" src="<?php echo base_url('assets/js/prime-dist.js');?>"></script>
	</body>
</html>