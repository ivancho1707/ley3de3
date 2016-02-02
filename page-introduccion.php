
<?php
	/*
		Template Name: Introduccion
	*/
?>

<?php get_header(); ?>

	<div class="row page-container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<?php the_post();?>
				<?php echo the_content();?>	
				<ul class="introduccion-menu">
					<li><a href="#informate"><span class="item-informate"></span><label>INFÓRMATE</label></a></li>
					<li><a href="#firma"><span class="item-firma"></span><label>FIRMA</label></a></li>
					<li><a href="#ayudanos"><span class="item-ayudanos"></span><label>AYÚDANOS</label></a></li>
				</ul>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="multipage-container">
			<?php $this_page_id=get_query_var('page_id'); ?>
			<?php query_posts(array('post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
				<div class="row"><a name="<?php echo basename(get_permalink()); ?>"></a>
					<div class="col-md-2"></div>
					<div class="col-md-8 text-center">
						<div class="white-box">
						<hr style="display:inline-block;border: 2px solid white; width:30px; margin:0px; transform: translateY(1px)"><div class="black-box"><?php the_title(); ?></div>
						<hr style="display:inline-block;border: 2px solid white; width:30px; margin:0px; transform: translate(-3px, 1px)">
						</div>
						<hr style="display:block;border: 2px solid black; margin:0px 20px">
						<!--hr style="display:block;border: 2px solid white; margin:0px auto; width:100px;transform: translateY(-4px)"-->
						<div class="page-content text-left">
							<?php echo the_content();?>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			<?php } ?>
		</div>

<?php get_footer(); ?>