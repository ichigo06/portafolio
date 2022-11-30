<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section style="background-color: #0B0D0E;" class="pt-4">
    <div class="container pt-4">
        <div class="container-fluid pt-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 style="color: #08d665"><?php echo get_the_title() ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 pt-4">
                    <div class="img">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" width="100%" height="400px" style="object-fit: cover">
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-4">
                    <div class="text-white">
                        <?php echo get_the_content() ?>
                    </div>
                    <div class="d-flex pt-3">
                        <a class="profile__button" href="<?php the_field('url') ?>" target="_blank">Ver Página</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>   
<?php get_footer(); ?>
