<?php get_header(); ?>
<section class="background__image" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/fondo-cv.jpg'); background-size: cover; height: 100vh;" class="d-flex align-items-center">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="profile">
                        <?php if( get_field('nombres') || get_field('apellidos')): ?>
                        <h2 class="profile__title"><?php the_field('nombres')?> <span> <?php the_field('apellidos') ?></span></h2>
                        <?php endif ?>
                        <?php if( get_field('detalles') ): ?>
                            <p class="profile__paragraph"><?php the_field('detalles') ?></p>
                        <?php endif ?>
                        <a class="profile__button" href="">Contacto</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="profile__red">
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" width="100%" alt="">
                        <div class="profile__red__float">
                            <ul class="">
                                <li><a href="https://api.whatsapp.com/send?phone=+51<?php the_field('whatsapp') ?>&text=Hola, Nececito mas informacion!" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="<?php the_field('facebook') ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php the_field('linkendin') ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="" style="background-color: #0B0D0E;">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <div class="mt-2 mb-4 profile__img">
                        <img  src="<?php echo get_template_directory_uri() ?>/img/about-profile.png" alt="" width="100%">
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <div class="profile profile__second">
                        <h2 class="profile__title">Mis <span>servicios</span></h2>
                        <p class="profile__paragraph">Ofrezco mi servicio realizando proyectos Wordpress. Creando temas personalizados: Blog , Páginas informativas y Tienda virtual (El desarrollo de acuerdo al wireframe que se me brinde). Tambien lo realizo usando Editores Visuales como WP backery (Composer) y Elementor.</p>
                        <a class="profile__button" href="">Descargar CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #0B0D0E;" class="pb-4">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="profile">
                        <h2 class="profile__title profile__title__second">Mi experiencia<span> laboral</span></h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="profile">
                        <p class="profile__paragraph">Mi experiencia como profesional Frontend Developer Trabajando para las siguientes empresas y desarrollando una web en buena condición.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $arg = array(
                        'post_status' => 'publish',
                        'post_type' => 'experiencia',
                        'order' => 'ASC',  
                );
                    $experience = new WP_Query($arg);
                ?>
                <?php if($experience->have_posts()): ?>
                    <?php while($experience->have_posts()): $experience->the_post();
                        $name = get_the_title();
                        $description = get_the_content();
                        $time = get_the_excerpt();
                    ?>
                    <div class="col-12 col-md-4">
                        <div class="cardpre">
                            <div class="cardpre__content">
                                <p class="cardpre__content__paragraph"><?php echo $time ?></p>
                                <h2 class="cardpre__content__title"><?php echo $name ?></h2>
                                <p class="cardpre__content__details"><?php echo $description ?></p>
                            </div>
                            <div class="linegrand">
                                
                            </div>
                        </div>
                    </div>
                    <?php endwhile ?>
                <?php  wp_reset_postdata(); endif ?>
            </div>
            <div class="row mt-4 mb-2">
                <div class="col-12 col-md-6">
                    <div class="scoredeveloper">
                        <h2 class="scoredeveloper__title">Wordpress Developer</h2>
                        <p class="scoredeveloper__grand">80%</p>
                    </div>
                    <div class="linegrand linegrand__second">
                            
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="scoredeveloper">
                        <h2 class="scoredeveloper__title">Frontend Developer</h2>
                        <p class="scoredeveloper__grand">80%</p>
                    </div>
                    <div class="linegrand linegrand__second">
                            
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="scoredeveloper">
                        <h2 class="scoredeveloper__title">Backend Developer</h2>
                        <p class="scoredeveloper__grand">80%</p>
                    </div>
                    <div class="linegrand linegrand__second">
                            
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="scoredeveloper">
                        <h2 class="scoredeveloper__title">Marketing Digital</h2>
                        <p class="scoredeveloper__grand">80%</p>
                    </div>
                    <div class="linegrand linegrand__second">
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #0B0D0E;" class="pb-4">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-4">
                    <div class="profile">
                        <h2 class="profile__title profile__title__second">Proyectos realizados con<span> Wordpress, React y Laravel</span></h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="profile">
                        <p class="profile__paragraph">Mis experiencias con las tecnologías que me ha tocado trabajar y colaborar.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $arg = array(
                        'post_status' => 'publish',
                        'post_type' => 'proyectos',
                        'order' => 'ASC',  
                );
                    $project = new WP_Query($arg);
                ?>
                <?php if($project->have_posts()): ?>
                    <?php while($project->have_posts()): $project->the_post();
                        $image = get_the_post_thumbnail_url();
                    ?>
                <div class="col-12 col-md-3 mb-4">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="cardproject">
                            <div class="cardproject__content">
                                <img src="<?php echo $image ?>" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                    <?php endwhile ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #0B0D0E;">
    <div class="container">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="profile">
                        <h2 class="profile__title profile__title__second">Testimonios<span> realizados</span></h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="profile">
                        <p class="profile__paragraph">Los Testimonios de grandes personas con que me ha tocado trabajar y he aprendido mucho de ellos.</p>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cardtestimonial">
                        <div class="cardtestimonial__img">   
                            <img src="<?php echo get_template_directory_uri() ?>/img/gian.jpg" alt="">
                        </div>
                        <div class="cardtestimonial__content">
                            <img src="<?php echo get_template_directory_uri() ?>/img/comillas.png" alt="">
                            <p class="cardtestimonial__content__paragraph">Un buen colaborador  , fue de mi agrado trabajar con el, siempre cumplidor y agradezco su gran aporte a la empresa.</p>
                            <span class="cardtestimonial__content__member">Gianmarco Oliva</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="container fluid">
            <div class="row">
                <div class="col-12 col-md-6">

                </div>
                <div class="col-12 col-md-6">

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
