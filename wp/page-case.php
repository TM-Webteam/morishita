<?php get_header(); ?>

<main class="case">

  <section class="hero-lower core">
    <div class="containers">
      <div class="hero-lower__box">
        <h1 class="ttl-primary">実績・事例</h1>
        <div class="hero-lower__box--sub">森下仁丹は規模・業界問わず多くの企業様に<br class="sp-only">選ばれています。</div>
        <div class="speech"><span class="cW">差別化できる商品開発をサポートいたします。</span></div>
        <a href="/contact/" class="more bgY">お問合せ・ご相談はこちら</a>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/praise' ); ?>


  <!-- <section class="voice bg-G">
    <div class="containers">
      <h2 class="ttl-secondary">お客様の声</h2>

      <div class="flex aiE voice__box">
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/case/img-voice01.jpg" alt="" class="avatar">
          <figcaption class="position">〇〇業　〇〇部門担当者</figcaption>
          <span class="tag">導入事例 01</span>
        </figure>
        <dl class="voice__box--cmt">
          <dt><h3>他社には無い機能性表示食品の商品開発が実現できました</h3></dt>
          <dd>お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</dd>
        </dl>
      </div>

      <div class="flex aiE sp-reverse voice__box">
        <dl class="voice__box--cmt v2">
          <dt><h3>他社には無い機能性表示食品の商品開発が実現できました</h3></dt>
          <dd>お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。お客様の声が入ります。</dd>
        </dl>
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/case/img-voice02.jpg" alt="" class="avatar">
          <figcaption class="position">〇〇業　〇〇部門担当者</figcaption>
          <span class="tag">導入事例 01</span>
        </figure>
      </div>
      
    </div>
  </section> -->

  <section class="quality">
    <div class="containers">
      <h2 class="ttl-secondary">サプリメント開発で培った技術と<br class="sp-only">高品質</h2>
      <div class="lead">森下仁丹のサプリメント製品開発で培った技術と<br class="sp-only">高品質（安心、安全、信頼）をご提供します。</div>
      <ul class="flex gap30">
        <li class="card">
          <h3 class="card__ttl">技術と品質</h3>
          <summary class="card__box">
            <div class="card__box--ttl">健食GMP取得工場で<br>製造・管理いたします</div>
            <ul class="card__box--list">
              <li>GMP（※）管理下で安心安全を追究し、あらゆるニーズにお応えする、生産体制と品質保証体制をとっています。</li>
              <li>様々な原料加工を可能とする技術開発力、付加価値の高い製品を生み出す企画提案力を持っています。</li>
            </ul>
          </summary>
        </li>
        <li class="card">
          <h3 class="card__ttl">サポート</h3>
          <summary class="card__box">
            <div class="card__box--ttl">ご要望に応じた<br>サービス提供が可能です</div>
            <ul class="card__box--list">
              <li>食品をはじめ、医薬品・医薬部外品まで、幅広い分野の商品開発に対応可能です。</li>
              <li>原料供給から、サプリメントの最終製品でのご提供まで対応可能です。</li>
            </ul>
          </summary>
        </li>
      </ul>
      
      <div class="note">※GMP とは?<br>Good Manufacturing Practice(適正製造規範)の略で、製造管理・品質管理基準を<br class="pc-only">定めたものです。</div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>