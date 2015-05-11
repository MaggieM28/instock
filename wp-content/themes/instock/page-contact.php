<?php get_header();
/*
Template Name: Contact Page
*/
?>

<div class="row">
	<div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  	<h1 class="pg-title"><?php the_title(); ?></h1>
  	
  	<div class="well form">
		<h2>Message me</h2>
		<form role="form" action="" method="POST">
		  
		  <div class="form-group">
		    <label for="first_name">First Name</label>
		    <input type="text" class="form-control" id="first_name" name="first_name">
		  </div>
		  
		  <div class="form-group">
		    <label for="last_name">Last Name</label>
		    <input type="text" class="form-control" id="last_name" name="last_name">
		  </div>

		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>

		  <div class="form-group">
		    <label for="subject">Subject</label>
		    <input type="text" class="form-control" id="subject" name="subject">
		  </div>

		  <div class="form-group">
		    <label for="message">Message</label>
		    <textarea class="form-control" id="message" name="message" rows="10"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>

</div>

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>

