<?php get_header(); 
/*
Template Name: Home Page
*/
?>



<div class="row tagline">
	<h3>Stock photos for everyone.</h3>
</div>

<?php $blog_posts = new WP_Query(['post_type' => 'post',
							 'posts_per_page' => '4',
									'orderby' => 'rand'
								]); ?>

<?php if($blog_posts->have_posts()): while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>


	<div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-.7 thumb-container">
		<div class="well photo-thumbs">
			<img class="img-responsive" src="https://placeimg.com/200/200/nature" alt="">
		</div>
	</div>

     

<?php endwhile; endif; ?>

<?php get_footer(); ?>