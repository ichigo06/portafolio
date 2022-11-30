<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/4ca23cb350.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>
    <title>Portafolio</title>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/logo-dev.png" alt="" class="header__logo">
                    </div>
                    <div class="col-9">
                        <nav class="header__nav">
                            <?php html5blank_nav(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>