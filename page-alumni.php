
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
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyArKTmq3qbUgzonLUycHSXZBjgjqLoZRHk&q=United+States" allowfullscreen>
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
<?php 
  $args =  array( 
      // 'post_type' corrsponds with 'register_post_type' in functions. This is how it knows which group of posts to pull from.
    'post_type' => 'my-custom-post',
    'orderby' => 'menu_order',
    'order' => 'ASC'
   );

$custom_query = new WP_Query( $args );
    while ($custom_query->have_posts()) : $custom_query->the_post(); 
     if ( comments_open() || get_comments_number() ) :
	  comments_template();
	endif;?>
  	
    
   
         <div class="alumni-posts">
             <div class="alumni-style-container">
               
             <h2 class="alumni-post-title"><?php the_title(); ?></h2>
             
             <div class="alumni-content">
				<?php get_template_part( 'content', get_post_format() ); ?>
             </div>
             </div>
             
          </div>
   
     
<?php endwhile; 
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
			 //Allow comment pagination
			'reverse_top_level' => false //Show the newest comments at the top of the list
		), $comments);
	?>
</ol>
                 
	<?php endif; ?>
             </div>
             
          </div> 
     
    </div>
			<?php endwhile; ?>
    
     
      
 
    </div> <!--- con --->

<?php get_footer(); ?>