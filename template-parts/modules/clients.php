<section class="client-section">
    <div class="container">
        <p class="text_above_title"><?php echo get_sub_field('text_above_title') ?></p>
        <h3 class="main-title"><?php echo get_sub_field('title') ?></h3>
        <div class="row">
            <?php
            // check if the flexible content field has rows of data
            if (have_rows('clients')) :

                // loop through the rows of data
                while (have_rows('clients')) : the_row();
                    ?>

                    <div class="col-md-3">
                        <div class="wrapper">
                            <img src="<?php echo get_sub_field('clients') ?>">
                        </div>
                    </div>
            <?php
                endwhile;
            else :
            // no layouts found
            endif;

            ?>
        </div>
    </div>
</section>