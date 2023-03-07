<?php 
get_header(); ?>
			 <h5>Đây là Index</h5>
			<div id="content">
				<div class="container">
					<div class="slider">
						<?php get_template_part('slider');  ?>
					</div>
				</div>
				<div class="product-box">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
								<div class="sidebar">
								<?php  get_sidebar(); ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
								<div class="product-section">
									<h2 class="title-product">
										<a href="#" class="title">Sản phẩm nổi bật :D</a>
										<div class="bar-menu"><i class="fa fa-bars"></i></div>
										<div class="list-child">
											<ul>
												<?php 
												$args = [
													'type'=>'product',
													'taxonomy'=>'product_cat',
													// 'child_of'=>0,
													// 'parent'=>0,

												];
												// $categories = get_categories($args);
												$categories = get_terms(array(
													'taxonomy' => 'product_cat',
													'hide_empty' => false,
													'object_type' => array('product'),
													'child_of'=>0,
													'hide_empty'=>0,
													'parent'=>0,
													'number'=>5,
												  ));
												foreach($categories as $cate){ ?>
												<li>
													<a href="<?php echo get_term_link($cate->slug,'product_cat') ?>"><?php echo $cate->name ?></a>
												</li>
												<?php } ?>
											</ul>
										</div>
										<div class="clear"></div>
									</h2>
									<div class="content-product-box">
										<div class="row query-nek">
										<?php
												$tax_query[] = array(
													'taxonomy' => 'product_visibility',
													'field'    => 'name',
													'terms'    => 'featured',
													'operator' => 'IN',
												);
											?>
											<?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
											<?php $getposts = new WP_query( $args);?>
											<?php global $wp_query; $wp_query->in_the_loop = true; ?>
											<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
												<?php get_template_part('content/item-product') ?>
											<?php endwhile; wp_reset_postdata(); ?>
										</div>
									</div>
								</div>
								<a href="#"><img src="https://phongtrodn.com/wp-content/uploads/2020/02/huykira.png" alt=""></a>
								<br>
								<br>
								<div class="product-section">
									<h2 class="title-product">
										<?php $cate = get_term_by('slug','dien-thoai','product_cat') ?>
										
										<a href="<?php echo get_term_link($cate->slug,'product_cat') ?>" class="title">Điện thoại nè</a>
										<div class="bar-menu"><i class="fa fa-bars"></i></div>
										<div class="list-child">
											
											<ul>

											<?php
											$categories = get_terms(array(
														'taxonomy' => 'product_cat',
														'hide_empty' => false,
														'object_type' => array('product'),
														'child_of'=>0,
														'hide_empty'=>0,
														'parent'=>$cate->term_id,
														'number'=>5,
													));
													 
													foreach($categories as $category){ ?>
														<li>
															<a href="<?php echo get_term_link($category->slug,'product_cat') ?>"><?php echo $category->name ?></a>
														</li>
													<?php } ?>
	
											</ul>
										</div>
										<div class="clear"></div>
									</h2>
									<div class="content-product-box cuoicung">

										<div class="row">
											<?php 
											$args = array( 
												'post_type' => 'product',
												'posts_per_page' => 10,
												// 'ignore_sticky_posts' => 1,
												'product_cat'=>$cate->slug,
												);
											?>
											<?php $getposts = new WP_query( $args);?>
											
											<?php global $wp_query; $wp_query->in_the_loop = true; ?>
											<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
												<?php get_template_part('content/item-product') ?>
											<?php endwhile; wp_reset_postdata(); ?>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>	