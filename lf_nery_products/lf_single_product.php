<?php
get_header();
?>
<div class="single_wrapper" id="lf_single_wrapper">
	<a class="fancyclose" href="javascript:parent.jQuery.fancybox.close();"><img src="http://paesnery.marcoaacoliveira.com.br/wp-content/uploads/2018/02/cross-1.png"></a>
	<?php
	$args = array(
	'post_type' => 'p_products', // it's default, you can skip it
	'posts_per_page' => '1',
	'order_by' => 'date', // it's also default
	'order' => 'DESC'
	);
	$query = new WP_Query( $args );
	?>
	<?php while( have_posts() ) : the_post();?>
	<div class="single_slider">
		<?php if (get_field('product_image_one')): ?>
			<img src="<?php the_field('product_image_one'); ?>" />
		<?php endif ?>
		<?php if (get_field('product_image_two')): ?>
			<img src="<?php the_field('product_image_two'); ?>" />
		<?php endif ?>
		<?php if (get_field('product_image_three')): ?>
			<img src="<?php the_field('product_image_three'); ?>" />
		<?php endif ?>
		<?php if (get_field('product_image_four')): ?>
			<img src="<?php the_field('product_image_four'); ?>" />
		<?php endif ?>
		<?php if (get_field('product_image_five')): ?>
			<img src="<?php the_field('product_image_five'); ?>" />
		<?php endif ?>
		<?php if (get_field('product_image_six')): ?>
			<img src="<?php the_field('product_image_six'); ?>" />
		<?php endif ?>
	</div>
	<div class="single_content">
		<h2 class="single_product_title"><?php the_title();?></h2>
		<div class="single_main_content">
			<?php the_content();?>
		</div>
		<div class="lf_social">
<?php 
echo "<div class='share_left floatingicon'>";
echo "compartilhe no ";
echo "</div>";

echo "<div class='share_right floatingicon'>";
if ( function_exists( 'sharing_display' ) ) {
    sharing_display( '', true );
}
 
if ( class_exists( 'Jetpack_Likes' ) ) {
    $custom_likes = new Jetpack_Likes;
    echo $custom_likes->post_likes( '' );
}
echo "</div>";
 ?>

		</div> 
	</div>
	<?php endwhile;?>
</div>
<?php
get_footer();
?>