<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="col-sm-8 col-sm-offset-2">
		<h3><?php the_title(); ?></h3>

      <h4>
      Category: 

      <?php the_category(', '); ?>

      </h4>
	</div>

	<div class="col-sm-8 col-sm-offset-2">
		<?php the_content(); ?>
		<img src="<?php the_field('preview');?>" alt="">
	</div>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>