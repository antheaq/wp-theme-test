<?php get_header();?> <!-- include secondary as argument if using secondary header  -->

<section class="page-wrap">
    <div class="container">
        <h1 class="title mt-3"><?php the_title();?></h1>
        <?php get_template_part('includes/section', 'content');?>
    </div>
</section>

<?php get_footer();?>