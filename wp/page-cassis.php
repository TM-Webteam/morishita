<?php get_header(); ?>

<main class="cassis">

  <section class="hero-lower core">
    <div class="containers flex aiC sp-reverse">
      <div class="hero-lower__box">
        <div class="hero-lower__box--sub">目の健康を整える機能を<br class="sp-only">自社製品にスムーズにプラス。</div>
        <h1 class="ttl-primary">カシスエキスMJ</h1>
        <figure class="hero-lower__box--img sp-only"><img src="<?php echo assets_path() ?>img/cassis/img-hero.png" alt="カシスエキスMJ"></figure>
        <ul class="flex inherit hero-lower__box--effect">
          <li>Wヘルスクレーム<br>が可能</li>
          <li>単回摂取で<br>効果を示す</li>
          <li>見た目の<br>インパクトあり</li>
        </ul>
        <div class="cta-btn">
          <div class="balloon"><span class="balloon__txt">特徴・各種エビデンスが分かる！</span></div>
          <a href="/catalog/cassis_mj/" class="more bgY">サービス資料ダウンロード</a>
          <summary class="tooltip">お申込み後、リアルタイムでお送りいたします！</summary>
        </div>
      </div>
      <figure class="hero-lower__img pc-only"><img src="<?php echo assets_path() ?>img/cassis/img-hero.png" alt="カシスエキスMJ"></figure>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#about">素材概要</a></li>
        <li><a href="#feature">特長</a></li>
        <li><a href="#case-study">開発商品例</a></li>
        <li><a href="#support">サポート</a></li>
      </ul>
    </div>
  </section>

  <section id="about" class="about sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>カシスエキスMJとは</small>目の健康を整える機能を自社製品に<br class="sp-only">プラスできる機能性原料です。</h2>
      <div class="flex aiC sp-reverse">
        <dl class="about__box">
          <dt>カシス丸ごと果実から抽出した<br>賦形剤を含まない100％のアイケア素材</dt>
          <dd>カシス特有のルチノシド配糖体2種を含む4種のアントシアニンの総量を規格化しています。暗いところ・明るいところでもはっきり見たい方にニュージーランド産カシス果実から抽出した、Wヘルスクレームが可能*なアイケア素材です。<div class="note">※カシス原料として初の機能性表示食品制度において受理実績あり。</div></dd>
        </dl>
        <figure class="about__img"><img src="<?php echo assets_path() ?>img/cassis/img-about.jpg" alt="カシス丸ごと果実から抽出した賦形剤を含まない100％のアイケア素材"></figure>
      </div>
    </div>
  </section>

  <section id="feature" class="feature sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>特長</small>カシスエキスMJは差別化にピッタリの<br class="sp-only">特長を持っています。</h2>
      <ul class="flex gap30">
        <li class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/cassis/img-feature01.png" alt="Wヘルスクレームが可能"></figure>
          <dl class="card__box">
            <dt>Wヘルスクレームが可能</dt>
            <dd>「ピント調節機能の低下を和らげる」と「 暗い場所での見る力を助ける」の２つのヘルスクレームが可能です。</dd>
          </dl>
        </li>
        <li class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/cassis/img-feature02.png" alt="単回摂取で効果を示す"></figure>
          <dl class="card__box">
            <dt>単回摂取で効果を示す</dt>
            <dd>カシスに特徴的なアントシアニンの濃度が濃いため、少量の使用で効果を発揮、効果を求めるお客様に訴求できます。</dd>
          </dl>
        </li>
        <li class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/cassis/img-feature03.png" alt="見た目のインパクトあり"></figure>
          <dl class="card__box">
            <dt>見た目のインパクトあり</dt>
            <dd>濃い紫色の色素で味も渋く、見た目のインパクトを求めるお菓子や食品としても使えます。</dd>
          </dl>
        </li>
      </ul>
    </div>
  </section>

  <section id="case-study" class="case-study sec-B">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>開発商品例</small>毎日摂取しやすい「食品」や<br class="sp-only">「健康食品」の商品化が最適です。</h2>
      <div class="lead">以下のような商品開発を検討している企業様に<br class="sp-only">おすすめです。</div>
      <ul class="flex gap30 item">
        <li>サプリメント</li>
        <li>お菓子</li>
        <li>飲料</li>
      </ul>
    </div>
  </section>

  <section class="sec-wp">
    <div class="containers">
      <div class="flex aiC gap30 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp03.png" alt=""></figure>
        <summary class="desc__box">
          <div class="desc__box--sub">PC・スマートフォン疲れなど、<br>目に悩みを持つ方への利用拡大に期待</div>
          <div class="desc__box--ttl">カシスエキスMJを活用した<br>食品開発のご提案</div>
          <a href="/whitepaper/suggestion_cassis/" class="more bgY small">ホワイトペーパーダウンロード</a>
        </summary>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/support' ); ?>

  <?php get_template_part( 'template-parts/praise' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>