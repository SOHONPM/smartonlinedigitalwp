  <!-- News -->
  <section class="blog-area section-padding module" style="background:url(<?php echo get_sub_field('background') ?>)">
      <div class="container">
          <?php if (get_sub_field('heading')) : ?>
              <div class="sec-title">
                  <h2><?php the_sub_field('heading'); ?></h2>
              </div>
          <?php endif; ?>
          <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
              <div class="list-block row">

                  <?php while ($query->have_posts()) :  $query->the_post(); ?>
                      <div class="col-lg-4">
                          <!-- Single partner -->
                          <div class="single-blog">
                              <figure class="single-blog__image">
                                  <?php the_post_thumbnail('blog-thumbnail',  ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']) ?>
                              </figure>
                              <div class="single-blog__info">
                                  <h3><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h3>
                                  <span><?php echo get_the_date('F j Y') ?></span>
                                  <p><?php the_content() ?></p>
                              </div>
                          </div>
                          <!-- ./Single partner -->
                      </div>
                  <?php endwhile; ?>

              </div>
          <?php endif;
            wp_reset_postdata();
            ?>
      </div>
  </section>
  <!-- ./News -->