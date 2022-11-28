<?php

if ( get_field( 'blocks' ) ) :

    while ( has_sub_field( 'blocks', get_the_ID() ) ) :


        if ( get_row_layout() == 'home_banner' ):
            include( get_stylesheet_directory() . '/acf-blocks/home-banner.php' );
        endif;

        if ( get_row_layout() == 'footer_call_to_action' ):
            include( get_stylesheet_directory() . '/acf-blocks/footer-cta.php' );
        endif;

        if ( get_row_layout() == 'double_images' ):
            include( get_stylesheet_directory() . '/acf-blocks/double-imgs.php' );
        endif;

        if ( get_row_layout() == 'services_tiles' ):
            include( get_stylesheet_directory() . '/acf-blocks/services-tiles.php' );
        endif;

    endwhile;
endif;
?>