<?php require_once('config.php'); ?>

		<!-- Google Map -->
		<div id="googleMap"></div>
		<!-- /Google Map -->
		
		<div class="section-background-color section-background-color-2">
		
			<div class="main">

				<!-- Header -->
				<h2 class="underline">
					<span>Contact Us</span>
					<span></span>
				</h2>
				<!-- /Header -->

				<!-- Layout 50x50% -->
				<div class="layout-p-50x50 clear-fix animate-layout">

					<!-- Left column -->
					<div class="column-left">
						
						<p class="subheader padding-bottom-30">We provides a wide array of specialised advisory and strategic services for our clients.</p>
					
						<!-- Contact form -->
						<form name="contact-form" id="contact-form" action="#" method="post" class="contact-form clear-fix">

							<div class="clear-fix">

								<ul class="list-0 clear-fix">
									<!-- Name -->
									<li>
										<div class="block field-box">
											<label for="contact-form-name"><?php echo CONTACT_FORM_LABEL_DATA_NAME; ?></label>
											<input type="text" name="contact-form-name" id="contact-form-name" value=""/>
										</div>
									</li>
									<!-- /Name -->
									<!-- E-mail address -->
									<li>
										<div class="block field-box">
											<label for="contact-form-mail"><?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?></label>
											<input type="text" name="contact-form-mail" id="contact-form-mail" value=""/>
										</div>
									</li>
									<!-- /E-mail address -->
									<!-- Website URL -->
									<li>
										<div class="block field-box">
											<label for="contact-form-website"><?php echo CONTACT_FORM_LABEL_DATA_WEBSITE; ?></label>
											<input type="text" name="contact-form-website" id="contact-form-website" value=""/>
										</div>
									</li>	
									<!-- /Website URL -->
									<!-- Message -->
									<li>
										<div class="block field-box">
											<label for="contact-form-message"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></label>
											<textarea name="contact-form-message" id="contact-form-message" rows="1" cols="1"></textarea>	
										</div>
									</li>	
									<!-- /Message -->
									<!-- Submit button -->
									<li>
										<div class="block field-box field-box-button">
											<input type="submit" id="contact-form-submit" name="contact-form-submit" class="button" value="<?php echo CONTACT_FORM_LABEL_DATA_SUBMIT; ?>"/>
										</div>
									</li>
									<!-- /Submit button -->
								</ul>

							</div>

						</form>		
						<!-- /Contact form -->
					
					</div>
					<!-- /Left column -->

					<!-- Right column -->
					<div class="column-right">
						
						<p class="subheader padding-bottom-30">Atrium has advised on hundreds of commercial and personal transactions since 1986.</p>
						
						<!-- Contact details -->
						<ul class="company-info feature-list feature-list-icon-small feature-list-icon-left feature-list-style-3">
							<li>
								<span class="icon icon-mappointer"></span>
								<p><strong>Atrium Ltd.</strong></p>
								<p>33 Farlane Street, Kelior East</p>
								<p>Victoria 33</p>
								<p>Australia</p>
							</li>
							<li>
								<span class="icon icon-mobile"></span>
								<p>Phone: 1-800-643-4300</p>
								<p>Fax: 1-800-112-2560</p>
							</li>						
						</ul>
						<!-- /Contact details -->

						<!-- Social icon list -->
						<ul class="social-list social-list-style-2 clear-fix margin-top-50">
							<li><a href="#" class="social-list-facebook"></a></li>
							<li><a href="#" class="social-list-googleplus"></a></li>
							<li><a href="#" class="social-list-twitter"></a></li>
						</ul>
						<!-- /Social icon list -->
						
					</div>
					<!-- /Right column -->

				</div>
				<!-- /Layout 50x50% -->

			</div>
			
		</div>