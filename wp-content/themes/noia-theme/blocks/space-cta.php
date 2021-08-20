<?php
/**
* The template used for displaying a space cta block.
*/
$bkgimage = get_field( 'spacecta-background-image');
$content = get_field( 'spacecta-content');
?>

<section class="space-cta" <?php if ( $bkgimage ) { ?>style="background-image: url(<?php echo $bkgimage['url']; ?>)"<?php } ?>>
	<div class="space-cta--content">
		<h3>Interested in living at High Street House? Just ASK</h3>
		<p>We currently have availabilty for upcoming long and short stay memberships</p>

		<a href="#step-2" class="btn" data-toggle="modal" data-target="#contact">Long stay - Enquiries</a> <a href="#step-3" class="btn" data-toggle="modal" data-target="#contact">Short stay - Availability</a>
	</div>
</section>