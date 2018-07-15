<?php get_header(); ?>

    <?php 
        if ( have_posts() ) :
            echo '<h2>Search Results for: '.$_GET['s'].'</h2>';
            
            while ( have_posts() ) : the_post();

                echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';

            endwhile;
        else :
             echo '<h2>Sorry, there are no results which match your criteria</h2>';
        endif;
    ?>

<?php get_footer(); ?>