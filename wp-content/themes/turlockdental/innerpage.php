<?php

/*

Template Name: Inner Page

*/
?>

<?php
get_header();

?>


<?php 
if (have_posts()) :
    while (have_posts()) : the_post();
           ?>
        
            <section class="page_contant">
            
                    <?php the_content(); ?>
             
            </section>
            <?php
    endwhile;
endif;
?>
<?php
get_footer();
?>
