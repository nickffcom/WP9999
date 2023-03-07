<?php get_header(); ?>
            <h5>Đây là Page</h5>
			<?php  if(is_front_page()){ ?>
                <?php get_template_part('index'); } ?>
            <?php if(!is_front_page()){ ?>
                <div id="content page-category">
                    <div class="product-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
                                        <div class="category-page-content">
                                            
                                                <?php  if(have_posts()) : ?>
                                                    <?php  while(have_posts()) : the_post();?>

                                                    <h1><?php  the_title() ?></h1>
                                                    <div class="single-content">
                                                        <?php the_content(); ?>
                                                    </div>
                                                    </div>
                                                    <?php endwhile; ?>			
                                                <?php endif; ?>
                                        </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
                                    <div class="sidebar">
                                    <?php  get_sidebar(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div >
            <?php }; ?>
            <?php  
            global $post;
            $post_slug = $post->post_name;
            echo 111111;
            print_r($post_slug);
            ?>
            <?php get_template_part('pages/page',$post_slug)  ?>
<?php get_footer(); ?>	