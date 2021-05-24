<div class="position-sticky" style="top: 2rem;">
        
    <h4 class="fst-italic">Продукция</h4>
    <?php wp_nav_menu([
        'theme_location' => 'sidebar',
        'container' => false,
        'menu_class' => 'nav flex-column',
    ]) ?>



    <?php if (is_active_sidebar('sidebar-blog')): ?>
        <?php dynamic_sidebar('sidebar-blog') ?>
    <?php endif; ?>


</div>