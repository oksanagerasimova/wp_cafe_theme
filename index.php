<?php
    get_header();
?>

    <main class="mainpage">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/bg.png" alt="bg" class="mainpage__bg">
        <div class="container">
           <div class="mainpage__wrapper">
                <h1 class="mainpage__title"><?php the_field('info_title'); ?></h1>
                <h2 class="mainpage__subtitle"><?php the_field('info_subtitle'); ?></h2>   
                <div class="mainpage__txt">
                    <?php the_field('info_descr'); ?>
                </div>
                <button class="btn">Заказать</button>          
           </div>
        </div>
    </main>

    <section class="rolls container">
        <div class="rolls__slider_title">Выгодное предложение</div>
        <div class="rolls__slider">

            <?php 
                // параметры по умолчанию
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'sets',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="rolls__slider_item">
                            <div>
                                <div class="rolls__slider_subtitle"><?php the_title(); ?></div>
                                <div class="rolls__slider_info"><?php the_field('set_descr') ?></div>
                            </div>
                            <div class="rolls__slider_img">
                                <img src="<?php the_field('set_img') ?>" alt="set">
                            </div>
                            <div class="rolls__wrapper">
                                <div class="rolls__price"><?php the_field('set_info') ?></div>
                                <button class="btn rolls__btn">
                                    <a href="<?php echo get_term_link( 20 ); ?>">Заказать</a>
                                </button>
                            </div>
                        </div>
                    <?php
                }

                wp_reset_postdata(); // сброс
            ?>
        </div>
    </section>

    <section class="tabs">
        <div class="container">
            <div class="tabs__wrapper">
                <?php 
                    // параметры по умолчанию
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'tabs',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                        ?>
                            <div class="tabs__wrapper_item">
                                <div class="tabs__wrapper_title"><?php the_title(); ?></div>
                                <div class="tabs__wrapper_txt"><?php the_field('tabs_descr'); ?></div>
                                <div class="tabs__wrapper_img">
                                    <img src="<?php the_field('tabs_img') ?>" alt="pizza">
                                </div>
                                <button class="btn tabs__btn">Выбрать</button>  
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="js/script.js"></script> -->

    <?php 
        wp_footer();
    ?>
</body>
</html>