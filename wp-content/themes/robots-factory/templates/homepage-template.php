<?php 
    // Template Name: Homepage
?>

<?php get_header(); ?>

<?php 
    $robots_homepage_post_per_page = get_option( 'robots_homepage_post_per_page' );

    // ACF
    $test_field = get_field( 'test_field', get_the_ID() );
    var_dump( $test_field );
    var_dump( get_post_meta( get_the_ID(), 'test_field', true ) );

    if ( empty($robots_homepage_post_per_page) ) {
        $robots_homepage_post_per_page = 3;
    }

    $robots_args = array(
        'post_type'     => 'robot',
        'post_status'   => 'publish',
        'post_per_page' => $robots_homepage_post_per_page,
        'meta_query'    => array(
            array(
                'key'     => 'featured',
                'value'   => 1,
                'compare' => '=',
            ),
        )
    );

$robots_query = new WP_Query( $robots_args );

?>

    <!-- Product -->
        <section id="product" class="product">
            <div class="container section-bg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box">
                            <h2 class="title">Welcome to our <span>Robot Factory</span></h2>
                            <a href="#" class="btn btn-default btn-robot">view products</a>
                        </div>
                    </div>
                </div>

                <?php if ( $robots_query->have_posts() ) : ?>
                    <div class="row">
                    
                        <?php while( $robots_query->have_posts() ) : $robots_query->the_post(); ?>
                            <div class="col-sm-4">
                                <div class="porduct-box">
                                    <img class="img-responsive" src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/product-1.jpg" alt="product">
                                    <h3 class="product-title"><?php the_title(); ?></h3>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="classic-title">
                            <div class="stiker">
                                <h3 class="inner-stiker">Why we are best</h3>
                            </div>
                            <h3 class="outer-stiker">We Received best factory award in the 1998</h3>
                            <div class="incline-div"></div>
                        </div>
                    </div>
                    <div class="boxed">
                        <div class="col-sm-4">
                            <p class="p-large">
                                Sed lobortis volutpat imperdiet. faci.Fusce nec arcu ac neque tincidunt rutru tristique feugiat purus, id semper nisl tin vitae.Roin lobortis porta mattis. Mauris tincidunurus nec viverra mattis. Nunc convallis massa at eleifend blandit. Donec interdum.
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                Ead lobortis volutpat imperdiet. Nulla faci.Fusce nec arcu ac neque tincidunt rutrum. Pro tristique feugiat purus, id semper nisl tincidunt vitae.Roin lobortis porta mattis. Mauris tincidunt purus nec viverra mattis. Nunc convallis massa at eleifend blandit. Donec interdum, sem lacinia dignissime varius, nulla eros consectetur mauris. 
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <p>
                                Sed lobortis volutpat imperdiet. Nulla faci.Fusce nec arcu ac neque tincidunt rutrum. Pro tristique feugiat purus, id semper nisl tincidunt vitae.Roin lobortis porta mattis. Mauris tincidunt purus nec viverra mattis. Nunc convallis massa at eleifend blandit. Donec interdum, sem lacinia dignissime varius, nulla eros consectetur mauris. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- History -->
        <section id="history" class="history">
            <div class="container section-bg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box">
                            <p>Since 1990</p>
                            <h2 class="title mt0">Discover our history</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="boxed">
                        <div class="col-sm-10 col-sm-offset-1">
                            <p>
                                Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummynibh euismod tincidunt ut laoree Dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummynibh euismod tincidunt ut laoree Dolore magna aliquam erat .
                            </p>
                        </div>
                        <div class="col-sm-12">
                            <img class="img-responsive" src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/history.png" alt="history">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Partner -->
        <section id="partner" class="partner">
            <div class="container section-bg">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box">
                            <p>Our media</p>
                            <h2 class="title mt0">Partner</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="boxed">
                       <div class="col-sm-12">
                           <div id="partner-slider" class="owl-carousel">
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/6.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/7.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/8.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/9.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/6.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/7.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/8.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/9.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/6.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/7.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/8.png" alt="partner">
                                </div>
                                <div class="item">
                                    <img src="<?php echo ROBOTS_FACTORY_ASSETS_URL; ?>images/9.png" alt="partner">
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>