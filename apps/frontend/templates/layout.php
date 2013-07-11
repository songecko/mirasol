<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mirasol - Ideas Producers</title>
        <meta name="description" content="Mirasol ideas producers">
        <meta name="viewport" content="width=device-width">
		
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo public_path('css/main.css') ?>" />
        
        <script src="<?php echo public_path('js/modernizr-2.6.2.min.js') ?>"></script>
    </head>
    <body>
		<div class="container">
			<header>
				<div class="logoContainer">
					<img src="<?php echo image_path('logo.png')?>" alt="Logo Mirasol" />					
				</div>
				<div class="languageSelector">
					<p>language: english / spanish</p>
				</div>
				<div class="menu">
					<ul class="nav nav-pills">
						<li class="aboutus"><a href="<?php echo url_for('homepage') ?>#aboutus">ABOUT US</a></li>
						<li class="work"><a href="<?php echo url_for('homepage') ?>#work">WORK</a></li>
						<li class="contact"><a href="<?php echo url_for('homepage') ?>#contact">CONTACT</a></li>
					</ul>
					<div class="followUs">
						<p>
							<span>follow us on</span>
							<a href="#"><img src="<?php echo image_path('fb-icon.png')?>" alt="Facebook" /></a>
							<a href="#"><img src="<?php echo image_path('tw-icon.png')?>" alt="Twitter" /></a>
						</p>
					</div>
				</div>
			</header>
			<section id="spot">
				<iframe src="http://player.vimeo.com/video/69790673?title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</section>
			<div id="content">				
				<section id="aboutUs">
					<p class="sectionTitle">work montage</p>
					<div class="dialog">
						<p>The world is overstocked with hyperbolic messages. So, while everyone is screaming to be heard, we would rather whisper a password to people’s hearts.</p>
					</div>
					<p class="welcome">Welcome <span>to Mirasol,</span></p>
					<div class="description">
						<p>a young independetly owned advertising </p>
						<p>agency built by a team of talented planners, </p>
						<p>creative directors and producers who love making</p>
						<p>fresh and sensitive communication that inspires people.</p>
						<p>Our experience in marketing planning, tv & radio advertising</p>
						<p>and digital turns Mirasol into a game-change option</p>
						<p>for businesses that need a cost effective partner</p>
						<p>to plan, create and produce an integrated</p>
						<p>communication program.</p>
					</div>
					<div class="service simpleService">
						<h4>Simple</h4>
						<p>Complicated ideas <br />are bad ideas.<br />Our work speaks for itself.</p>
					</div>
					<div class="service credibleService">
						<h4>Credible</h4>
						<p>We simply don’t enjoy <br /> making overpromising <br /> communication.</p>
					</div>
					<div class="service meaningfulService">
						<h4>Meaningful</h4>
						<p>Mirasol truly shines when it <br />comes to connecting consumers<br />with brands.</p>
					</div>
				</section>
				<section id="work">					
					<?php echo $sf_content ?>
				</section>
				<section id="contact">
					<div class="copyright">
						<h4>BORING STUFF</h4>
						<p>
							Copyright 2013. 
							<br />
							All Rights Reserved I <a href="#">Site Map</a> I<br /> <a href="#">Terms & Conditions</a> I <a href="#">Accessibility</a> I<br /><a href="#">Privacy Policy</a> I <a href="#">Cookie Policy</a>
						</p>
					</div>
					<div class="contactUs">
						<h4>CONTACT US</h4>
						<p>Email: <a href="mailto:info@ideasmirasol.com.ar">info@ideasmirasol.com.ar</a> <br />New York: 908 342 2072<br />Buenos Aires: 15 6761 5559</p>
					</div>
					<form class="contactForm" action="#" method="post">
						<input type="text" name="name" id="name" placeholder="Name" />
						<input type="text" name="mail" id="mail" placeholder="Email" />
						<textarea name="message" id="message" placeholder="Message"></textarea>
						<button class="btn" type="submit">Send</button>
					</form>
				</section>
			</div>
		</div>        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<script src="<?php echo public_path('js/jquery.scrollTo-1.4.3.1-min.js') ?>"></script>		
        <script src="<?php echo public_path('js/main.js') ?>"></script>
    </body>
</html>