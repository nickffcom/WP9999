<?php 
get_header(); ?>
			 <h5>Đây là Single</h5>
			<div id="content page-category">
				<div class="product-box">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
									<div class="category-page-content">
                                            <!-- <?php IN_RA($wp) ?> -->
											<?php  if(have_posts()) : ?>
                                                <?php  setpostview(get_the_ID())  ?>
												<?php  while(have_posts()) : the_post();?>

                                                <h1><?php  the_title() ?></h1>
                                                <div class="meta-single">
                                                    <span>Tác giá: <?php the_author()  ?></span>
                                                    <span>Chuyên mục: <?php the_category(',')  ?></span>
                                                    <span>Lượt xem: <?php echo getpostviews(get_the_ID())  ?></span>
                                                </div>
                                                <div class="single-content">
                                                    <?php the_content(); ?>
                                                </div>
                                                <div class="tag-single">
                                                    <?php the_tags(',') ?>
                                                </div>
                                                <!-- <div class="comment-facebook">
                                                     <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="" data-numposts="5"></div>
                                                </div> -->
                                                <div class="related-post">
                                                <?php
                                                    Hien_thi_bai_viet_lien_quan_category($post);
                                                ?>
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
<?php get_footer(); ?>	