<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
	<head>
		<meta charset="UTF-8">
		<title>
		<?php echo $title;?>
		</title>
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
	<body id="prime3">
		<div id="prime3-container">
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
				<h3>Music Stats</h3>
			</header>

			<div id="article-container">
        <?php $this->load->view("pages/music.htm");?>
      </div>
		</section>
	<aside  class="aside">
    <h3>Aside</h3>
    </aside>
<footer class="footer">
	<div class="box" id="box1">
	<div id="datey"></div>
	<div class="copy">Elements</div>
	<div>Project Started 2/22/2022</div>
	</div>
	<div class="box" id="box2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, unde?</div>
	<div class="box" id="box3">box 3
	</div>
	<div class="box" id="box4"><div class="color"></div></div>
	<div class="box" id="box5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ex.</div>
	<div class="box" id="box6">box6</div>
</footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/script.js');?>"></script>
<!-- <script type="module" src="<?php echo base_url('assets/js/prime-dist.js');?>"></script> -->
</body>
</html>
