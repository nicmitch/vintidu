<?php get_header(); ?>

			<?php 
			if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
				<?php the_post_thumbnail( 'large', array('class' => 'post-thumbnail') ); ?>
				<h1 class="text--big mt--05"><?php the_title(); ?></h1>
				<h2 class="subtitle"><?php the_field('subtitle'); ?></h2>

				<div class="mt--05 mb--05 work-content"><?php the_content(); ?></div>

			<?php } }?>

<?php get_footer();