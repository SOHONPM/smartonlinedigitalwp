<section class="feature-section">
    <div class="container">
        <h2 class="main-title"><?php echo get_sub_field('title') ?></h2>
        <p class="main-content"><?php echo get_sub_field('content') ?></p>
        <div class="row">
            <?php
            $count = count(get_sub_field('features'));
            $boxed = get_sub_field('boxed');
            while (have_rows('features')) : the_row();
                ?>
                <div class="col-md-<?php echo 12 / $count ?>">
                    <div class="wrapper <?php echo $boxed ? 'boxed' : '' ?>">
                        <div class="box">
                            <?php
                                if (get_sub_field('icon')) :
                                    ?>
                                <div class="icon-wrapper">
                                    <img class="icon" src="<?php echo get_sub_field('icon'); ?>">
                                </div>
                            <?php
                                endif;
                                ?>
                            <h5 class="title"><?php echo get_sub_field('title'); ?></h5>
                            <p class="content"><?php echo get_sub_field('content'); ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            ?>
        </div>
</section>