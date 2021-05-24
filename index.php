<?php get_header() ?>
<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
        <?php the_content() ?>
      </article>

    </div>

    <div class="col-md-4">
      <?php get_template_part('template-parts/right-sidebar') ?>
    </div>
  </div>

</main>
<?php get_footer() ?>