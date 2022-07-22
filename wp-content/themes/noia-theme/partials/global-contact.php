<?php
$leftcontent = get_field( 'form_content_left', 'options');
$rightcontent = get_field( 'form_content_right', 'options');
?>

<div class="global-modal" id="part-1">
	<div class="modal-inner">
		<div class="modal-inner-item modal-inner-item__center">
			<?php echo $leftcontent ?>
			<div class="modal-inner-item--buttons">
				<a href="#part-2" class="btn ajax-featherlight">Stay with us</a>
			</div>
		</div>
		<div class="modal-inner-item modal-inner-item__center">
			<?php echo $rightcontent ?>
			<div class="modal-inner-item--buttons">
				<a href="#part-4" class="btn ajax-featherlight">Tell us about your idea</a>
			</div>
		</div>
	</div>
</div>

<div class="global-modal" id="part-2">
	<div class="modal-inner">
		<a href="#part-1" class="btn-back ajax-featherlight">Back</a>
		<div class="modal-inner-item">
			<div style="display: none"><?php echo do_shortcode('[contact-form-7 title="Stay with Noiascape"]'); ?></div>


			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://noiscape.us11.list-manage.com/subscribe/post?u=0146a544b89e552c5e3c27ffa&amp;id=2073193da4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<h3>Stay with Noiascape</h3>
					<p>Stay with Noiascape from one month to a year.</p>
					<div class="form-fields">
					
						<div class="form-fields--half">
							<label for="mce-FNAME">First name </label>
							<input type="text" value="" name="FNAME" class="" placeholder="First Name" id="mce-FNAME">
						</div>

						<div class="form-fields--half">
							<label for="mce-LNAME">Last name </label>
							<input type="text" value="" name="LNAME" class="" placeholder="Last Name" id="mce-LNAME">
						</div>

						<div class="form-fields--half">
							<label for="mce-EMAIL">Email address  <span class="asterisk">*</span></label>
							<input type="email" value="" name="EMAIL" class="required email" placeholder="Email"  id="mce-EMAIL">
						</div>

						<div class="form-fields--half">
							<label for="mce-PHONE">Phone number </label>
							<input type="text" name="PHONE" class="" value="" placeholder="Phone" id="mce-PHONE">
						</div>

						<div class="form-fields--half">
							<label for="mce-MMERGE6">Job role </label>
							<input type="text" value="" name="MMERGE6" class="" placeholder="Job role" id="mce-MMERGE6">
						</div>

						<div class="form-fields--half">
							<label for="mce-MMERGE9">Property preference</label>
							<select name="MMERGE9" class="" id="mce-MMERGE9">
								<option value="">Property preference</option>
								<option value="High Street House">High Street House</option>
								<option value="Garden House">Garden House</option>
								<option value="Picture House">Picture House</option>
								<option value="Hidden House">Hidden House</option>
								<option value="Light House">Light House</option>
							</select>
						</div>

						<div class="form-fields--half">
							<label for="mce-MMERGE7">Property type </label>
							<select name="MMERGE7" class="" id="mce-MMERGE7">
								<option value="">Property type</option>
								<option value="Studio">Studio</option>
								<option value="Appartment">Appartment</option>
								<option value="House">House</option>
							</select>
						</div>

						<div class="form-fields--half">
							<label for="mce-MMERGE3">Move in date </label>
							<input type="text" value="" name="MMERGE3" placeholder="Move in date" class="" id="mce-MMERGE3">
						</div>

						<div class="form-fields--half">
							<label for="mce-MMERGE10">Social account </label>
							<input type="text" value="" name="MMERGE10" placeholder="Social account" class="" id="mce-MMERGE10">
						</div>

						<div class="form-fields--half">
							<label for="mce-MMERGE11">Require a video tour? </label>
							<input type="text" value="" name="MMERGE11" placeholder="Require a video tour?" class="" id="mce-MMERGE11">
						</div>
					</div>

					<div id="mce-responses" class="clear foot">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0146a544b89e552c5e3c27ffa_2073193da4" tabindex="-1" value=""></div>
						<div class="optionalParent">
							<div class="clear foot">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">
							</div>
						</div>
					</div>

				</form>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='dropdown';fnames[5]='MMERGE5';ftypes[5]='dropdown';fnames[8]='MMERGE8';ftypes[8]='dropdown';fnames[9]='MMERGE9';ftypes[9]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			</div>

		</div>
	</div>	
</div>


<div class="global-modal" id="part-4">
	<div class="modal-inner">
		<a href="#part-1" class="btn-back ajax-featherlight">Back</a>
		<div class="modal-inner-item">
			<div style="display: none"><?php echo do_shortcode('[contact-form-7 title="Collaborate with Noiascape"]'); ?></div>

			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://noiscape.us11.list-manage.com/subscribe/post?u=0146a544b89e552c5e3c27ffa&amp;id=2073193da4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<h3>Collaborate with Noiascape</h3>
				<p>Stay with Noiascape from one month to a year.</p>
			
					<div class="form-fields">
						<div class="form-fields--half">
							<label for="mce-FNAME">First name </label>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First name" >
						</div>
						<div class="form-fields--half">
							<label for="mce-LNAME">Last name </label>
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last name" >
						</div>
						<div class="form-fields--half">
							<label for="mce-EMAIL">Your email address  <span class="asterisk">*</span></label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your email address" >
						</div>
						<div class="form-fields--half">
							<label for="mce-PHONE">Tel </label>
							<input type="text" name="PHONE" class="" value="" id="mce-PHONE" placeholder="Tel" >
						</div>
						<div class="form-fields--half">
							<label for="mce-WHAT">What you do </label>
							<input type="text" value="" name="WHAT" class="" id="mce-WHAT" placeholder="What do you do" >
						</div>
						<div class="form-fields--half">
							<label for="mce-HOW">Tell us how you would use the Noiascape Shared Space </label>
							<input type="text" value="" name="HOW" class="" id="mce-HOW" placeholder="Tell us how you would use the Noiascape Shared Space" >
						</div>
					</div>
					<div id="mce-responses" class="clear foot">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0146a544b89e552c5e3c27ffa_2073193da4" tabindex="-1" value=""></div>
						<div class="optionalParent">
							<div class="clear foot">
								<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">
							</div>
						</div>
					</div>
				
				</form>
			
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='PHONE';ftypes[4]='phone';fnames[13]='WHAT';ftypes[13]='text';fnames[12]='HOW';ftypes[12]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			</div>
			<!--End mc_embed_signup-->

			<!-- <div class="modal-inner-item--buttons">
				<a href="#part-5" class="btn ajax-featherlight">Submit</a>
			</div> -->
		</div>
	</div>
</div>


<div class="global-modal" id="part-5">
	<div class="modal-inner">
		<a href="#part-1" class="btn-back ajax-featherlight">Start again</a>
		<div class="modal-inner-item">
			<p>Enquiry successfully submitted</p>
			<h3>Thanks for contacting us.<br />
			<span>We'll get back to you within 24 hours</span></h3>

			<div class="modal-inner-item--buttons">
				<button class="featherlight-close btn btn--primary" aria-label="Close">Back to Noiascape</button>
			</div>
		</div>
	</div>
</div>
