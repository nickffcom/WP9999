<div class="category-box">
										<h3>Danh mục sản phẩm</h3>
										<div class="content-cat">
											<ul>
											<?php 
												$categories = get_terms(array(
													'taxonomy' => 'product_cat',
													'hide_empty' => false,
													'object_type' => array('product'),
													'child_of'=>0,
													'hide_empty'=>0,
													'parent'=>0,
													'number'=>10,
												  ));
												foreach($categories as $cate){ ?>
												<li>
												<i class="fa fa-angle-right"></i><a href="<?php echo get_term_link($cate->slug,'product_cat') ?>"><?php echo $cate->name ?></a>
												</li>
												<?php } ?>
												<li><i class="fa fa-angle-right"></i> <a href="#">Sản phẩm khác</a></li>
											</ul>
										</div>
									</div>
									<div class="widget">
										<h3>
											<a href="http://localhost/HocWP/category/tin-tuc/">
											<i class="fa fa-bars"></i>
											Tin tức
											</a>
										</h3>
										<div class="content-w">
											<ul>

											<?php $args = array( 
												'post_type' => 'post',
												'posts_per_page' => 5,
												'post_status'=>'publish',
												'ignore_sticky_posts' => 1,
												'cat'=>1
											); 
											?>
											<?php $getposts = new WP_query( $args);?>
											<?php global $wp_query; $wp_query->in_the_loop = true; ?>
											<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
												<li>
													<a href="<?php  the_permalink() ?>">
													<!-- <img src="<?php THEM_URL()  ?>/images/news.jpg" alt=""> -->
													<!-- <?php the_post_thumbnail('thumbnail'); ?> -->
													</a>
													<h4><a href="<?php  the_permalink() ?>"><?php the_title() ?></a></h4>
													<div class="clear"></div>
												</li>
											<?php endwhile; wp_reset_postdata(); ?>
												<!-- <li>
													<a href="#"><img src="<?php THEM_URL()  ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php THEM_URL()  ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php THEM_URL()  ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php THEM_URL()  ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li>
												<li>
													<a href="#"><img src="<?php THEM_URL()  ?>/images/news.jpg" alt=""></a>
													<h4><a href="#">Thương hiệu đồng hồ thông minh Sinophy của nước nào?</a></h4>
													<div class="clear"></div>
												</li> -->
											</ul>
										</div>
									</div>
									<div class="widget">
										<h3>
											<i class="fa fa-bars"></i>
											Quảng cáo
										</h3>
										<div class="content-banner">
											<a href="#">
												<img src="<?php THEM_URL()  ?>/images/banner.png" alt="">
											</a>
										</div>
									</div>
									<div class="widget">
										<h3>
											<i class="fa fa-facebook"></i>
											Facebook
										</h3>
										<div class="content-fb">
											<div class="fb-page" data-href="https://www.facebook.com/huykiradotnet/" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
										</div>
									</div>