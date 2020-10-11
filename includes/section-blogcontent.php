<?php if(have_posts()): while(have_posts( )): the_post();?>

    <p><?php echo get_the_date('l jS F, Y');?></p> <!-- d/m/Y h:i:s -->

    <?php the_content(); ?>

    <?php //the_author(); ?> 
    <?php  
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        //echo $fname . ' ' . $lname;
    ?>

    <p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>

    <?php
        echo "Tags: ";
        $tags = get_the_tags();
        if($tags):
        foreach($tags as $tag):?>
            <?php //echo get_tag_link($tag->term_id); //output actual link ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-info">
                <?php echo $tag->name;?>
            </a>
    <?php endforeach; ?>

    <div class="row mt-3 ml-1">
       <p>Category:    
            <?php 
                $categories = get_the_category();
                foreach($categories as $cat) :?>
                    <a href="<?php echo get_category_link($cat->term_id);?>">
                    <?php echo $cat->name; ?>
                    </a>
            <?php endforeach; endif; ?>
        </p>
    </div>

    <div container class="comments-form mt-3">
        <?php comments_template(); ?>
    </div>
    
<?php endwhile; else: endif;?>