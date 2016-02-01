<?php
	/*
		Template Name: Index
	*/
?>

<?php get_header(); ?>

	<div class="row page-container">
		<div class="col-md-2"></div>
		<div id="page-container" class="col-md-8">
			<?php the_post();?>
			<?php echo the_content();?>	
		</div>
		<div class="col-md-2"></div>

<?php get_footer(); ?>
