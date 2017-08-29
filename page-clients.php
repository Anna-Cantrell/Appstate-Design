<?php get_header(); ?>

<div class='container-clients'>
    <div class="locator clients-locator"></div>
    <div class='folio-container-clients'>

<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }

  //response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";
 
//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];
 
//php mailer variables
$to = 'appstatedesign@gmail.com';
$subject = $name . " sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
  'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {
 
    //validate email
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  my_contact_form_generate_response("error", $email_invalid);
else //email is valid
{
  //validate presence of name and message
if(empty($name) || empty($message)){
  my_contact_form_generate_response("error", $missing_content);
}
else //ready to go!
{
  $sent = wp_mail($to, $subject, strip_tags($message), $headers);
if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent

}
}
  }
}

?>

<div class="client-welcome-container">
    <div class="client-comment-title"><h1>Looking for a designer?</h1></div>
        <div class="client-comment-subtitle">you're in the right place.</div>
    
    <div class="client-content">
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
get_template_part( 'content', get_post_format() );
?>
        </div>
    <div class="client-picture">
        <?php
$catquery = new WP_Query( 'cat=17&posts_per_page=1' ); while($catquery->have_posts()) : $catquery->the_post(); get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    </div>
        </div>
        </div> <!--- folio container --->        
        
        
                <!--- the form --->
<div class="form-container-clients">

 
              <style type="text/css">
  .error{
    padding: 5px 9px;
    border: 1px solid red;
    color: red;
    border-radius: 3px;
  }
 
  .success{
    padding: 5px 9px;
    border: 1px solid green;
    color: green;
    border-radius: 3px;
  }
 
  form span{
    color: red;
  }
</style>
 
<div id="respond-client">
  <?php echo $response; ?>
  <form action="<?php the_permalink(); ?>" method="post">
    
      <div class="name-email">
    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" class="name-line" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
      
    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" class="email-line" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p> 
    
      <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" class="verification-line" name="message_human"> + 3 = 5</label></p>
    
      </div>
      
      <div class="message-body-client">
    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text" class="message-line-client"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
      </div>
      
       
      
    <input type="hidden" name="submitted" value="1" class="hidden-input">
    <p><input type="submit" class="submit-input"></p>
      
  </form>
</div>
             
 
      <?php endwhile; endif;// end of the loop. ?>
 
    </div> <!--- form container --->
</div> <!--- container --->


<?php get_footer(); ?>