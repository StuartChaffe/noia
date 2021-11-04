<?php
/**
* The template used for displaying a standard content block.
*/
$content = get_field('content');
$share = get_field('content-share');
?>
<div class="container--small content">
    <?php echo $content ?>


    <?php if ( is_single() ) { ?>
        <div class="content--share">
            <p>Share this article</p>
            <div class="addthis_inline_share_toolbox"></div>
        </div>
    <?php } ?>
</div>