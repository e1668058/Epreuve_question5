<?php
/**
 * The template for displaying evenements pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */
    
get_header();
?>
    
	<div id="primary" class="content-area">
   <h1>Question 1</h1>
		<main id="main" class="site-main">

         <header class="page-header">
            
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) {
               the_post();
               
               echo '<h3>' . get_the_title() . '</h3>';
               
             }

		    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();