<?php function m_social_share_post() { ?>

  <div class="mss-post">
    <div class="mss-general __admingleButton __ab10025" data-admingleButtonLabel="TOP">
      <span class="mss-general-like"></span>
      <span>Click and gain</span>
      <span class="mss-general-earn" style="background-image:url('<?php echo plugin_dir_url( __FILE__ ); ?>be_earn.png')"></span>
      <span>( what's that? )</span>
      <span class="mss-general-logo" style="background-image:url('<?php echo plugin_dir_url( __FILE__ ); ?>be_logo.jpg')"></span>
    </div>
    <div class="mss-buttons">
      <div class="mss-email">
        <a href="#" alt="email"><span></span></a>
      </div>
      <div class="mss-facebook">
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" alt="facebook"><span></span></a>
      </div>
      <div class="mss-twitter">
        <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" alt="twitter"><span></span></a>
      </div>
    </div>
    <div class="clear"></div>
  </div>

<?php } ?>

<?php function m_social_share_mobile() { ?>

  <div class="mss-mobile">
    <div class="mss-title">
      Share this article
    </div>
    <div class="mss-close"></div>
    <div class="mss-buttons">
      <div class="mss-email">
        <a href="#" alt="email"><span></span></a>
      </div>
      <div class="mss-twitter">
        <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" alt="twitter"><span></span></a>
      </div>
      <div class="mss-sms">
        <a alt="sms"><span>SMS</span></a>
      </div>
    </div>
    <div class="clear"></div>
  </div>

  <div class="mss-mobile-sticky">
    <div class="mss-buttons">
      <div class="mss-earn">
        <a href="#"  alt="email"><span  style="background-image:url('<?php echo plugin_dir_url( __FILE__ ); ?>be_logo.jpg')">Share & Earn </span></a>
      </div>
      <div class="mss-facebook">
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" alt="facebook"><span></span></a>
      </div>
      <div class="mss-whatsapp">
        <a alt="sms"><span></span></a>
      </div>
      <div class="mss-more">
        <a alt="sms"><span></span></a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <script>
  jQuery(document).ready(function() {
    'use strict';
    jQuery(".mss-more").on("click",function() {
      jQuery('.mss-mobile').addClass("active");
    });
    jQuery(".mss-close").on("click",function() {
      jQuery('.mss-mobile').removeClass("active");
    });
  });
  </script>

<?php } add_action('wp_footer', 'm_social_share_mobile'); ?>
