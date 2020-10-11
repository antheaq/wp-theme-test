<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                
                <?php if (has_post_thumbnail()) : ?>

                    <img src="<?php the_post_thumbnail_url('blog-medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">

                <?php endif; ?>
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>