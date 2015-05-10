<?php get_header(); ?>


<div class="row">
	<h1>InStock</h1>
</div>

<div class="row">
	<h3>Stock photos for everyone.</h3>
</div>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>

      <h2>
      	<a href="<?php the_permalink() ?>">
      		<?php the_title(); ?>
      	</a>
      </h2>

<?php endwhile; endif; ?>

<?php get_footer(); ?>