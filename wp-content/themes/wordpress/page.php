<?php get_header(); 
wp_reset_query(); ?>

<h1>
	<pre><?php the_title(); ?></pre>
</h1>

<pre><?php the_content(); ?></pre>

<?php get_footer(); ?>
