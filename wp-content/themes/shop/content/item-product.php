
<?php global $product; ?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
														<div class="item-product">
															<div class="thumb">
																<a href="<?php the_permalink(); ?>">
																<?php echo get_the_post_thumbnail(get_the_ID(), 'full', array( 'class' =>'thumnail','style'=>'height:150px;object-fit:cover;') ); ?>
																</a>
																<span class="sale">Giảm <br><?php echo  ($product->get_regular_price() / $product->get_sale_price()) *100 ?> </span>
																<div class="action">
																	<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
																	<a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
																	<div class="clear"></div>
																</div>
															</div>
															<div class="info-product">
																<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
																<div class="price">
																	<!-- <span class="price-current">4.790.000₫</span>
																	<span class="price-old">4.790.000₫</span> -->
																	<?php echo $product->get_price_html(); ?>
																</div>
																<a href="<?php the_permalink(); ?>" class="view-more">Xem chi tiết</a>
															</div>
														</div>
												</div>