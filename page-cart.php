<?php
/*
Template Name: Корзина
*/
?>

<?php
    get_header();
?>

<div class="container">
    <?php echo do_shortcode( '[woocommerce_cart]' ); ?>
</div>


<?php
    get_footer();
?>