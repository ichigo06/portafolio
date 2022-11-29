<?php get_header(); ?>
<section style="background-color: #0B0D0E;" class="pb-4 pt-4">
    <div class="container pt-4">
        <div class="container-fluid pt-4">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="profile">
                        <h2 class="profile__title profile__title__second">Servidores <span> y administradores</span></h2>
                    </div>
                </div>
                <div class="col-6">
                    <div class="profile">
                        <p class="profile__paragraph">Mi experiencia con servidores que he trabajado para subir el proyecto tanto Dominio y Hosting. También que administradores he usado como Cpanel, Plesk , etc. Conocimiento básico en Amazon; usando la terminal con PuTTY SSH. Experiencia trabajando con FTP conectando con FileZilla. Dominio de repositorios y GitHub y GitLab.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-12 mb-4 pb-4 text-center d-flex justify-content-center">
                    <h2 class="profile__title profile__title__second line_service">Servidores</h2>
                </div>
                <?php $arg = array(
                        'post_status' => 'publish',
                        'post_type' => 'funciones',
                        'order' => 'ASC',  
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tecnologias',
                                'field' => 'slug',
                                'terms' => 'servidores'
                            )
                        )
                );
                    $experience = new WP_Query($arg);
                ?>
                <?php if($experience->have_posts()): ?>
                    <?php while($experience->have_posts()): $experience->the_post();
                        $name = get_the_title();
                        $image = get_the_post_thumbnail_url();
                    ?>
                    <div class="col-3 mb-4">
                        <div class="service__servers">
                            <img src="<?php echo $image ?>" alt="" class="service__servers__img">
                            <h2 class="text-center mt-3 service__servers__title"><?php echo $name ?></h2>
                        </div>
                    </div>
                    <?php endwhile ?>
                <?php  wp_reset_postdata(); endif ?>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-12 mb-4 pb-4 text-center d-flex justify-content-center">
                    <h2 class="profile__title profile__title__second line_service">Administradores</h2>
                </div>
                <?php $arg = array(
                        'post_status' => 'publish',
                        'post_type' => 'funciones',
                        'order' => 'ASC',  
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tecnologias',
                                'field' => 'slug',
                                'terms' => 'administradores	'
                            )
                        )
                );
                    $experience = new WP_Query($arg);
                ?>
                <?php if($experience->have_posts()): ?>
                    <?php while($experience->have_posts()): $experience->the_post();
                        $name = get_the_title();
                        $image = get_the_post_thumbnail_url();
                    ?>
                <div class="col-3 mb-4">
                    <div class="service__servers">
                        <img src="<?php echo $image ?>" alt="" class="service__servers__img">
                        <h2 class="text-center mt-3 service__servers__title"><?php echo $name ?></h2>
                    </div>
                </div>
                    <?php endwhile ?>
                <?php  wp_reset_postdata(); endif ?> 
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-12 mb-4 pb-4 text-center d-flex justify-content-center">
                    <h2 class="profile__title profile__title__second line_service">Aplicaciones para hacer conexiones con FTP y SSH</h2>
                </div>
                <?php $arg = array(
                        'post_status' => 'publish',
                        'post_type' => 'funciones',
                        'order' => 'ASC',  
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tecnologias',
                                'field' => 'slug',
                                'terms' => 'ftp-y-ssh'
                            )
                        )
                );
                    $experience = new WP_Query($arg);
                ?>
                <?php if($experience->have_posts()): ?>
                    <?php while($experience->have_posts()): $experience->the_post();
                        $name = get_the_title();
                        $image = get_the_post_thumbnail_url();
                    ?>
                <div class="col-3 mb-4">
                    <div class="service__servers">
                        <img src="<?php echo $image ?>" alt="" class="service__servers__img">
                        <h2 class="text-center mt-3 service__servers__title"><?php echo $name ?></h2>
                    </div>
                </div>
                    <?php endwhile ?>
                <?php  wp_reset_postdata(); endif ?> 
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-12  mb-4 pb-4 text-center d-flex justify-content-center">
                    <h2 class="profile__title profile__title__second line_service">Aplicaciones para guardar repositorios</h2>
                </div>
                <?php $arg = array(
                        'post_status' => 'publish',
                        'post_type' => 'funciones',
                        'order' => 'ASC',  
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'tecnologias',
                                'field' => 'slug',
                                'terms' => 'repositorios'
                            )
                        )
                );
                    $experience = new WP_Query($arg);
                ?>
                <?php if($experience->have_posts()): ?>
                    <?php while($experience->have_posts()): $experience->the_post();
                        $name = get_the_title();
                        $image = get_the_post_thumbnail_url();
                    ?>
                <div class="col-3 mb-4">
                    <div class="service__servers">
                        <img src="<?php echo $image ?>" alt="" class="service__servers__img">
                        <h2 class="text-center mt-3 service__servers__title"><?php echo $name ?></h2>
                    </div>
                </div>
                    <?php endwhile ?>
                <?php  wp_reset_postdata(); endif ?> 
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
