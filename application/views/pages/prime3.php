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
					<h3>Favorite Books</h3>
				</header>
				<article class="parcels">
					<hgroup>
					<h4 class="book-title">Rama</h4>
					<h5 class="author">Arthur C Clark</h5>
					</hgroup>
					<ul>
						<li>Rendezvous With Rama</li>
						<li>Rama ll</li>
						<li>The Garden Of Rama</li>
						<li>Rama Revealed</li>
					</ul>
				</article>
				<article class="parcels">
					<hgroup>
					<h4 class="book-title">The Giants</h4>
					<h5 class="author">James P. Hogan</h5>
					</hgroup>
					<ul>
						<li>The two Moons</li>
						<li>The Two Worlds</li>
						<li>Mission To Minerva</li>
					</ul>
				</article>
				<article class="parcels">
					<hgroup>
					<h4 class="book-title">Riverworld</h4>
					<h5 class="author">Philip Jose Farmer</h5>
					</hgroup>
					<ul>
						<li>To Your Scattered Bodies Go</li>
						<li>The Fabulous Riverboat</li>
						<li>The Dark Design</li>
						<li>The Magic Labyrinth</li>
						<li>The Gods of Riverworld</li>
					</ul>
				</article>
				<article class="parcels">
					<hgroup>
					<h4 class="book-title">Thomas Covenant</h4>
					<h5 class="author">Stephen Donaldson</h5>
					</hgroup>
					<ul>
						<li>Lord Fouls Bane</li>
						<li>The Illearth War</li>
						<li>The Power that Preserves</li>
						<li>The Wounded Land</li>
						<li>The One Tree</li>
						<li>White Gold Wielder</li>
					</ul>
				</article>
			</div>
			<section>
				<header class="section-head">
					<h3>Favorite Music</h3>
				</header>
				<!-- center section -->
				<div id="article-containers">
					<div class="parcel">
					<header class="music fs-3">Rock Artists</header>
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
				<header class="music fs-3">Favorite Albums</header>
				<ul>
					<li>A Question of Balance - <u>Moody Blues</u></li>
					<li>In Search Of The Last Chord</li>
					<li>On the Threshold Of A Dream</li>
					<li>To Our Children's Children's Children</li>
					<li>Santana 3 <u>Santana</u></li>
					<li>Moon Flower</li>
					<li>Welcome</li>
					<li>Caravanserai</li>
					<li>Blood On the Tracks <u>Bob Dylan</u></li>
					<li>Closer to Home <u>Grand Funk</u></li>
					<li>Pampered Menial <u>Pavlovs Dog</u></li>
					<li>Tango In the Night <u>Fleetwood Mac</u> </li>
					<li>Reo Speedwagon <u> Reo Speedwagon</u></li>
					<li>Queen <u>Queen </u></li>
					<li>Iron Butterfly <u>Metamorphosis</u></li>
					<li>Dragonfly <u>Jefferson Airplane</u></li>
					<li>Electric LadyLand <u> Jimi Hendrix</u></li>
					<li>At Filmore East <u>Allman Brothers</u></li>
					<li>Pet Sounds <u>Beach Boys</u></li>
					<li>Bridge Of Sighs <u>Robin Trower</u></li>
					<li>Twice Removed From Yesterday <u>Robin Trower</u></li>
				</ul>
			</div>
			<div class="parcel">
			<header class="music fs-3">Favorite Songs</header>
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
				<li>White Bird <u>It's a Beatiful Day</u></li>
				<li>Metamorphosis <u>Iron Butterfly</u></li>
				<li>All Along the Watchtower<u> Jimi Hendrix</u></li>
				<li>Daydream <u>Robin Trower</u></li>
			</ul>
		</div>
		<div class="parcel">
		<header class="music fs-3">Ambient Artists</header>
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
	<header class="music fs-3">60's Artists</header>
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
<header class="music fs-3">70's Artists</header>
<p>content</p>
</div>
</div>
</section>
<aside class="aside">
<header class="section-head">
<h3>Favorite Books</h3>
</header>
<article class="parcels">
<h5 class="author">Jack McDevitt</h5>
<ul>
<li>Polaris - <u>Benedict</u></li>
<li>Seeker - <u>Benedict</u></li>
<li>Firebird - <u>Benedict</u></li>
<li>The Devils Eye - <u>Benedict</u></li>
<li>Chindi - <u>Hutch</u></li>
<li>Deepsix - <u>Hutch</u></li>
<li>Omega - <u>Hutch</u></li>
<li>Cauldren - <u>Hutch</u></li>
<li>Odyssey - <u>Hutch</u></li>
<li>Engines Of God - <u>Hutch</u></li>
<li>Eternity Road</li>
<li>Ancient Shores</li>
</ul>
</article>
<article class="parcels">
<h4 class="book-title">Foundation</h4>
<h5 class="author">Isaac Asimov</h5>
<ul>
<li>Prelude to Foundation - 1988</li>
<li>Forward The Foundation - 1993</li>
<li>Foundation - 1951</li>
<li>Foundation & Empire - 1952</li>
<li>Second Foundation - 1953</li>
<li>Foundations Edge - 1982</li>
<li>Foundation & Earth - 1986</li>
<li></li>
</ul>
</article>
<article class="parcels">
<h4 class="book-title">Ender Wiggens</h4>
<h5 class="author">Orson Scott Card</h5>
<ul>
<li>Enders Game</li>
<li>Speaker For the Dead</li>
<li>Xenocide</li>
<li>Children of the Mind</li>
<li>Ender In Exile</li>
</ul>
</article>
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
<div class="box" id="box4">
	<div class="color"></div>
</div>
<div class="box" id="box5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ex.</div>
<div class="box" id="box6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nostrum natus, perspiciatis quis quidem sit doloremque cupiditate voluptate blanditiis, </div>
</footer>
</div>
<script type="module" src="<?php echo base_url('assets/js/script.js');?>"></script>
</body>
</html>