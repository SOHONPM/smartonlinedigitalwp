<?php

/**
 * Footer Template
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 */


// Exit if accessed directly.
if (!defined('ABSPATH')) {
  exit;
} ?>

<footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">

  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="row">
          <div class="col-md-12">
            <!-- Site-logo -->
            <div class="site-logo">
              <!-- <a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a> -->
              <h3 class="footer-logo">Smart Online Digital</h3>
            </div>
            <!-- ./Site-logo -->
            <!-- Footer About -->
            <?php if (is_active_sidebar('footer-about')) : ?>
              <div class="widget-area widget-about">
                <?php dynamic_sidebar('footer-about')  ?>
              </div>
            <?php endif; ?>
            <?php
            wp_nav_menu(array(
              'depth'           => 1,
              'theme_location' => 'social',
              'menu_class'    => 'social-links',
              'container'       => false,
              'container_class' => false,
              'container_id'    => false,
              'walker'          => new WP_Bootstrap_Navwalker(),
            ));
            ?>
            <!-- ./Footer About -->
          </div>
        </div>

      </div>
      <div class="col-md-7">

        <div class="row">
          <div class="col-md-3">
            <!-- Footer Main Menu -->
            <?php if (is_active_sidebar('footer-menu')) : ?>
              <div class="widget-area widget-menu">
                <div class="footer-navigation">
                  <?php dynamic_sidebar('footer-menu')  ?>
                </div>
              </div>
            <?php endif; ?>
            <!-- ./Footer Main Menu -->
          </div>
          <div class="col-md-3">
            <!-- Widget Area -->
            <?php if (is_active_sidebar('useful-links')) : ?>
              <div class="widget-area">
                <?php dynamic_sidebar('useful-links')  ?>
              </div>
            <?php endif; ?>
            <!-- ./Widget Area -->
          </div>
          <div class="col-md-6">
            <!-- Widget Area -->
            <?php if (is_active_sidebar('footer-contact-2')) : ?>
              <div class="widget-area">
                <?php dynamic_sidebar('footer-contact-2')  ?>
              </div>
            <?php endif; ?>
            <!-- ./Widget Area -->
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="site-footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- Copyright -->
          <div class="copyright">
            Ⓒ 2019. <?php echo bloginfo('name') ?>
          </div>
          <!-- Copyright -->
        </div>
      </div>
    </div>
  </div>
</footer><!-- .site-footer -->

<?php

wp_footer(); ?>

</body>

</html>