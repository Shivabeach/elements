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
            <ul>
            <li>document.getElementbyId("title");</li>
            <li>document.getElementsbyClassName('second')</li>
            <li>document.getElementsByTagName('p');</li>
            <li>document.querySelectorAll("p.intro");</li>
            <li>document.querySelector("p.intro");</li>
          </ul>

          </div>
          <div class="card card2">
            <h5>JS Examples</h5>
            <ul>
            <li>document.getElementById("myDIV").classList.add("mystyle", "anotherClass", "thirdClass");</li>
            <li>document.getElementById("myDIV").classList.remove("mystyle")</li>
            <li>document.images.length - Number of images on page</li>
            <li>let className = document.getElementById("title").className = "blue"</li>
            <li>const students = JSON.parse(localStorage.getItem('students')) || [];</li>
            <li>localStorage.setItem('students', JSON.stringify(students));</li>
            <ul>
            <li><blockquote><code>
              const random = (max = 100) => {<br>
                return Math.floor(Math.random() * max);<br>
            };</code></blockquote></li>
            <li><blockquote><code>
              const colors = ['green', '', '', 'blue', 'white', ''];<br>
              const unique = Array.from(new Set(colors));</code>
            </blockquote></li>
            <li><blockquote><code>
              butt.addEventListener('click', () => {<br>
                dialog.showModal();<br>
              });<br>
              close.addEventListener('click', () => {<br>
                dialog.close();<br>
              });</code>
            </blockquote></li>
            <li>
              <blockquote><code>
                const today = new Date();<br>
                  const f = new Intl.DateTimeFormat('en-us', {<br>
                  dateStyle: 'full',<br>
                  });<br>
              // datey.style.color = '#4b0082';<br>
                datey.innerHTML = f.format(today);</code>
              </blockquote>
            </li>
            </ul>

          </ul>
          </div>

        </article>
        <article class="two">
        <header class="section-head"><h3>Mouse Events</h3></header>
        <div class="card card1">
          Events
          <ul>
            <li>mousedown </li>
            <li>mouseenter</li>
            <li>mouseleave</li>
            <li>mousemove </li>
            <li>mouseover </li>
            <li>mouseout </li>
            <li>mouseup </li>
            <li>click</li>
            <li>keyup</li>
            <li>keypress</li>
            <li>keydown</li>
            <li>invalid</li>
            <li>focus</li>
            <li>change</li>
            <li>focusout</li>
            <li>submit</li>
          </ul>
        </div>
        <div class="card card1">
          <h4>Count visits</h4>
          <code>
          document.addEventListener('DOMContentLoaded', () => {<br>
            // Get the current count from localStorage, or start at 0<br>
            let visitCount = localStorage.getItem('visitCount');<br>
            visitCount = visitCount ? parseInt(visitCount, 10) : 0;<br>

            // Increment the count<br>
            visitCount++;<br>
            <br>
            // Save the new count back to localStorage<br>
            localStorage.setItem('visitCount', visitCount);<br>

            // Display the count in your designated element<br>
            const visits = document.querySelector('.visits'); // assuming visits is an element Class<br>
            if (visits) {<br>
              visits.innerHTML = `Page visits: <span class="fs-3 bold-8">${visitCount}</span>`;<br>
            }<br>
        });</code>

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