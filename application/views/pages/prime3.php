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
				<!-- center section -->
				<div id="article-containers">
					<div class="parcel">
						<header class="music fs-3">Fav Rock Artists</header>
						<ul>
							<li>The Beatles</li>
							<li>The Moody Blues</li>
							<li>The Beach Boys</li>
							<li>Jefferson Airplane</li>
							<li>Jefferson Starship</li>
							<li>Santana</li>
							<li>Grand Funk Railroad</li>
							<li>Bob Seger</li>
							<li>Crosby Stills & Nash</li>
							<li>Neil Young</li>
							<li>Fleetwood Mac</li>
							<li>Jimi Hendrix</li>
							<li>Eric Clapton</li>
							<li>The Doors</li>
							<li>The Guess Who</li>
							<li>The Who</li>
							<li>Robin Trower</li>
						</ul>
					</div>
					<div class="parcel">
						<header class="music fs-3">Fav. Albums</header>
						<ul>
							<li>A Question of Balance - <u>Moody Blues</u></li>
							<li>In Search Of The Last Chord</li>
							<li>On the Threshold Of A Dream</li>
							<li>To Our Children's Children's Children</li>
							<li>Santana 3 - <u>Santana</u></li>
							<li>Moon Flower</li>
							<li>Welcome</li>
							<li>Caravanserai</li>
							<li>Blood On the Tracks <u>Bob Dylan</u></li>
							<li>Closer to Home <u>Grand Funk</u></li>
							<li>Pampered Menial <u>Pavlovs Dog</u></li>
							<li>Tango In the Night <u>Fleetwood Mac</u> </li>
						</ul>
					</div>
					<div class="parcel">
						<header class="music fs-3">Fav. Songs</header>
						<ul>
							<li>It's Up To You <u>The Moody Blues</u> </li>
							<li>Like a Hurricane <u>Neil Young</u> </li>
							<li>I'm Only Sleeping <u>The Beatles</u> </li>
							<li>25 Or 6 To 4 <u>Chicago</u> </li>
							<li>Suzie Q <u>Creedence</u> </li>
							<li>Im Your Captain <u>Grand Funk Railroad</u> </li>
							<li>Wouldnt It Be Nice <u>Beach Boys</u> </li>
							<li>Like a RollingStone <u>Bob Dylan</u> </li>
							<li>Run To You <u>Bryan Adams</u> </li>
							<li>Eighteen <u>Alice Cooper</u> </li>
							<li>Girl Can't Help it <u>Journey</u> </li>
							<li>Rock N Roll Holiday <u>Brownsville Station</u></li>
							<li>Drivers Seat <u> Sniff n the Tears</u></li>
							<li>Allison Road <u>Gin Blossoms</u></li>
							<li>EveryBody Wants to Rule The World <u>Tears For Fears</u></li>
							<li>Tango In the Night <u>Fleetwood Mac</u> </li>
							<li>Dear Mr Fantasy <u>Traffic</u></li>
						</ul>
					</div>
					<div class="parcel">
						<header class="music fs-3">Fav. Ambient Artists</header>
						<ul>
							<li>Nacho Sotomayor</li>
							<li>Baby Mammoth</li>
							<li>Theivery Corporation</li>
							<li>Zero 7</li>
							<li>Weekend Players</li>
							<li>St. Germain</li>
							<li>Banco De Gaia</li>
							<li>Dimitri From Paris</li>
							<li>Marga Sol</li>
							<li>Mo' Horizons</li>
						</ul>
					</div>
					<div class="parcel">
						<header class="music fs-3">Fav. 60's Artists</header>
						<ul>
							<li>The Beatles</li>
							<li>Del Shannon</li>
							<li>Dion</li>
							<li>The Beau Brummels</li>
							<li>Tommy Roe</li>
							<li>The Seekers</li>
							<li>The Beach Boys</li>
							<li>Amboy Dukes</li>
							<li>The Bee Gees</li>
							<li>Janis Joplin</li>
							<li>The Blues Magoos</li>
							<li>Bob Seger</li>
							<li>Bob Dylan</li>
							<li>Brownsville Station</li>
						</ul>
					</div>
					<div class="parcel">
						<header class="music fs-3">Fav. 70's Artists</header>
					</div>
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
