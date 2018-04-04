<?php get_header(); ?>

<!-- Main -->
<div class="main">
	<!-- Main Content -->
	<h1><?php the_title(); ?></h1>
	<div class="main-content">
	<?php the_content(); ?>
	</div>
</div>
<!-- End Main -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>