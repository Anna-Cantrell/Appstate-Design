<?php get_header(); ?>

<div class='container-alumni'>
    <div class="locator alumni-locator"></div>
    
    <div class="title-container">
        <div class="client-comment-title"><h1>Connect with alumni</h1></div>
        <div class="client-comment-subtitle">from all across the country</div>
        </div>
    
    <div class='folio-container-alumni'>
        
        <div class="map-holder">
            <div class="map">
                <iframe
  width="100%"
  height="300"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyArKTmq3qbUgzonLUycHSXZBjgjqLoZRHk&q=<?php single_cat_title(); ?>" allowfullscreen>
</iframe>
                
            </div>
            <div class='state-head'><h2>Select a state to find designers in the area</h2></div>
            <div class="states">
                
            <ul class="category-list">
    <?php wp_list_categories( array(
        'show_count'         => true,
        'use_desc_for_title' => true,
        'child_of'           => 4,
        'title_li' => ''
    ) ); ?>
</ul>
                
                
            </div>
        </div>
   </div><!--- folio --->
     
    
 <div class="alumni-post-container"> 
<?php $posts = query_posts( $query_string . '&orderby=name&order=asc' ); ?>
<?php 
if ( have_posts($posts) ) : while ( have_posts() ) : the_post();

?>
  	
    
   
         <div class="alumni-posts">
             
               
             
             <h2 class="alumni-post-title"><?php the_title(); ?></h2>
             
             <div class="alumni-content"><p>
                 <?php get_template_part( 'content', get_post_format() ); ?></p>
             </div>
   
             
     </div>
  

<?php endwhile; endif
?>
       </div><!--- alumni post cont --->
     
     <?php
$catquery = new WP_Query( 'cat=9&posts_per_page=12' ); while($catquery->have_posts()) : $catquery->the_post(); ?>
  	
     <div class="comment-posts-container">
         <div class="comment-posts">
             
             <h2 class="alumni-comment-title"><?php the_title(); ?></h2>
             
             <div class="alumni-comment">
                 
                 <div class="alumni-welcome">
                 <?php get_template_part( 'content', get_post_format() ); ?> 
                 </div>
                
             <?php if ( comments_open() || get_comments_number() ) :
	  $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args); ?>
                <!--- //////////////////////// --->
                 
                 <ol class="commentlist">
	<?php
		//Gather comments for a specific page/post 
		$comments = get_comments(array(
			'post_id' => 113,
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		//Display the list of comments
		wp_list_comments(array(
			'per_page' => 20, //Allow comment pagination
			'reverse_top_level' => false //Show the oldest comments at the top of the list
		), $comments);
	?>
</ol>
                 
	<?php endif; ?>
             </div>
             
          </div> 
     
  
			<?php endwhile; ?>

     
 
    </div> <!--- con --->

<!--- this is the form code you can mine class and ids out of
  'id_form'           => 'commentform',
  'class_form'      => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'submit',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Leave a Reply' ),
  'title_reply_to'    => __( 'Leave a Reply to %s' ),
  'cancel_reply_link' => __( 'Cancel Reply' ),
  'label_submit'      => __( 'Post Comment' ),
  'format'            => 'xhtml',

  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '<p class="comment-notes">' .
    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
    '</p>',

  'comment_notes_after' => '<p class="form-allowed-tags">' .
    sprintf(
      __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
      ' <code>' . allowed_tags() . '</code>'
    ) . '</p>',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
); --->








<?php get_footer(); ?>