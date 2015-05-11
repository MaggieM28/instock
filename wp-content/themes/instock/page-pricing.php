<?php get_header();
/*
Template Name: Pricing Page
*/
?>

<div class="row">
 	<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">

 		<h3><?php the_title(); ?></h3>

 	</div>
</div>

<div class="space"><p>.</p></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 	<?php the_content(); ?>


<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
	<div class="usage">
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<h4>Web</h4>
			<div class="usage-icons"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/icons/monitor.png" alt="Web"></div>
		</div>
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<h4>Advertising</h4>
			<div class="usage-icons"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/icons/ad.png" alt="Advertising"></div>
		</div>
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<h4>Editorial</h4>
			<div class="usage-icons"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/icons/ed.png" alt="Editorial"></div>
		</div>
	</div>
</div>
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
	<div class="size">
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<div class="size-icons">
				<h4>Small</h4>
				<p>1/4 Page</p>
				<p>400px</p>
			</div>
		</div>
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<div class="size-icons">
				<h4>Medium</h4>
				<p>1/2 Page</p>
				<p>600px</p>
			</div>
		</div>
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<div class="size-icons">
				<h4>Large</h4>
				<p>Full Page</p>
				<p>1200px</p>
			</div>
		</div>
		<div class="col-xs-12 col-xs-12-offset-1 col-sm-2 col-sm-offset-1">
			<div class="size-icons">
				<h4>Custom</h4>
			</div>
		</div>
	</div>
</div>
	<button type="submit" class="btn btn-primary" name="price-submit">Submit</button>




  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>