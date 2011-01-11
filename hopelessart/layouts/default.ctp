<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
     	<title><?php echo $title_for_layout . ' &raquo; ' . Configure::read('Site.title'); ?></title>
     	<?php
     		echo $layout->meta();
		 	echo $layout->feed();
			echo $html->css(array(
				'superfish',
				'superfish-navbar',
				'theme',
				'jquery.fancybox-1.3.4',
				'tipsy.css'
			));
			echo $html->script(array(
				'jquery/jquery.min',
				'jquery.apple_effect.min',
            	'jquery/jquery.hoverIntent.minified',
            	'jquery/superfish',
            	'jquery/supersubs',
            	'fancybox/jquery.fancybox-1.3.4.pack',
            	'fancybox/jquery.easing-1.3.pack',
            	'jquery.tipsy',
            	'hopelessart'
            ));
			echo $layout->js();
		 	echo $scripts_for_layout;
		?>
    </head>

    <body>
	    <!-- start fullwidth -->
	    <div id="fullwidth">
			<hr/>
	
			<!-- start wrapper -->
			<div id="wrapper">
	
				<!-- start header -->
				<div id="header" class="container_16">
					<!-- start logo -->
					<div id="logo" class="grid_8 grid_8_left">
	
						<!-- start sitetitle -->
						<div id="sitetitle" class="grid_4 grid_4_left">
							<h1><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?></h1>
						</div>
						<!-- end sitetitle -->
	
						<!-- start tagline -->
						<div id="tagline" class="grid_4 grid_4_right">
							<p><?php echo Configure::read('Site.tagline'); ?></p>
						</div>
						<!-- end tagline -->
					</div>
					<!-- end logo -->
					<!-- start socialmedia -->
					<div id="socialmedia" class="grid_8 grid_8_right">
						<?php
							echo $this->Custom->socialBookmark('email', '/contact');
							echo $this->Custom->socialBookmark('rss', '/nodes/promoted.rss');
							echo $this->Custom->socialBookmark('twitter', 'http://twitter.com/#');	
						?>
					</div>
					<!-- end socialmedia -->
	
					<!-- start cleardivider -->
					<div id="cleardivider" class="grid_16 cleardivider"></div>
					<!-- end cleardivider -->
	
					<!-- start topbar -->
					<div id="topbar" class="grid_16">
	
						<!-- start navigation -->
						<div id="navigation" class="grid_11">
							<?php echo $this->Layout->menu('main', array('dropdown' => true, 'tagAttributes' => array('class' => 'sf-navbar'))); ?>
						</div>
						<!-- end navigation -->
	
						<div id="searchform" class="grid_5">
							<?php echo $this->Layout->blocks('header-right'); ?>
						</div>
	
						<div class="cleardivider"></div>
					</div>
					<!-- end topbar -->
				</div>
				<!-- end header -->
	
				<div class="grid_16 cleardivider"></div>
	
				<!-- start content -->
				<div id="content" class="grid_16">
					<?php echo $content_for_layout; ?>
				</div>
				<!-- end content -->
	
				<div class="cleardivider grid_16"></div>
			</div>
			<!-- end wrapper -->
	
			<!-- start footer -->
			<div id="footer">
	
				<!-- start tweetbar -->
				<div id="tweetbar">
	
				</div>
				<!-- end tweetbar -->
	
				<!-- start recentitems -->
				<div id="recentitems" class="grid_16">
					<?php echo $this->Layout->blocks('footer'); ?>
				</div>
				<!-- end recentitems -->
	
				<!-- start clear divider -->
				<div class="cleardivider grid_16"></div>
				<!-- end clear divider -->
	
				<!-- start footerinformation -->
				<div id="footerinformation" class="grid_16">
	
					<!-- start poweredby -->
					<div id="poweredby" class="grid_8 grid_8_left">
						<p>Powered by <?php echo $this->Html->link('Croogo', 'http://croogo.org'); ?> with <?php echo $this->Html->link('HoplessArt', 'http://hopelessart.com/blog/hopelessart-theme'); ?> Theme</p>
					</div>
					<!-- end poweredby -->
	
					<!-- start cakepower -->
					<div id="cakepower" class="grid_8 grid_8_right">
						<a href="http://www.cakephp.org"><?php echo $html->image('/img/cake.power.gif'); ?></a>
					</div>
					<!-- end cakepower -->
				</div>
				<!-- end footerinformation -->
			</div>
			<!-- end footer -->
	
		</div>
		<!-- end fullwidth -->
    </body>
</html>