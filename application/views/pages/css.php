<address id="css">
  <div id="css-container">
    <header class="head">
      <span class="title"><?php echo $header;?></span>
      <?php $this->load->view("menu/menu");?>
    </header>
    <section id="center-page">
      <!-- Start column 1 Add in boxes or cards  -->
      <article class="one">
        <header class="section-head one-head">
          <h3>CSS & HTML Examples</h3>
        </header>
        <div class="card card1">
          <h5 class="cap">CSS Combinators</h5>
					<ul>
						<li class="marker"> The adjacent sibling combinator (+) separates two selectors and matches the second element only if it immediately follows the first element, and both are children of the same parent element.</li>
						<li class="marker">The CSS attribute selector matches elements based on the presence or value of a given attribute.a[title]</li>
						<li class="marker">The child combinator (>) is placed between two CSS selectors. It matches only those elements matched by the second selector<br> that are the direct children of elements matched by the first.</li>
						<li class="marker">The general sibling combinator (~) separates two selectors and matches all iterations of the second element, that are following the first element (though not necessarily immediately),and are children of the same parent element.</li>
						<li class="marker">The CSS universal selector (*) matches elements of any type.</li>
						<li class="marker">Begins with  [lang^=en]</li>
						<li class="marker">Ends with  [lang$=en]</li>
					</ul>
        </div>
        <div class="card card2">
          <h5 class="cap">CSS Examples</h5>
          <ul>
						<li class="marker">div + p {<br>
  							background-color: gold;}</li>
						<li class="marker">a[title="example"]</li>
						<li class="marker">div > p {<br>
  						background-color: gold;}</li>
						<li class="marker">p ~ ul {<br>
  							background-color: gold;}</li>
            <li class="marker">body: counter-reset: section <br>
                Where the counter would be shown: counter-increment: section<br>
                content: "Read Post # " counter(section)
					</ul>          
        </div>
        <div class="card card2">
          <h5 class="cap">Miscellaneous</h5>
            <ul>
              <li class="marker">! = Html</li>
              <li class="marker">link:css = <code>link rel="stylesheet" href="style.css" </code></li>
              <li class="marker">img = <code>img src="" alt="" </code> </li>
              <li class="marker">figc = figcaption figcaption</li>
              <li class="marker">Column-count: That’s how many times a JavaScript needs to split content into left floating elements.</li>
              <li class="marker">Column-width: That’s the width of each newly created element.</li>
              <li class="marker">Column-gap: That’s a left (or right) padding for these elements.</li>
              <li class="marker">Column-rule: That’s a left (or right) border.</li>
            </ul>
        </div>
        <div class="card card2">
          <h5 class="cap">Display Grid</h5>
          <ul>
            <li class="marker">grid-template-columns: (repeat 3,1fr)</li>
            <li class="marker">grid-template-columns: repeat(auto-fit, minmax(min(var(--min-col-size), 100%), 1fr))Create --min-col-size under display grid</li>

          </ul>
        </div>
      </article>
      <article class="two">
        <header class="section-head">
          <h3>Zen Coding</h3>
					
        </header>
        <div class="card card1">
          <h5 class="cap">Zen Coding Example</h5>
          <p>Zen Coding </p>
					<li><code>li.example*4</code></li>
					<li><code>a.link*2</code></li>
					<li>Numbering Lists, classes - <code>ul>li.item$*5</code>  </li>
					<li>Makes 3 definition lists<code>(div>dl>(dt+dd)*3)+footer>p</code>   </li>
          <li>Nested Lists - <code>ul>li.item$*5>ul>li.item$*3</code></li>
          <li><code>ul>li.item$*5>ul>li.item$*3>a</code></li> 
          <li><code>a:link</code></li>
          <li><code>input:text, input:t </code></li>
          <li><code>link:css</code></li>
          <li>Li plus another element: <code>li*5>code</code></li>
          <li>Siblings - <code>div+p+bq</code></li>
          <li><code>Input Button: input:b</code></li>
          <li><code>Input Submit: input:s</code></li>
          <li><code>Custom attributes: p[title="Hello world"]</code></li>
          <li><code>Table,TR,TD with class: table>.row>.col</code></li>
          <ul>
            <li>CSS
              <ul class="multi">
                <li><code>Display: d</code></li>
                <li><code>Visibility: v</code></li>
                <li><code>Margin: m</code></li>
                <li><code>Padding: p</code></li>
                <li><code>Width: w</code></li>
                <li><code>Height: h</code></li>
                <li><code>Max-Width: maw</code></li>
                <li><code>Max-height: mah</code></li>
                <li><code>Min-Width: miw</code></li>
                <li><code>Min-height: mih</code></li>
                <li><code>Position: pos</code></li>
                <li><code>Top: t</code></li>
                <li><code>Left: l</code></li>
                <li><code>Right: r</code></li>
                <li><code>Bottom: b</code></li>
                <li><code>Float: f</code></li>
                <li><code>Clear: c</code></li>
                <li><code>Background: bg</code></li>
                <li><code>Color: col</code></li>
                <li><code>Font: f</code></li>
                <li><code>Text: t</code></li>
                <li><code>Border: b</code></li>
                <li><code>List: l</code></li>
                <li><code>Overflow: o</code></li>
                <li><code>Cursor: cur</code></li>
                <li><code>Transition: tr</code></li>
                <li><code>Transform: tf</code></li>
                <li><code>Text-align Left: ta:l</code></li>
              </ul> 
            </li>
          </ul>
        </div>			
        </article>
			</section>
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