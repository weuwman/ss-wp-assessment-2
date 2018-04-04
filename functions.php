<?php 


//https://speedrak.com/how-to-move-javascripts-to-the-footer-in-wordpress/
// Custom Scripting to Move JavaScript from the Head to the Footer

function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5);
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

// END Custom Scripting to Move JavaScript


function my_scripts()
{
	if(is_page()) : ?>
		<script text="javascript">
			alert("<?php the_title(); ?>");
		</script>
	<?php endif;
}
add_action('wp_footer','my_scripts', 50);