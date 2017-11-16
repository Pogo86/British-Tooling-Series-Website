<?php require_once(dirname(__FILE__).'headder.php') ?>
    <section id="about">
	<div class="container-fluid home"><!-- This Div is the About Section -->
		<div class="container-fluid" id="homeTop">
        	<h1>About the British Tooling Series</h1>
        	<h3>Climbing Walls + Axes = Crazy Competitions</h3>
    	</div>
    	<div class="container-fluid" id="homeAlt">
			<div class="row">
    			<div class="col-md-6">
    				<p>British Tooling is a series of climbing competitions held at UK Climbing walls in the lead up to the Scottish winter climbing season. It allows participants to hone their skills and strength while competing amongst some of the sport’s top climbers.</p>
        			<h3>Our Mission</h3>
        			<ul>
        				<li>To promote and encourage a raise in technical standard of drytooling and mixed climbing through competition.</li>
            			<li>To introduce the activity to youth and new climbers.</li>
            			<li>To encourage British climbers to compete in the UIAA Ice World Cup</li>
            			<li>To work towards holding a UIAA World Cup event in British.</li>
        			</ul>
    			</div>
    			<div class="col-md-6" align="center"><img src="images/aboutImg.jpg" alt="" class="img-responsive aboutImg" title=""/></div>
    		</div>
  		</div>
  	</div>
  	</section>
  	<div class="container-fluid homeMid">
  		<div class="home">
  		<section id="events">
        	<h1>Events</h1>
        	<h2>Round 1 - King Kong - 28<sup>th</sup> October</h2>
        	<h2>Round 2 - Rope Race - 11<sup>th</sup> November</h2>
          	<h2>Round 3 - Ice Factor - 25<sup>th</sup> November</h2>
		</section>
        </div>
    </div>
	<div class="container-fluid home">
		<?php require_once(dirname(__FILE__).'/results.php') ?>
	</div>
  	<div class="container-fluid homeLight" align="center">
  		<div class="home">
    	<section id="gallery">
        	<h1>Gallery</h1>
			<?php require_once(dirname(__FILE__).'/gallery.php');?>
        </section>
		</div>
	</div>
<!--
	<section id="Sponsors">
	<div class="container-fluid homeMid">
  		<div class="home">		
        	<h1>Sponsors</h1>
           	<h2>To Be Announced</h2>
            <div class="row">
       			<div class="col-md-4" align="center">
               		<a href="http://www.peakholds.com/" target="new"><h2>Peak Holds</h2></a>
                    <a href="http://www.peakholds.com/"><img src="images/sponsors/Peak Single.png" alt="Peak Holds and Volumes" class="img-responsive" /></a>
                    <h4>
                    	<a href="http://www.peakholds.com/" target="new"><span class="website--url2">www.peakholds.com/</span></a>
                    </h4>
       		  	</div>
       		  	<div class="col-md-4" align="center">
                	<a href="http://dmmclimbing.com/" target="new">
                	<h2>DMM</h2>
                	</a>
                    <a href="http://dmmclimbing.com/"><img src="images/sponsors/dmm.png" alt="DMM" class="img-thumbnail img-responsive" /></a>
                    <h4>
                    	<span class="website--url2"><a href="http://dmmclimbing.com/" target="new">www.dmmclimbing.com</a></span>
                 	</h4>
       		  	</div>       		  
    		</div>     
   		</div>
	</div>
	</section>
-->
</body>
</html>