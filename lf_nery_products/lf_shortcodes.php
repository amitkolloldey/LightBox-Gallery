<?php
// Add Shortcode
function lf_paesnery_products_bolos( $atts) {

    // Attributes
    $params = wp_parse_args ( $attr, 
        array(
            'slug' => 'bolos'
        )
   );
ob_start();
?>
    <div class="tax_wrap">
        <?php
        $args = array(
            'post_type' => 'p_products', // it's default, you can skip it
            'posts_per_page' => '-1',
            'order_by' => 'date', // it's also default
            'order' => 'DESC', // it's also default
            'tax_query' => array(
                array(
                    'taxonomy' => 'lf_products_categories',
                    'field' => 'slug',
                    'terms' => array ($params['slug'])
                )
            )
        );
        $query = new WP_Query( $args );
        ?>
        <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <div class="single_product">
            <a data-fancybox data-type="iframe" data-src="<?php the_permalink();?>" href="javascript:;">
                <?php the_post_thumbnail();?>
            </a>
            
             <h2 class="single_title"><?php the_title(); ?></h2>
             <a class="lf_con" data-fancybox data-type="iframe" data-src="<?php the_permalink();?>" href="javascript:;">CONHEÇA</a>
        </div>
        <?php
        endwhile;
        ?>
    </div>
   <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}
add_shortcode( 'paesnery_products_bolos', 'lf_paesnery_products_bolos' );

// Add Shortcode
function lf_paesnery_products_paes( $atts) {

    // Attributes
    $params = wp_parse_args ( $attr, 
        array(
            'slug' => 'paes'
        )
   );
ob_start();
?>
    <div class="tax_wrap">
        <?php
        $args = array(
            'post_type' => 'p_products', // it's default, you can skip it
            'posts_per_page' => '-1',
            'order_by' => 'date', // it's also default
            'order' => 'DESC', // it's also default
            'tax_query' => array(
                array(
                    'taxonomy' => 'lf_products_categories',
                    'field' => 'slug',
                    'terms' => array ($params['slug'])
                )
            )
        );
        $query = new WP_Query( $args );
        ?>
        <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <div class="single_product">
            <a data-fancybox data-type="iframe" data-src="<?php the_permalink();?>" href="javascript:;">
                <?php the_post_thumbnail();?>
            </a>
            
             <h2 class="single_title"><?php the_title(); ?></h2>
             <a class="lf_con" data-fancybox data-type="iframe" data-src="<?php the_permalink();?>" href="javascript:;">CONHEÇA</a>
        </div>
        <?php
        endwhile;
        ?>
    </div>
   <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}
add_shortcode( 'paesnery_products_paes', 'lf_paesnery_products_paes' );


// Add Shortcode
function lf_paesnery_products_pizza( $atts) {

    // Attributes
    $params = wp_parse_args ( $attr, 
        array(
            'slug' => 'pizzas'
        )
   );
ob_start();
?>
    <div class="tax_wrap">
        <?php
        $args = array(
            'post_type' => 'p_products', // it's default, you can skip it
            'posts_per_page' => '-1',
            'order_by' => 'date', // it's also default
            'order' => 'DESC', // it's also default
            'tax_query' => array(
                array(
                    'taxonomy' => 'lf_products_categories',
                    'field' => 'slug',
                    'terms' => array ($params['slug'])
                )
            )
        );
        $query = new WP_Query( $args );
        ?>
        <?php while( $query->have_posts() ) : $query->the_post(); ?>
        <div class="single_product">
            <a data-fancybox data-type="iframe" data-src="<?php the_permalink();?>" href="javascript:;">
                <?php the_post_thumbnail();?>
            </a>
            
             <h2 class="single_title"><?php the_title(); ?></h2>
             <a class="lf_con" data-fancybox data-type="iframe" data-src="<?php the_permalink();?>" href="javascript:;">CONHEÇA</a>
        </div>
        <?php
        endwhile;
        ?>
    </div>
   <?php
    $output = ob_get_contents();
    ob_get_clean();
    return $output;
}
add_shortcode( 'paesnery_products_pizza', 'lf_paesnery_products_pizza' );