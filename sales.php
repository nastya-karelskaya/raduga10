<?php
/*
Template Name: Акции
Template Post Type: page
*/
get_header();
?>

	<!--=============================================
	=            breadcrumb area         =
	=============================================-->

	<?php
	/**
	 * breadcrumbs_parts hook.
	 *
	 * @hooked raduga10_breadcrumbs_chunk - 15
	 *
	 */
	do_action( 'raduga10_breadcrumbs_parts' ); 

	
	?>



	<!--=====  End of breadcrumb area  ======-->

	<?php
		//Screen 1 ACF fields
		$sales_sc1_banners = get_field("sales_sc1_banners");

		//Screen 2 ACF fields
		$sales_sc2_title_form = get_field("sales_sc2_title_form");
		$sales_sc2_subtitle_form = get_field("sales_sc2_subtitle_form");
		?>


<!--=============================================
    =            SALES page content         =
    =============================================-->
    
    <div class="shop-page-content sales mb-40">
			<div class="container">

					<div class="row row-10">

					<?php 
						$sale_counter = 0;
						foreach( $sales_sc1_banners as $sale_banner ) { 
							$sale_counter = $sale_counter + 1;
						
					?>


					<?php if( ($sale_banner['sales_sc1_banner_link'] != '') ||
										($sale_banner['sales_sc1_banner_img'] != '') ||
										($sale_banner['sales_sc1_banner_title'] != '') ||
										($sale_banner['sales_sc1_banner_text'] != '') ): ?>
						<!-- Banner -->
						<div class="col-12 mb-10">
							<div class="single-banner">
							
								<?php if( $sale_banner['sales_sc1_banner_link'] != '' ): ?>
									<a class="single-banner__img" href="<?php echo $sale_banner['sales_sc1_banner_link']; ?>">
																			
										<?php if( $sale_banner['sales_sc1_banner_img'] != '' ): ?>
											<img src="<?php echo $sale_banner['sales_sc1_banner_img']; ?>" alt="Акция <?php echo $sale_counter;?>">
										<?php endif; ?>

										

									</a>
								<?php endif; ?>

								<div class="single-banner__descr">
									<?php if( $sale_banner['sales_sc1_banner_title'] != '' ): ?>
										<h2><?php echo $sale_banner['sales_sc1_banner_title']; ?></h2>
									<?php endif; ?>

									<?php if( $sale_banner['sales_sc1_banner_text'] != '' ): ?>
										<p><?php echo $sale_banner['sales_sc1_banner_text']; ?></p>
									<?php endif; ?>
								</div>

							

							</div>
						</div>
					<?php endif; ?>

					<?php } ?>
						
					
					</div>
			</div>
		</div>
	
	<!--=====  End of SALES page content  ======-->
	


	<div class="border-section mb-50">
		<!-- <div class="container">
			<div class="row justify-content-center">
				<div class="col-12"> -->
					<div class="border-container">

					</div>
				<!-- </div>
			</div>
		</div> -->
	</div>



	<!--=============================================
	=           lead form 
	=============================================-->
	
	<div class="lead-contacts mb-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8">
					<!--=======  contact form content  =======-->
					
					<div class="contact-form-content">
						<h2 class="contact-page-title">
							<?php echo $sales_sc2_title_form; ?>
						</h2>
						<p class="contact-page-subtitle">
							<?php echo $sales_sc2_subtitle_form; ?>
						</p>

						<div class="contact-form">
							<!-- <form id="contact-form" action="assets/php/mail.php" method="post">
								<div class="form-group">
									<label>Ваше имя: <span class="required">*</span></label>
									<input type="text" name="customerName" id="customername" required="">
								</div>
								<div class="form-group">
									<label>Ваш email: <span class="required">*</span></label>
									<input type="email" name="customerEmail" id="customerEmail" required="">
								</div>
								<div class="form-group">
									<label>Ваш телефон:</label>
									<input type="phone" name="contactPhone" id="contactPhone">
								</div>
								<div class="form-group">
									<label>Сообщение:</label>
									<textarea name="contactMessage" id="contactMessage"></textarea>
								</div>
								<div class="form-group mb-0">
									<button type="submit" value="submit" id="submit" class="fl-btn" name="submit">Отправить</button>
									<span class="contact-form__caption">
										Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="#">"Политикой конфиденциальности"</a>
									</span>
								</div>
							</form> -->
							<?php echo do_shortcode('[contact-form-7 id="182" title="Заявка на главной"]'); ?>
						</div>
						<!-- <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p> -->
					</div>
					
					<!--=======  End of contact form content =======-->
				</div>
			</div>
		</div>
	</div>



<?php 
get_footer(); 