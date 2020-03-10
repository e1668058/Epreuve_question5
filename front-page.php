<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */
// The Query

        //Utiliser ca pour afficher la description : term_description( $category );
        $args = array(
            "category_name" => "cours",
            "posts_per_page"=> 10
        );
        $query1 = new WP_Query( $args );
       
get_header();
?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">
    
		<?php
        
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
        ?>


        <!-- <h1>Nos événements importants cette année</h1> -->
        <!-- <div class="content-eve"> -->
        
        <?php
        // // The 2nd Loop
        // while ( $query3->have_posts() ) {
        // $query3->the_post();
        // echo '<div class="eve">';
        //pour avoir le lien quand tu click le titre
        // $linkEve = get_permalink($query3->post->ID);
        // echo '<h4><a href='.$linkEve.'>' . get_the_title( $query3->post->ID ) .  ' - </a> '.get_the_date().' </h4>';
        // echo '<p>'.get_the_excerpt() .'</p>';
        // echo '</div>';
        // }

        // // Restore original Post Data
        // wp_reset_postdata();
        
        ?>   
        <!-- </div> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
