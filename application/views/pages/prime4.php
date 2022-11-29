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
	<body id="prime2">
		<div id="page4-container">
			<header class="head">
				<span class="title"><?php echo $header;?></span>
				<?php $this->load->view("menu/menu");?>
			</header>
			<aside id="left">
				<header class="section-head">
					<h3>Data Entry</h3>
				</header>
				<p>
					<form action="">
						<input type="text" class="budget" placeholder="Budget amount"><br>
						<button id="budget">Enter Budget</button>
					</form>
				</p>
				<p>
					<form action="">
						<input type="text" class="amount" placeholder="amount"><br>
						<input type="text" class="reason" placeholder="reason"><br>
						<button class="record">Enter Record</button>
					</form>
				</p>
				<!-- End aside -->
			</aside>
			<section id="center-pages">
				<!-- Start column 1 Add in boxes or cards  -->
				<article class="one1">
					<header class="heady">
						<h3>Data</h3>
					</header>
					<table class="center-align table">
						<tr>
							<th>Budget</th>
							<th>Liability</th>
							<th>Cash On Hand</th>
						</tr>

						<tr>
							<td id="budgetAmount"></td>
							<td id="totalLiabilities">1</td>
							<td id="cashOnHand">1</td>
						</tr>

					</table>
				</article>
				<!-- Start section 2 Add in boxes or cards -->
				<article class="two2">
					<header class="heady">
						<h3>Liabilities</h3>
					</header>
					<table>
						<tr>
							<th>Reason</th>
							<th>Cost</th>
						</tr>

						<tr class="app"></tr>

				</table>
			</article>
			<article id="see"></article>
		</section>
		<footer class="footer">
			<div class="box" id="box1">
				<div id="datey"></div>
				<div class="copy">Elements</div>
				<div>Project Started 2/22/2022</div>
			</div>
			<div class="box" id="box2">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error, unde?</div>
			<div class="box" id="box3">box 3
			</div>
			<div class="box" id="box4">
				<div class="color"></div>
			</div>
			<div class="box" id="box5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ex.</div>
			<!-- <div class="box" id="box6">box6</div> -->
		</footer>
	</div>
	<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
	<script type="module" src="<?php echo base_url('assets/js/money-dist.js');?>"></script>
</body>
</html>