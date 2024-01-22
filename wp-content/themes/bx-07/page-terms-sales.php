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
      <span class="c-display-l u-text-weight-b u-font-en-con">Terms of Sales</span>
      <span class="c-display-xs"><?php the_title();?></span>
    </h1>
  </div>
</div>
<div class="o-box o-box--transparent o-center u-pb-2xl u-pt-2xl u-bg-qua">
  <dl class="o-sidebar o-sidebar--table">
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">店舗名</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_vars('term', 'name');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">販売事業者名</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_vars('company', 'name');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">販売責任者名</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <?php echo get_vars('company', 'owner');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">所在地</dt>
    <dd class="o-box o-box--tbody c-content-l">
      〒<span
        class="u-font-en-con"><?php echo get_vars('company', 'zip');?></span>
      <?php echo get_vars('company', 'address');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">電話番号</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <a class="c-text-link u-font-en-con" href="#" target="_blank"
        rel="noopener"><?php echo get_vars('company', 'tel');?></a>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">FAX番号</dt>
    <dd class="o-box o-box--tbody c-content-l u-font-en-con">
      <?php echo get_vars('company', 'fax');?>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">メールアドレス</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <a class="c-text-link"
        href="mailto:<?php echo get_vars('mail', 'primary');?>"
        target="_blank"
        rel="noopener"><?php echo get_vars('mail', 'primary');?></a>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">ホームページURL</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <a class="c-text-link"
        href="<?php echo get_vars('company', 'url');?>"
        target="_blank"
        rel="noopener"><?php echo get_vars('company', 'url');?></a>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">商品引渡し時期</dt>
    <dd class="o-box o-box--tbody c-content-l">商品代金入金を確認後、お客様の指定日に合わせて発送致します。<br>
      但し、在庫のない場合や、繁忙期間中は遅れる場合がございます。<br>
      引渡しは、運送会社よりお届けいたします。</dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">不良品の取扱</dt>
    <dd class="o-box o-box--tbody">
      <p class="c-content-l">商品到着時に必ず商品をご確認ください。<br />
        下記商品は、無料で至急交換させていただきます。<br />
        商品到着後、3日以内にE-mailまたはお電話にてご連絡ください。<br />
        責任を持って良品と交換、または全額返金させていただきます。</p>
      <p class="c-notes c-suppl-l">ご返送いただく際の送料は当方で負担致しますので【着払い】でお送りくださいませ。</p>
      <ul class="c-disc-list c-content-l">
        <li>申し込まれた商品と届いた商品が異なっている場合</li>
        <li>商品の破損、傷みなど品質上の問題があった場合</li>
      </ul>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">返品について</dt>
    <dd class="o-box o-box--tbody c-content-l">XXという商品の性質上、お客様のご都合による返品／交換はお受け出来ません。 </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">支払い方法及び支払い時期</dt>
    <dd class="o-box o-box--tbody">
      <p class="c-content-l">下記のお支払い方法をご利用になれます。<br />
        詳細は、送料とお支払い方法についてのページをご覧ください。</p>
      <p class="c-content-l">クレジットカード、銀行振り込み（前払い）、代金引換、郵便振替（前払い）、コンビニ支払い(前払い）</p>
      <p class="c-notes c-suppl-l">郵便振替は、ご入金確認まで1週間ほど掛かります。</p>
      <p class="c-content-l">発送はご入金確認後になりますので、お急ぎの方は「クレジット」及び「代金引換」決済をご利用いただきますようお願いいたします。 </p>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">商品代金以外の必要料金</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <ul class="c-disc-list u-mb-m">
        <li>消費税（10%）</li>
        <li>送料（詳細は、送料とお支払い方法についてのページをご覧ください。）</li>
        <li>お支払方法に代金引換を選択された場合は、代金引換手数料</li>
        <li>お支払方法に銀行振込の手数料を選択された場合は、お振込み時に銀行への振込み手数料はお客様でご負担ください。</li>
      </ul>
      <ul class="o-stack">
        <li class="c-notes c-suppl-l">
          商品発送後のキャンセル、1週間以上の長期不在、受け取り拒否等、お客様のご都合で商品が戻ってきた場合、往復分の送料・手数料、梱包などに要した費用を、別途請求させていただきます。予めご了承ください。</li>
        <li class="c-notes c-suppl-l">商品は、発送から1週間以内に必ずお受け取りください。<br />お受け取りいただけない場合はキャンセルとして扱い、上記のように費用を別途請求させていただきます。
        </li>
      </ul>
    </dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">申込の有効期限</dt>
    <dd class="o-box o-box--tbody c-content-l">ご注文日から30日以内にご入金を確認できなかった場合は、ご注文を取り消させていただきます。</dd>
    <dt class="o-box o-box--thead c-content-l u-bg-secondary u-text-right">その他</dt>
    <dd class="o-box o-box--tbody c-content-l">
      <ul class="c-disc-list">
        <li class="u-mb-l">離島への配送の際、クール便での対応ができない地域が一部ございます。<br />
          離島にクール便でお届けの場合、必ずご注文前にお問い合わせくださいませ。<br />
          事前の連絡がない場合、配送できず返品となる可能性がございます。</li>
        <li>当ショップは、xxxが提供するxxxを利用しています。<br />
          送信フォームは、サーバーとお客様がご利用のパソコンとの通信を暗号化保護し、入力する際の情報を覗き見されないSSL（Secure Sockets Layer)対応です。<br />
          クレジットカード情報は、決済代行会社が運営する決済サーバーに、トークン方式（カード情報非通過方式）により直接送信されるため、xxxを通過いたしません。また、当ショップ及びxxx社では、クレジットカード情報を一切保持しておりません。<br />
          決済代行会社は、クレジットカード業界のセキュリティ基準であるPCIDSSに完全準拠しております。</li>
      </ul>
    </dd>
  </dl>
</div>
<?php get_footer();?>