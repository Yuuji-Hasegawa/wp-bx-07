<?php get_header();?>
<div class="c-puton c-puton--filter js-pull-view">
  <picture class="o-frame o-frame--switch-l  c-scale-anime">
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
      <span class="c-display-m u-text-weight-b">ビジネスをもっと青く</span>
      <span class="c-display-l u-font-logo">BLUE B NOSE</span>
    </h1>
  </div>
</div>
<div class="o-switcher o-switcher--gap-none u-bg-qua js-pull-view">
  <div class="o-cover">
    <div class="o-cover__middle o-stack o-stack--l c-inner-box c-inner-box--max-content">
      <h2 class="o-stack js-fade-up">
        <span class="c-display-l u-text-weight-b u-font-en-con">About Us</span>
        <span class="c-display-xs"><span class="u-font-logo">BLUE B NOSE</span>について</span>
      </h2>
      <p class="c-content-l js-fade-up">
        あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。またそのなかでいっしょになったたくさんのひとたち、ファゼーロとロザーロ、羊飼のミーロや、顔の赤いこどもたち、地主のテーモ
      </p>
    </div>
  </div>
  <div>
    <picture class="o-frame">
      <source type="image/avif"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.avif" />
      <source type="image/webp"
        srcset="<?php echo get_template_directory_uri();?>/img/dummy-img01.webp" />
      <img
        src="<?php echo get_template_directory_uri();?>/img/dummy-img01.jpg"
        width="100%" height="100%" decoding="async" fetchpriority="high" alt="" />
    </picture>
  </div>
</div>
<div class="o-box o-box--transparent u-bg-primary u-pb-2xl js-pull-view">
  <div class="o-center o-center--content">
    <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con">NEWS</h2>
    <?php echo get_front_news();?>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-bg-qua u-pb-2xl js-pull-view">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con">PRODUCT</h2>
  <?php echo get_front_product();?>
</div>
<div class="o-center u-pb-2xl">
  <h2 class="c-sec-heading u-text-center u-text-weight-b u-font-en-con">What's New</h2>
  <?php if (have_posts()):?>
  <ul class="o-grid o-grid--tri u-mb-xl">
    <?php while (have_posts()): the_post();?>
    <li>
      <a href="<?php the_permalink();?>"
        class="o-box o-stack c-link-card u-bg-qua">
        <?php echo get_thumb();?>
        <span class="o-stack o-stack--s u-pt-l u-pb-l u-pr-m u-pl-m">
          <span class="o-cluster o-cluster--middle">
            <time class="c-content-l u-font-en-con u-text-weight-m"
              datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
            <?php echo get_loop_cat();?>
          </span>
          <span
            class="c-content-l u-text-trim u-text-trim--two-line u-text-weight-b"><?php the_title();?></span>
          <span class="c-content-m u-text-secondary">
            <span
              class="u-font-en-con u-text-weight-m"><?php echo get_views_count();?></span>回表示・読了見込<span
              class="u-font-en-con u-text-weight-m"><?php echo get_readtime();?></span>分
          </span>
        </span>
      </a>
    </li>
    <?php endwhile;?>
  </ul>
  <?php else:?>
  <p class="c-content-l">記事はまだありません。</p>
  <?php endif;?>
  <div class="u-text-center">
    <a class="o-box o-box--button o-box--rect-button o-box--primary-button o-icon-parent"
      href="<?php echo home_url('/blog/');?>">
      コンテンツ一覧
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc.-->
        <path
          d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"
          fill="currentColor"></path>
      </svg>
    </a>
  </div>
</div>
<?php get_footer();?>