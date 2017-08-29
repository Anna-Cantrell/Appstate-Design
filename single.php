<?php get_header(); ?>


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


<?php get_footer(); ?>