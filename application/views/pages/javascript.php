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
  <script>
  let FF_FOUC_FIX;
  </script>
</head>

<body id="java">
  <div id="css-container">
    <header class="head">
      <span class="title"><?php echo $header;?></span>
      <?php $this->load->view("menu/menu");?>
    </header>
    <section id="center-page">
    <article class="one">
        <header class="section-head one-head">
          <h3>Javascript Selectors</h3>
        </header>
        <div class="card card1">
          <h5>Selectors</h5>
					<!-- list -->
           one
        </div>
        <div class="card card2">
          <h5>JS Examples</h5>
        </div>
        <div class="card card2">
            two
        </div>
      </article>
      <article class="two">
        <header class="section-head"><h3>Zen Coding</h3></header>
        <div class="card card1">
          three 
        </div>			
        </article>
			</section>

</div>





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
</body>

</html>