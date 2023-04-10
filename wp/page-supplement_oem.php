<?php get_header(); ?>

<main class="supplement">

  <section class="hero-lower core">
    <div class="containers flex aiC sp-reverse">
      <div class="hero-lower__box">
        <div class="hero-lower__box--sub">商品設計から製造、充填、<br class="sp-only">包装まで一貫製造。</div>
        <h1 class="ttl-primary">サプリメントOEM受託</h1>
        <figure class="hero-lower__box--img sp-only"><img src="<?php echo assets_path() ?>img/supplement/img-hero.png" alt="サプリメントOEM"></figure>
        <ul class="flex inherit hero-lower__box--effect">
          <li>差別化のネタ<br>をご提案</li>
          <li>新鮮さを保つ<br>アソート充填技術</li>
          <li>高いレベルでの<br>製造・品質管理</li>
        </ul>
        <div class="cta-btn">
          <div class="balloon"><span class="balloon__txt">差別化できる商品開発をサポートいたします。</span></div>
          <a href="/contact/" class="more bgY">お問合せ・ご相談はこちら</a>
        </div>
      </div>
      <figure class="hero-lower__img pc-only"><img src="<?php echo assets_path() ?>img/supplement/img-hero.png" alt="サプリメントOEM"></figure>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#about">サービス概要</a></li>
        <li><a href="#feature">特長</a></li>
        <li><a href="#flow">OEMの流れ</a></li>
        <li><a href="#reason">選ばれる理由</a></li>
      </ul>
    </div>
  </section>

  <section id="about" class="about sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>サプリメントOEMとは</small>ご要望に応じた商品設計、製剤開発、製造までサポートします。</h2>
      <div class="flex aiC sp-reverse">
        <dl class="about__box">
          <dt><h3>バルクでの納品でもサプリメント製品としての納品でも自社商品開発で培った技術と高品質で安心、安全をお届け</h3></dt>
          <dd>シームレスカプセルの受託をはじめ、当社既存のバルク製品のOEM/PB供給（耐酸性カプセルを用いた製品化など）さまざまなカタチでのご提供が可能です。</dd>
        </dl>
        <figure class="about__img"><img src="<?php echo assets_path() ?>img/supplement/img-about.jpg" alt="バルクでの納品でもサプリメント製品としての納品でも自社商品開発で培った技術と高品質で安心、安全をお届け"></figure>
      </div>
    </div>
  </section>

  <section id="feature" class="feature sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>特長</small>当社独自の製造技術、品質管理体制で商品開発をサポートします。</h2>
      <ul class="flex gap30">
        <li class="card">
          <div class="card__ttl">商品設計</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/supplement/img-feature01.png" alt="差別化のネタをご提案"></figure>
          <dl class="card__box">
            <dt><h3>差別化のネタをご提案</h3></dt>
            <dd>独自の機能性原料やシームレスカプセル技術と自社商品の販売実績を基に、差別化のネタをご提供します。</dd>
          </dl>
        </li>
        <li class="card">
          <div class="card__ttl">製剤開発</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/supplement/img-feature02.png" alt="新鮮さを保つアソート充填技術"></figure>
          <dl class="card__box">
            <dt><h3>新鮮さを保つアソート充填技術</h3></dt>
            <dd>シームレスカプセルと顆粒の合計3種類を窒素充填の個包装スティックに仕上げることが可能なため、最後の1包まで、新鮮さが保てます。</dd>
          </dl>
        </li>
        <li class="card">
          <div class="card__ttl">製造</div>
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/supplement/img-feature03.png" alt="高いレベルでの生産・品質管理"></figure>
          <dl class="card__box">
            <dt><h3>高いレベルでの生産・品質管理</h3></dt>
            <dd>GMPを基本としたミスの無い生産体制で、医薬品製造レベルでの製造・品質管理します。</dd>
          </dl>
        </li>
      </ul>
    </div>
  </section>

  <section id="flow" class="flow sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>OEMの流れ</small>バルク納品でも、最終製品での納品でもどちらでも対応可能です。</h2>
      <figure class="flow__img"><img src="<?php echo assets_path() ?>img/supplement/img-flow.png" alt="OEMの流れバルク納品でも、最終製品での納品でもどちらでも対応可能です。"></figure>
    </div>
  </section>

  <?php get_template_part( 'template-parts/reason' ); ?>

  <?php get_template_part( 'template-parts/praise' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>