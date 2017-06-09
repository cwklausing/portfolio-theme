<?php
/**
 * Template for the Footer
 */

$menu_array = array(
  'menu'            => 'Footer Menu',
  'container'       => false,
  'theme_location'  => 'secondary',
)

?>

<footer class="site-footer">
  <nav class="site-footer__nav">
    <?php wp_nav_menu( $menu_array ); ?>
  </nav>

  <div class="social-media">
    <a href="<?php echo esc_url( $github_link ); ?>" target="_blank">
      <svg aria-labelledby="icon-github" class="social-media__icon">
        <use xlink:href="#icon-github"></use>
      </svg>
    </a>
  </div>
  <?php wp_footer(); ?>
</footer>

</body>
</html>
