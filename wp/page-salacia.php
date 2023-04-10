<?php get_header(); ?>

<main class="salacia">

  <section class="hero-lower core">
    <div class="containers flex aiC sp-reverse">
      <div class="hero-lower__box">
        <div class="hero-lower__box--sub">糖の吸収を抑える機能を<br class="sp-only">自社製品にスムーズにプラス。</div>
        <h1 class="ttl-primary">サラシアエキスMJ</h1>
        <figure class="hero-lower__box--img sp-only"><img src="<?php echo assets_path() ?>img/salacia/img-hero.png" alt="サラシアエキスMJ"></figure>
        <ul class="flex inherit hero-lower__box--effect">
          <li>天然物由来で<br>自然派訴求が可能</li>
          <li>単回摂取で<br>効果を示す</li>
          <li>少量で<br>有効性を発揮</li>
        </ul>
        <div class="cta-btn">
          <div class="balloon"><span class="balloon__txt">特徴・各種エビデンス・安定性データが分かる！</span></div>
          <a href="/catalog/salacia_mj/" class="more bgY">サービス資料ダウンロード</a>
          <summary class="tooltip">お申込み後、リアルタイムでお送りいたします！</summary>
        </div>
      </div>
      <figure class="hero-lower__img pc-only"><img src="<?php echo assets_path() ?>img/salacia/img-hero.png" alt="サラシアエキスMJ"></figure>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#about">素材概要</a></li>
        <li><a href="#feature">特長</a></li>
        <li><a href="#support">サポート</a></li>
      </ul>
    </div>
  </section>

  <section id="about" class="about sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>サラシアエキスMJとは</small>糖の吸収を抑える機能を自社製品に<br class="sp-only">プラスできる機能性原料です。</h2>
      <div class="flex aiC sp-reverse">
        <dl class="about__box">
          <dt><h3>古来より健康維持に役立てられてきた、<br>サラシアから抽出した糖ケア素材</h3></dt>
          <dd>サラシアエキスMJはインドやスリランカなどの熱帯地域に自生するデチンムル科サラシア属の植物が基源で、機能性関与成分のサラシア由来サラシノールが食後血糖値の上昇をゆるやかにします。</dd>
        </dl>
        <figure class="about__img"><img src="<?php echo assets_path() ?>img/salacia/img-about.jpg" alt="古来より健康維持に役立てられてきた、サラシアから抽出した糖ケア素材"></figure>
      </div>
    </div>
  </section>

  <section id="feature" class="feature sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>特長</small>サラシアエキスMJは商品化しやすい<br class="sp-only">特長を持っています。</h2>
      <ul class="flex gap30">
        <li class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/salacia/img-feature01.png" alt="天然物由来で自然派訴求が可能"></figure>
          <dl class="card__box">
            <dt><h3>天然物由来で自然派訴求が可能</h3></dt>
            <dd>サラシアエキスMJは自生するサラシアの根や幹から抽出。賦形剤を含まないため、添加物を好まないお客様に自然派訴求ができます。</dd>
          </dl>
        </li>
        <li class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/salacia/img-feature02.png" alt="単回摂取で効果を示す"></figure>
          <dl class="card__box">
            <dt><h3>単回摂取で効果を示す</h3></dt>
            <dd>機能性関与成分のサラシア由来サラシノールは単回摂取で効果を発揮、効果を求めるお客様に訴求できます。</dd>
          </dl>
        </li>
        <li class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/salacia/img-feature03.png" alt="少量で有効性を発揮"></figure>
          <dl class="card__box">
            <dt><h3>少量で有効性を発揮</h3></dt>
            <dd>少量で有効性を発揮※するので、複数の機能性関与成分を含んだ商品を開発できます。<div class="note">※サラシア由来サラシノールとして0.2㎎/回</div></dd>
          </dl>
        </li>
      </ul>
    </div>
  </section>

  <section class="sec-wp">
    <div class="containers">
      <div class="flex aiC gap30 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp04.png" alt=""></figure>
        <summary class="desc__box">
          <div class="desc__box--sub">糖吸収の抑制作用を持つ商品開発を<br class="sp-only">ご検討中の企業様へ</div>
          <div class="desc__box--ttl">糖の吸収をおだやかにする<br>サラシアエキスMJ</div>
          <a href="/catalog/salacia_mj/" class="more bgY small">サービス資料ダウンロード</a>
        </summary>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/support' ); ?>

  <?php get_template_part( 'template-parts/praise' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>