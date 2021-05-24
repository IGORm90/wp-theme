<?php get_header() ?>
<main class="container">
  <div class="row g-5">
    <div class="col-md-8">

      <article class="blog-post">
        <?php the_post() ?>
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            <?php the_title() ?>
            <? the_post_thumbnail() ?>
        </h3>
      </article>

    </div>

    <div class="col-md-4">
      <?php get_template_part('template-parts/right-sidebar') ?>
    </div>
  </div>

</main>
<?php get_footer() ?>