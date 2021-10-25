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
			<?php echo do_shortcode('[contact-form-7 title="Stay with Noiascape"]'); ?>
		</div>
	</div>	
</div>


<div class="global-modal" id="part-4">
	<div class="modal-inner">
		<a href="#part-1" class="btn-back ajax-featherlight">Back</a>
		<div class="modal-inner-item">
			<?php echo do_shortcode('[contact-form-7 title="Collaborate with Noiascape"]'); ?>
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
			<span>We’ll get back to you within 24 hours</span></h3>

			<div class="modal-inner-item--buttons">
				<button class="featherlight-close btn btn--primary" aria-label="Close">Back to Noiascape</button>
			</div>
		</div>
	</div>
</div>
