<?php get_header(); ?>

<div class="main">
	<!-- Main Content -->
	<h1><?php the_title(); ?></h1>
	<div class="main-content">
	<?php the_content(); ?>
	</div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>