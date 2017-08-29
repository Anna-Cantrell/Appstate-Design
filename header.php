<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>appstate design</title>
      
     <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
      
      <!--- this is the "wrong" method to insert css. css inserted through functions theme. leaving this here for back up though.

      <link href="<?php // bloginfo('template_directory');?>/dev.css" rel="stylesheet">

      --->
      
      <?php wp_head();?>
     </head>
    <body>
        <div class="shell"></div>
        <div class="container">
            
    <div class="header-bar">
        
        <nav class="site-nav">
			<ul>
              <li class="clients"><a href="http://appstatedesign.com/clients/">Looking for<br>a designer?</a></li>
              <li id="right"><a href="http://appstatedesign.com/alumni/">connect<br>with alumni</a></li>
            </ul>
            
        <a href="<?php bloginfo( 'wpurl' );?>"><div class="header-text">
            <h1 class="title">
                </h1>
        </div></a>
            
		</nav>
        
        </div>
        
        <nav class="mobile">
            <div class="menu-bar">menu</div>
            <div class="menu-container">
            <ul class="mobile-nav-list">
                <li class="home"><a href="<?php bloginfo( 'wpurl' );?>">Home</a></li>
                  
              <li class="clients"><a href="http://appstatedesign.com/clients/">Looking for a designer?</a></li>
                
              <li id="right"><a href="http://appstatedesign.com/alumni/">Connect with alumni</a></li>
            </ul>
            </div>
        
        
        </nav>
        
        
        
        
                
        
    