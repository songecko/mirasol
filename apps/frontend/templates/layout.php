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
		
		<link rel="icon" href="<?php echo public_path('favicon.ico')?>" type="image/x-icon" />
		
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
					<p>
						<?php echo __('language') ?>:
						<a href="<?php echo url_for('homepage_localized', array('sf_culture' => 'en')) ?>">english</a> /
						<a href="<?php echo url_for('homepage_localized', array('sf_culture' => 'es')) ?>">español</a>						
					</p>
				</div>
				<div class="menu">
					<ul class="nav nav-pills">
						<li class="aboutus"><a href="<?php echo url_for('homepage') ?>#aboutus"><?php echo __('ABOUT US') ?></a></li>
						<li class="work"><a href="<?php echo url_for('homepage') ?>#work"><?php echo __('WORK') ?></a></li>
						<li class="contact"><a href="<?php echo url_for('homepage') ?>#contact"><?php echo __('CONTACT') ?></a></li>
					</ul>
					<div class="followUs">
						<p>
							<span><?php echo __('follow us on') ?></span>
							<a href="https://www.facebook.com/gerardo.artusana" target="_blank"><img src="<?php echo image_path('fb-icon.png')?>" alt="Facebook" /></a>
							<a href="https://twitter.com/IdeasMirasol" target="_blank"><img src="<?php echo image_path('tw-icon.png')?>" alt="Twitter" /></a>
						</p>
					</div>
				</div>
			</header>
			<section id="spot">
				<iframe src="http://player.vimeo.com/video/69790673?title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</section>
			<div id="content">				
				<section id="aboutUs">
					<p class="sectionTitle"><?php echo __('work montage') ?></p>
					<div class="dialog">
						<p><?php echo __('The world is overstocked with hyperbolic messages. So, while everyone is screaming to be heard, we would rather whisper a password to people’s hearts.') ?></p>
					</div>
					<p class="welcome"><?php echo __('Welcome <span>to Mirasol,</span>') ?></p>
					<div class="description">
						<?php echo __('<p>a young independently owned advertising </p>
						<p>agency built by a team of talented planners, </p>
						<p>creative directors and producers who love making</p>
						<p>fresh and sensitive communication that inspires people.</p>
						<p>Our experience in marketing planning, tv & radio advertising</p>
						<p>and digital turns Mirasol into a game-change option</p>
						<p>for businesses that need a cost effective partner</p>
						<p>to plan, create and produce an integrated</p>
						<p>communication program.</p>') ?>						
					</div>
					<div class="service simpleService">
						<h4><?php echo __('Simple') ?></h4>
						<p><?php echo __('Complicated ideas <br />are bad ideas.<br />Our work speaks for itself.') ?></p>
					</div>
					<div class="service credibleService">
						<h4><?php echo __('Credible') ?></h4>
						<p><?php echo __('We simply don’t enjoy <br /> making overpromising <br /> communication.') ?></p>
					</div>
					<div class="service meaningfulService">
						<h4><?php echo __('Meaningful') ?></h4>
						<p><?php echo __('Mirasol truly shines when it <br />comes to connecting consumers<br />with brands.') ?></p>
					</div>
				</section>
				<section id="work">					
					<?php echo $sf_content ?>
				</section>
				<section id="contact">
					<div class="copyright">
						<p>
							<?php echo __('Copyright 2013') ?>. 
							<br />
							<?php echo __('All Rights Reserved') ?>
						</p>
					</div>
					<div class="contactUs">
						<h4><?php echo __('CONTACT US') ?></h4>
						<p><?php echo __('Email') ?>: <a href="mailto:info@ideasmirasol.com.ar">info@ideasmirasol.com.ar</a> <br />New York: 908 342 2072<br />Buenos Aires: 15 6761 5559</p>
					</div>
					<?php echo include_component('home', 'contactForm') ?>					
				</section>
			</div>
		</div>        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<script src="<?php echo public_path('js/jquery.scrollTo-1.4.3.1-min.js') ?>"></script>
		<script src="<?php echo public_path('js/jqBootstrapValidation.js') ?>"></script>		
        <script src="<?php echo public_path('js/main.js') ?>"></script>
    </body>
</html>