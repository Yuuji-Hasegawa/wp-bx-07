<?php get_header();
post_view_count();
if (have_posts()):?>
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
    <span class="c-hero-copy o-cover__middle">
      <span class="c-display-l u-text-weight-b u-font-en-con">Product</span>
      <span class="c-display-xs">商品詳細</span>
    </span>
  </div>
</div>
<div class="o-center u-pt-2xl u-pb-2xl">
  <div class="o-sidebar">
    <div class="o-sidebar__narrow">
      <?php echo get_thumb_sq();?>
    </div>
    <div class="o-sidebar__wide o-cover">
      <div class="o-stack o-stack--l c-inner-box">
        <h1 class="c-display-m"><?php the_title();?></h1>
        <span class="c-content-l u-text-weight-b u-text-right u-content-wrap">
          <span
            class="c-display-s u-font-en-con"><?php echo number_format(intval(get_post_meta($post->ID, 'product_price', true)));?></span>円（税込）
        </span>
        <article class="c-entry u-content-wrap">
          <?php the_content();?>
        </article>
      </div>
    </div>
  </div>
</div>
<details class="o-box o-box--transparent o-box--accordion">
  <summary class="o-center u-text-center u-text-weight-b u-pt-m u-pb-l c-according-summary">
    <span class="c-display-s">商品詳細</span>
    <span class="o-icon-parent o-icon-parent--accordion">
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path
          d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
          fill="currentColor"></path>
      </svg>
    </span>
  </summary>
  <div class="o-center o-center--content u-pt-xl u-pb-xl">
    <dl class="o-sidebar o-sidebar--table">
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">商品名</dt>
      <dd class="o-box o-box--tbody c-content-l">商品名</dd>
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">種別</dt>
      <dd class="o-box o-box--tbody c-content-l">xxxx</dd>
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">原材料</dt>
      <dd class="o-box o-box--tbody c-content-l">xx,xx,xx,xx</dd>
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">内容量</dt>
      <dd class="o-box o-box--tbody c-content-l">1点あたり nnグラム</dd>
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">サイズ</dt>
      <dd class="o-box o-box--tbody c-content-l">S,M,L,XL,フリーサイズ</dd>
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">カラー</dt>
      <dd class="o-box o-box--tbody c-content-l">青、赤、黒、白</dd>
      <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">賞味期限</dt>
      <dd class="o-box o-box--tbody c-content-l">商品に記載</dd>
    </dl>
  </div>
</details>
<details class="o-box o-box--transparent o-box--accordion">
  <summary class="o-center u-text-center u-text-weight-b u-pt-m u-pb-l c-according-summary">
    <span class="c-display-s">よくあるご質問</span>
    <span class="o-icon-parent o-icon-parent--accordion">
      <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path
          d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"
          fill="currentColor"></path>
      </svg>
    </span>
  </summary>
  <div class="o-center o-center--content u-pt-xl u-pb-xl">
    <div class="o-stack o-stack--l">
      <dl class="o-stack o-stack--s c-faq">
        <dt class="c-faq__q c-display-2xs u-text-weight-b u-pb-s">ダミー質問</dt>
        <dd class="c-faq__a c-content-l">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </dd>
      </dl>
      <dl class="o-stack o-stack--m c-faq">
        <dt class="c-faq__q c-display-2xs u-text-weight-b u-pb-xs">ダミー質問</dt>
        <dd class="c-faq__a c-content-l u-pb-m">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </dd>
      </dl>
      <dl class="o-stack o-stack--m c-faq">
        <dt class="c-faq__q c-display-2xs u-text-weight-b u-pb-xs">ダミー質問</dt>
        <dd class="c-faq__a c-content-l u-pb-m">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </dd>
      </dl>
      <dl class="o-stack o-stack--m c-faq">
        <dt class="c-faq__q c-display-2xs u-text-weight-b u-pb-xs">ダミー質問</dt>
        <dd class="c-faq__a c-content-l u-pb-m">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </dd>
      </dl>
      <dl class="o-stack o-stack--m c-faq">
        <dt class="c-faq__q c-display-2xs u-text-weight-b u-pb-xs">ダミー質問</dt>
        <dd class="c-faq__a c-content-l u-pb-m">
          あのイーハトーヴォのすきとおった風、夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、郊外のぎらぎらひかる草の波。
        </dd>
      </dl>
    </div>
  </div>
</details>
<div class="o-center o-center--content u-pb-2xl">
  <h2 class="c-sec-heading u-mb-l">シェア・共有</h2>
  <div class="c-share-parent">
    <input type="text" class="o-box o-box--input o-box--share c-content-l u-full-width"
      value="<?php echo esc_url(get_permalink($post->ID));?>"
      readonly="" />
    <svg class="o-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
      <!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
      <path
        d="M64 464H288c8.8 0 16-7.2 16-16V384h48v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h64v48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16zM224 304H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H224c-8.8 0-16 7.2-16 16V288c0 8.8 7.2 16 16 16zm-64-16V64c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V288c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64z"
        fill="currentColor"></path>
    </svg>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-pb-2xl">
  <?php echo get_related_product();?>
  <div class="u-text-center u-mt-xl js-fade-up">
    <a href="<?php echo home_url('/product/');?>"
      class="o-box o-box--button o-box--rect-button u-font-en-con"> MORE </a>
  </div>
</div>
<?php endif;
get_footer();?>