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
        <h1>Question 4</h1>
        <h1>Les cours du programme de Techniques d'intégration multimédia du collège de Maisonneuve</h1>
		<main id="main" class="site-main" style="display:grid;grid-template-columns: repeat(6, 3fr);grid-template-rows: repeat(6, 1fr);">

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
               $realTitle = substr($title, 0, 7);
               $sess = substr($title, 4, 1);
               $dom = substr($title, 5, 1);
               echo '<div class=q3 style=grid-area:'.$sess.'/'.$dom.'>';
               echo '<h3><a href='.$link.'>'.$realTitle .'</a></h3>' ;
               echo '</div>';
             }

		    ?>
        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();