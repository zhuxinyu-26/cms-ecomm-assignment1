<?php
/* 
Template Name: Homepage 
Template Post Type: Page 
*/
get_header();
?>
<main class="homepage">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
    else:
        echo "<p>Sorry, no posts are found.</p>";
    endif;
    ?>
</main>
<?php
get_footer();
?>