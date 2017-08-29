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
      <link rel="stylesheet" type="text/css" href="style.css">

      <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker" rel="stylesheet">

     </head>

    <body>

      <!-- MENU FORM -->
          <div id="form-holder" class="row-form">

              <div class="form-holder">

                  <div class="intro-text-holder">
                      <div class="intro-primary">Register now to guarantee entry on event night.</div>
                      <div class="intro-secondary">This is one night only, don’t miss your opportunity!</div>
                  </div>

                  <form method="post" action="email.php" id='actual-form'>
                      <br>
                        <input required='' type='text' name='name' />
                        <label alt='full name' placeholder='full name'></label>
                        <input required='' type='text' name='contact' />
                        <label alt='email address' placeholder='email address'></label>
                        <input type="submit" value="guarantee your spot!">
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
                <a href="/clients"><div class="column column-1">Looking for a designer?</div></a>
        <div class="column column-2">We want the community to have an easy to access website allowing them to get in touch with student designers for their design projects. This is what you've been looking for.</div>

                <a href="/alumni"><div class="column mobile-column-4">Connect with alumni</div></a>

        <div class="column column-3">Graduating can be scary. Knowing you have friends in all the right places can make it easier. Search for and connect with Appstate alumni.</div>
                <a href="/alumni"><div class="column column-4">Connect with alumni</div></a>
            </div>

          </div> <!-- wrapper -->



<?php get_footer(); ?>
