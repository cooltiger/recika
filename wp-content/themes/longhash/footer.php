  <footer class="footer">
    <div class="inner">
      <ul class="nav01">
        <?php if ( is_home() || is_front_page() ) : ?>
        <li><a href="#container">トップ</a></li>
        <li><a href="#topNews">なぜレシカ</a></li>
        <!-- <li><a href="#media">MEDIA</a></li> -->
        <li><a href="#company">レシカコンセプト</a></li>
        <li><a href="#member">なぜブロックチェーン</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
        <?php else : ?>
        <li><a href="<?php echo home_url('/'); ?>#container">トップ</a></li>
        <li><a href="<?php echo home_url('/'); ?>#topNews">なぜレシカ</a></li>
        <!-- <li><a href="<?php echo home_url('/'); ?>#media">MEDIA</a></li> -->
        <li><a href="<?php echo home_url('/'); ?>#company">コンセプト</a></li>
        <li><a href="<?php echo home_url('/'); ?>#member">なぜブロックチェーン</a></li>
        <li><a href="<?php echo home_url('/'); ?>#contact">お問い合わせ</a></li>
        <?php endif; ?>
      </ul>
      <div class="logo">
        <a href="#container"><img src="<?php echo get_template_directory_uri(); ?>/images/recika_logo.png" alt="RECIKA"></a>
      </div>
      <ul class="nav02">
        <!-- <li><a href="http://www.longhash.com" target="_blank">LONGHASH.com（海外版）</a></li> 
         <li><a href="http://jp.longhash.com/" target="_blank">JP.LONGHASH(日本版)</a></li> 
        <li><a href="<?php echo home_url('/'); ?>privacy">PRIVACY POLICY</a></li>
        <li><a href="<?php echo home_url('/'); ?>tos">利用規約</a></li>-->
      </ul>
      <!-- <ul class="sns">
        <li><a href="https://twitter.com/longhash_jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
        <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
      </ul> -->
      <p class="copyright">© 2018 RECIKA. All rights reserved.</p>
    </div>
  </footer>

</div><!-- container -->

<nav id="side">
  <ul class="mainNav">
    <li><a href="<?php echo home_url('/'); ?>#container">トップ</a></li>
    <li><a href="<?php echo home_url('/'); ?>#topNews">なぜレシカ</a></li>
    <!-- <li><a href="<?php echo home_url('/'); ?>#media">MEDIA</a></li> -->
    <li><a href="<?php echo home_url('/'); ?>#company">レシカコンセプト</a></li>
    <li><a href="<?php echo home_url('/'); ?>#member">なぜブロックチェーン </a></li>
    <li><a href="<?php echo home_url('/'); ?>#contact">お問い合わせ</a></li>
    <!-- <li><a href="http://longhash.co.jp/meetup/" target="_blank" class="meetup"><span>- NEW -</span>MEETUP</a></li> -->
  </ul>
  <ul class="subNav">
    <!-- <li><a href="http://www.longhash.com" target="_blank">LONGHASH.com（海外版）</a></li> -->
    <!-- <li><a href="http://jp.longhash.com/" target="_blank">JP.LONGHASH(日本版)</a></li> -->
    <!-- <li><a href="<?php echo home_url('/'); ?>privacy">PRIVACY POLICY</a></li> -->
    <!-- <li><a href="<?php echo home_url('/'); ?>tos">利用規約</a></li> -->
  </ul>
  <!-- <ul class="sns">
    <li><a href="https://twitter.com/longhash_jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tw.png" alt="twitter"></a></li>
    <li><a href="https://www.facebook.com/longhash.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_fb.png" alt="Facebook"></a></li>
  </ul> -->
</nav>
<?php wp_footer(); ?>
</body>
</html>
