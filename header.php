<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <title>Blog Template · Bootstrap v5.0</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <div class="top-title">
      <h1 style="color:white">Аквасинт</h1>
      <p style="color:white">Научно-производственное предприятие ЗАО "Аквасинт" имени академика В. А. Телегина</p>
    </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <div class="container">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav',
        ]) ?>
    </div>
  </div>
  </div>
  </nav>
