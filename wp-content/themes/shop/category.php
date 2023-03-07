 <?php 
get_header(); ?>
			 <h5>Đây là Category</h5>
			<div id="content page-category">
				<div class="product-box">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
									<div class="category-page-content">
										<h1><?php  single_cat_title() ?></h1>
										
											<?php  if(have_posts()) : ?>
												<?php  while(have_posts()) : the_post();?>
												<div class="list-new">
													<a href="	<?php  the_permalink() ?>">
														<?php  the_post_thumbnail('full') ?>
													</a>
													<h4>
														<a href="	<?php  the_permalink() ?>">
															<?php  the_title() ?>
														</a>
													</h4>
													<?php the_excerpt() ?>
													<a href="<?php  the_permalink() ?>"> Xem chi tiết</a>
												</div>
												<?php endwhile; ?>			
											<?php endif; ?>
										 <?php 
											if(paginate_links() != ''){
										 ?>
										 	<?php  global $wp_query;
													      $big = 9999999;		
											?>
											<?php echo paginate_links([
												'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
												'format'=>'?paged=%#%',
												'prev_text'=>__("<< Mới Hơn"),
												'next_text'=>__("Tiếp Theo >>"),
												'current'=>max(1,get_query_var('paged')),
												'total'=>$wp_query->max_num_pages
											])  ?>
										 <?php } ?>
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