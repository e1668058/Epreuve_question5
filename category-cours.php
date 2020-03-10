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
        <?php 
        $category_id = get_cat_ID('cours');
        $cat_link = get_category_link($category_id);
        echo '<h2><a href='.$cat_link.'>Cours</a></h2>';
        ?>
        <h1>Question 3</h1>
		<main id="main" class="site-main">

         <header class="page-header">
            
			</header><!-- .page-header -->

            
			<?php
            /* Start the Loop */
            
            
            $n = 0;
			while ( have_posts() ) {
               the_post();
               $n++;
               $link = get_permalink();
               $title = get_the_title();
               $sess = substr($title, 4, 1);
               $dom = substr($title, 5, 1);
               echo '<div class=q3>';
               echo '<h3>'.$n.'. <a href='.$link.'>'.$title .'</a> -  </h3> <h3 class=session> Session: '.$sess.' </h3> <h3 class=domaine> Domaine : '.$dom.'</h3>';
               echo '</div>';
             }

		    ?>
        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();