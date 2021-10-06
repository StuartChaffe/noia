<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo get_template_directory_uri(); ?>/src/icons/icon-close.svg" alt="Close ask" /></button>
			<div class="modal-body">
				<div id="smartwizard">
					<ul style="display: none;">
						<li><a href="#step-1">1</a></li>
						<li><a href="#step-2">2</a></li>
						<li><a href="#step-3">3</a></li>
						<li><a href="#step-4">4</a></li>
						<li><a href="#step-5">5</a></li>
					</ul>
					<div>
						<div id="step-1">
							<div class="modal-inner">
								<div class="modal-inner-item">
									<h3>Stay with <br />Noiascape</h3>
									<p>Tell us about you, where you want to stay, what you need, or just ask a general question.</p>
									<div class="modal-inner-item--buttons">
										<a href="#step-2" class="btn">Stay with us</a> <a href="#step-3" class="btn">Live with us</a>
									</div>
								</div>
								<div class="modal-inner-item">
									<h3>Collaborate with <br />Noiascape</h3>
									<p>Use our social spaces as a way to find your audience<br /> and contribute to your local culture.</p>
									<div class="modal-inner-item--buttons">
										<a href="#step-4" class="btn">Tell us about your idea</a>
									</div>
								</div>
							</div>
						</div>
						<div id="step-2">
							<a href="#step-1" class="btn-back">Back</a>

								<div class="modal-inner-item">
									<h3>Stay with Noiascape</h3>
									<?php echo do_shortcode('[contact-form-7 id="683" title="Stay with Noiascape"]'); ?>
								</div>
					
						</div>
						<div id="step-3">
							<a href="#step-1" class="btn-back">Back</a>

								<div class="modal-inner-item">
									<h3>Live with <br />Noiascape</h3>
									<p>Tell us about you, where you want to stay, what you<br /> need, or just ask a general question.</p>

									3RD PARTY FORM 
									<div class="modal-inner-item--buttons">
										<a href="#step-5" class="btn">Submit</a>
									</div>
								</div>
						
						</div>
						<div id="step-4">
							<a href="#step-1" class="btn-back">Back</a>

							<div class="modal-inner-item">
								<h3>Collaborate with <br />Noiascape</h3>
								<p>Use our social spaces as a way to find your audience<br /> and contribute to your local culture.</p>

								FORM 
								<div class="modal-inner-item--buttons">
									<a href="#step-5" class="btn">Submit</a>
								</div>
							</div>

						</div>

						<div id="step-5">
							<div class="modal-inner-item">
								<p>Enquiry successfully submitted</p>
								<h3>Thanks for contacting us.<br />
								<span>We’ll get back to you within 24 hours</span></h3>

								<div class="modal-inner-item--buttons">
									<button type="button" class="btn btn--primary" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">Back to Noiascape</span> </button>
									<a href="#step-1" class="btn">Start again</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>