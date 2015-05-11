<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php echo get_the_date(); ?> by <?php the_author(); ?>

	<div class="col-sm-8 col-sm-offset-2">
     <?php the_content(); ?>
    </div>
      <p>
      	Category: 

      <?php the_category(', ') . " " . the_tags(__('Tags: '), ', ', ' | ') . edit_post_link(__('Edit'), ''); ?>

      </p>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>