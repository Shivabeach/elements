
	<body id="prime"> 
		<div id="prime-container">
			<header class="head">
				<span class="title"><?php echo $header;?></span>
				<?php $this->load->view("menu/menu");?>
			</header>
			<div id="left">
				<header class="section-head">
					<h3>Title List</h3>
					<h4 class="length"></h4>
				</header>
				<ul id="title-list"></ul>
				<label for="titleSearch">Title Search
				<input type="text" id="titleSearch"></label>
			</div>
			<section>
				<header class="section-head">
					<h3>Articles</h3>
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
				<!-- <div id="theme-switcher">
					<img src="assets/images/icons8-sun-with-face-48.png" class="icon-sun">
					<img src="assets/images/icons8-new-moon-face-48.png" class="icon-moon">
				</div> -->
				<div id="toggle">
					<i class="indicator"></i>
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
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, minima omnis repellendus perferendis accusantium ducimus, suscipit consequatur voluptates maiores quam!</p>
				</div>
				<div class="box" id="box5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ex.</div>
				<div class="box" id="box6">
					<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
				</div>

			</footer>
		</div>
		<script type="module" src="<?php echo base_url('assets/js/script.js');?>"></script>
		<script type="module" src="<?php echo base_url('assets/js/prime-dist.js');?>"></script>
	</body>
</html>