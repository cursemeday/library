<?php if ( post_password_required() ) 
{ return; }
?>


<?php if ( have_comments() ) : ?>


<div id="comments">
  

<h2 class="comments-title">
<?php printf( _nx ( 'Один комментарий к записи &ldquo;%2$s&rdquo;', '%1$s комментариев к записи &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
			number_format_i18n( get_comments_number() ), get_the_title() ); ?>
</h2>



		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
				    'callback' => 'mytheme_comment'
				) );
			?>
		</ol>


<?php endif; ?>

</div>


<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :	?>
		<p class="no-comments"><?php _e( 'Comments are closed.' ); ?></p>
<?php endif; ?>


<?php comment_form(); ?>