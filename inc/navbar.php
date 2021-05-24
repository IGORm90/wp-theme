<?php
        add_filter( 'nav_menu_css_class', function($classes, $item, $args, $depth){
            if($args->theme_location === 'sidebar'){
                $classes = ['nav-item'];
            }
            return $classes;
        }, 10, 4 );
        
        add_filter( 'nav_menu_link_attributes', function($atts, $item, $args, $depth){
            if($args->theme_location === 'sidebar'){
                if(!isset($atts['class'])){
                    $atts['class'] = '';
                }
                $atts['class'] = ' nav-link';
    
                if($atts['aria-current'] === 'page'){
                    $atts['class'] .= ' active';
                }
    
                $atts['class'] = trim($atts['class']);
            }
            
            return $atts;
        }, 10, 4 );
