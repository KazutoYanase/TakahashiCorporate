<?php
/**
 * The template for displaying archive pages.
 *
 * @package TAKAHASHI GROUP
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post();//Start the Loop ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile;//end of the loop. ?>

		<?php the_posts_navigation(); ?>

	<?php endif; ?>

<?php get_footer(); ?>