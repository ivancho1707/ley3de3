<?php
	/*
		Template Name: Index
	*/
?>

<?php get_header(); ?>

<div class="row container page-container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php the_post();?>
			<?php echo the_content();?>	
		</div>
		<div class="col-md-2"></div>
</div>

<?php get_footer(); ?>
