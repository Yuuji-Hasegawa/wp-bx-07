<?php get_header();?>
<div class="c-puton c-puton--filter js-pull-view">
  <picture class="o-frame o-frame--switch-l">
    <source type="image/avif"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.avif" />
    <source type="image/webp"
      srcset="<?php echo get_template_directory_uri();?>/img/hero.webp" />
    <img
      src="<?php echo get_template_directory_uri();?>/img/hero.png"
      width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
  </picture>
  <div class="c-puton__inner o-cover">
    <h1 class="c-hero-copy o-cover__middle">
      <span class="c-display-l u-text-weight-b u-font-en-con">Product</span>
      <span class="c-display-xs">商品一覧</span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-pt-2xl u-pb-2xl js-pull-view">
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri">
    <?php while (have_posts()): the_post();?>
    <li>
      <a class="c-puton c-puton--filter c-pict-link"
        href="<?php the_permalink();?>">
        <?php echo get_thumb_sq();?>
        <div class="c-puton__inner o-cover u-text-white">
          <div class="u-text-center u-block-bottom u-pr-m u-pl-m">
            <span
              class="c-display-xs u-text-weight-b"><?php the_title();?></span>
          </div>
        </div>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">商品はまだありません。</p>
  <?php endif;
echo get_pagination();?>
</div>
<?php get_footer();?>