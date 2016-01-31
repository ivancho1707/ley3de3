<?php
	/*
		Template Name: Index
	*/
?>

<?php get_header(); ?>

<div class="row container page-container">
	<div class="row">
		<div class="col-md-4">
			<?php wp_nav_menu( array( 'theme_location' => 'prensa-menu', 'container_class'=>'header-menu horizontal' ) ); ?>
		</div>
		<div class="col-md-8">
			<?php the_post();?>
			<?php echo the_content();?>	
		</div>
</div>

<?php get_footer(); ?>
