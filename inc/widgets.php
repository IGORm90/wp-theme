<?php
        add_action('widgets_init', function(){

            register_sidebar([
                'name'          => 'боковая колонка',
                'id'            => 'sidebar-blog',
                'description'   => 'выводится на главной  ',
                'before_widget' => '<div class="p4">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="fst-italic">',
                'after_title'   => '</h4>' 
            ]);
        });