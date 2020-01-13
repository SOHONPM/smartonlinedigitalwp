<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title"><?php echo get_sub_field('title') ?></h1>
                <p class="subtitle"><?php echo get_sub_field('subtitle') ?></p>
                <div class="content">
                    <?php echo get_sub_field('content') ?>
                </div>
                <div class="wrapper">
                    <?php
                    while (have_rows('button')) : the_row();
                        ?>
                        <button class="hero-button" style="background:<?php echo get_sub_field('color') ?>;">
                            <a href="<?php echo get_sub_field('button_link') ?>"><?php echo get_sub_field('button_label') ?> </a>
                        </button>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <img src="<?php echo get_sub_field('image') ?>">
                </div>
            </div>
        </div>
</section>