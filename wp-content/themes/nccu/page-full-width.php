 <?php 
  /* Template Name: Page Full width */
 ?>
 <?php 
get_header(); ?>
			<h5> Đây là page full width</h5>
			<div id="content page-category">
				<div class="product-box">
					<div class="container">
						<div class="row">
							<div class="col-12">
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
						
						</div>
					</div>
				</div>
											</div >
<?php get_footer(); ?>	