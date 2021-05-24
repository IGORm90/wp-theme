<?php get_header() ?>
<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Фотографии, применение продукции "Аквасинт"
      </h3>

      <article class="blog-post">
      <?php while( have_posts() ) :
						the_post();
					?>       
            
            <?php the_post_thumbnail() ?>
            <h5 class="h5"><?php the_title() ?></h5>
            <div class="mb-5"></div>
        <?php endwhile; ?>
      </article>

    </div>

    <div class="col-md-4">
      <?php get_template_part('template-parts/right-sidebar') ?>
    </div>
  </div>

</main>
<?php get_footer() ?>