<section class="text_image-section <?php echo get_sub_field('full_width') ? 'full-width' : 'non-full-width' ?>" style="background:<?php echo get_sub_field('background') ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wrapper content">
                    <p class="text_above_title"><?php echo get_sub_field('text_above_title') ?></p>
                    <h3><?php echo get_sub_field('title') ?></h3>
                    <p class="content"><?php echo get_sub_field('content') ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-wrapper">
                    <img class="side-image" src="<?php echo get_sub_field('image') ?>">
                </div>
            </div>
        </div>
    </div>
</section>