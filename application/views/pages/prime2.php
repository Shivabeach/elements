<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title;?></title>
		<script>
			let localS = localStorage.getItem("theme"),
			themeToSet = localS
			document.documentElement.setAttribute("data-theme", themeToSet)
		</script>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
		<script>let FF_FOUC_FIX;</script>
	</head>
	<body id="prime2">
		<div id="page2-container">
			<header class="head">
				<span class="title"><?php echo $header;?></span>
				<?php $this->load->view("menu/menu");?>
			</header>
<!--
			<aside id="left">
				<p>Lorem ipsum dolor sit amet consectetur</p>
			</aside>
-->
			<section id="center-page">
				<!-- Start column 1 Add in boxes or cards  -->
				<article class="one">
					<header class="section-head">
						<h3>The Form</h3>
					</header>
					<div class="card card1">
						<h5>Calc %</h5>
						<form>
							<input type="text" class="no1 input-med-lg" placeholder="% of" > <br>
							<input type="text" class="no2 input-med-lg" placeholder="Big Number" ><br>
							<button type="submit" class="click">Calc</button>
							<button type="reset">Clear</button>
						</form>
						<div class="calculated"></div>
					</div>
					<div class="card card2">
						<p>Miles to Kilos : <input type="text" id="milesToKilo" class="input-med-lg"></p>
						<p>Kilos to Miles : <input type="text" id="kiloToMiles" class="input-med-lg"></p>
						<p id="convertedMiles"></p>
						<p id="showMiles"></p>
					</div>
					<div class="card card1">
						<label>Grams 2 Ounces</label>
						<input class="input-med trans" id="inputgrams" type="number" placeholder="Grams">
					</p>
					<p>Ounces: <span class="form-Output" id="ounceOutput"></span></p>
					<p>Pounds: <span class="form-Output" id="lbOutput"></span></p>
					<p>Kilograms: <span class="kilograms"></span>  </p>
				</div>
				<div class="card card2">
					<label>Meters 2 Feet</label>
					<input class="input-med-lg trans" id="inputMeters" type="number" placeholder="Meters">
				</p>
				<p>Response: <span class="form-Output" id="formOutput"></span></p>
				<p>Miles <span class="miles1" id="miles2"></span></p>
			</div>
			<div class="card card1">
				<label>Celsius</label>
				<input id="inputCelsius" class="input-med-lg" type="number" placeholder="Celsius">
			</p>
			<p>Fahrenheit: <span class="form-Output" id="outputFahrenheit"></span></p>
		</div>
		<div class="card card2">
			<label for="ml">Ml To Oz</label>
			<input type="number" id="ml" class="input-med-lg"/>
			<p class="showOz"> </p>
		</div>
		<div class="card card1">
			<label for="ml">Liters To Gallons</label>
			<input type="text" id="liter" class="input-med"/>
			<p id="showLit"> </p>
		</div>


		<div class="card card2">
			<h6>Tennessee tax = .07</h6>
			<input type="number" class="tnTax input-med-lg" placeholder="Preferred Tax">
			<input type="number" class="input-med-lg" id="taxed" placeholder="Purchase amount">
			<p>Tax: <span id="partialTotal"></span>  </p>
			<p>Amount with tax: <span id="fullPrice"></span>    </p>
		</div>


		<div class="card card1">
			<label for="cm">Centimeters to Inches</label>
			<input type="text" id="cm" class="input-med-lg"/>
			<p id="showCm"> </p>
			<p class="mm"></p>
		</div>
		<div class="card card2">
			<h6>Open area</h6>
		</div>
	</article>
	<!-- Start section 2 Add in boxes or cards -->
	<article class="two">
		<div class="card3 bottom">
			<h3>Liquids</h3>
			<form>
				<label for="ounces">Ounces To Fill</label>
				<input class="input-med" type="number" id="ounces" /><br>
				<label for="ratio">Ratio Required 1: ? </label>
				<input class="input-med" type="number" id="ratio"><br>
				<button type="submit" class="none" id="cripes" value="Submit">Submit</button>
				<button type="reset" class="none" value="Do Over" id="reset1">Reset</button>
			</form>
			<div id="validity"></div>
			<p class="emp">Dilutable Material <span id="materialAmount" class="bold-8"> </span> </p>
			<p class="emp">Water <span id="dilutionAmount" class="bold-8"> </span> </p>
		</div>
		<div class="card3 bottom">
			<h3>Mathematics</h3>
			<div class="symbils">
					<p><input placeholder="add" type="number" class="a1 input-med"> +	<input type="number" class="a2 input-med"><span class="add"> </span> </p>
					<p><input placeholder="subtract" type="number" class="a3 input-med"> -
						<input type="number" class="a4 input-med">
					<span class="subtract"> </span></p>
					<p><input placeholder="multiply" type="number" class="a5 input-med"> *
						<input type="number" class="a6 input-med">
					<span class="multiply"> </span></p>
					<p><input placeholder="divide" type="number" class="a7 input-med"> /
						<input type="number" class="a8 input-med">
					<span class="divide"> </span></p>
			</div>
		</div>
		<div class="card3 bottom">
			<h3>Knots to MPH</h3>
			<input type="number" class="knot input-med">
			<div>Response: <span class="knotResponse"></span></div>
		</div>
	</article>
</section>
<!--
<aside id="right">Right
	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed non sapiente quos qui placeat ullam dolorem consequuntur incidunt. Necessitatibus, fugit.</p>
</aside>
-->
<footer class="footers">
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
		<div class="color">This is box 4</div>
	</div>
	<div class="box" id="box5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ex.</div>
	<div class="box" id="box6">box6</div>
</footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/script-dist.js');?>"></script>
<script type="module" src="<?php echo base_url('assets/js/page2.js');?>"></script>
</body>
</html>
