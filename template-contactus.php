<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="row mt-5">
            <div class="col-lg-6">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="fname" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <input type="text" name="lname" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Contact number" required>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col">
                            <textarea name="message" placeholder="Your message" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 pl-5-auto">
                <?php get_template_part('includes/section', 'content'); ?>
                
                <iframe width="300" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCxrQD6f_Z8s7GqOz6shVgiBAmE_Xja6Ks
                &q=Space+Needle,Seattle+WA" allowfullscreen>
                </iframe>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>