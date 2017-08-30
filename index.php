<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>appstate design</title>
      
     <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

      <!--- this is the "wrong" method to insert css. css inserted through functions theme. leaving this here for back up though. --->

      <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker" rel="stylesheet">
     </head>

    <body>


        <div class="shell"></div>
        <div class="index-container">

            <div class="index-wrapper">



  <div class='bobber'>
       <div class="logo-holder">

           <div class="logo-text-container">
              <div class="logo-text"></div>
           </div>
           <div class="left-bracket"></div>
           <div class="right-bracket"></div>
           <div class="description"><?php echo get_bloginfo( 'description' ); ?></div>

       </div>
</div>
            <div class="index-info row">
                <div class="column-1" id="cta">Looking for a designer?</div>

                <a href="/alumni"><div class="column mobile-column-4">Connect with alumni</div></a>

        <div class="column column-3">Graduating can be scary. Knowing you have friends in all the right places can make it easier. Search for and connect with Appstate alumni.</div>
                <a href="/alumni"><div class="column column-4">Connect with alumni</div></a>
            </div>

          </div> <!-- wrapper -->

             <!-- MENU FORM -->
          <div id="form-holder" class="row-form">

              <div class="form-holder">

                  <div class="intro-text-holder">
                      <div class="intro-primary">Looking for a designer?<br />
					  <span class="intro-secondary">You're in the right place.</span>
						  <p class='form-text'>All you have to do is send us your name and email along with a brief description of the project and we’ll connect you with talented student designers. It’s that easy. Send us a message today!</p>
					  </div>
                      
                  </div>
				  
				  
				  
				  
				  <?php

if($_POST["name"] && $_POST["contact"]) {
    $recipient="cantrelldm@appstate.edu";
    $subject=$_POST["name"] . ' - BE EPIC web registered';
    $name=$_POST["name"];
    $senderEmail=$_POST["contact"];
	$senderMessage=$_POST["message"];

    $mailBody="Name: $name\nEmail: $senderEmail\nmessage: $senderMessage\n\n";

    mail($recipient, $subject, $mailBody, "From: $name <$senderEmail>");
    
    if ( preg_match( "/[\r\n]/", $name ) || preg_match( "/[\r\n]/", $senderEmail ) ) {
        $url = 'http://appstatedesign.com/?success=false';
        header('Location: ' . $url, false, 302);
        exit;
    } else {
    
    $url = 'http://appstatedesign.com/?success=true';
    header('Location: ' . $url, false, 302);
    exit; }
    
}

?>
		

                  <form method="post" action="<?php the_permalink(); ?>" id='actual-form'>
                      <br>
                        <input required='' type='text' name='name' />
                        <label alt='full name' placeholder='full name'></label>
                        <input required='' type='text' name='contact' />
                        <label alt='email address' placeholder='email address'></label>
					  
					  <textarea required='' type='text' name='message'></textarea>
                        <label alt='Tell us about your project' placeholder='message'></label>
					  
                        <input type="submit" value="Submit">
					    
                   </form>


              </div> <!-- end form holder -->

              <div class="toggle" id="toggle">
                  <div id="menuCircle" class="toggle-circle">
                      <div id="line1" class="toggle-line1"></div>
                      <div id="line2" class="toggle-line2"></div>
                      <div id="line3" class="toggle-line3"></div>
                  </div>
              </div>

          </div> <!-- end row -->

<?php get_footer(); ?>
