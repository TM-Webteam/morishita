<?php get_header(); ?>

<main class="strength">

  <section class="hero-lower core">
    <div class="containers">
      <div class="hero-lower__box">
        <h1 class="ttl-primary">森下仁丹が選ばれる3つの理由</h1>
        <div class="hero-lower__box--sub">独自の原料素材、シームレスカプセル技術、<br>機能性表示食品の制度づくりを進めてきた当社ならではのサポート力が選ばれる理由です。</div>
        <a href="/contact/" class="more bgY">お問合せ・ご相談はこちら</a>
      </div>
    </div>
  </section>

  <section>
    <div class="containers">

      <div class="flex aiC sp-reverse alternate">
        <summary class="alternate__box">
          <div class="alternate__box--num">01</div>
          <h2 class="alternate__box--ttl">薬種商として創業した当社ならではの<br>確かな鑑定眼と豊富な知識・ノウハウ</h2>
          <div class="alternate__box--txt">1893年の創業時の基本方針から変わらない「厳選された良質な素材で、優れた製品を提供し、地球的視野に立ったグローバルなフィールドで事業を展開。そして、生活者の心に響くより良い方法で人々にお届けする」という「JINTAN創業理念」を基に、安心安全な商品開発、品質管理を行っています。</div>
          <a href="/company/" class="more">森下仁丹の歴史</a>
        </summary>
        <figure class="alternate__img"><img src="<?php echo assets_path() ?>img/strength/img-alternate01.jpg" alt="薬種商として創業した当社ならではの確かな鑑定眼と豊富な知識・ノウハウ"></figure>
      </div>

      <div class="flex aiC alternate">
        <figure class="alternate__img"><img src="<?php echo assets_path() ?>img/strength/img-alternate02.jpg" alt="独自の原料素材とシームレスカプセル技術で差別化できる商品開発をサポート"></figure>
        <summary class="alternate__box">
          <div class="alternate__box--num">02</div>
          <h2 class="alternate__box--ttl">独自の原料素材とシームレスカプセル技術で<br>差別化できる商品開発をサポート</h2>
          <div class="alternate__box--txt">多くの自社商品を開発・製造してきた森下仁丹ならではのノウハウを活用し、商品設計や機能性原料の供給、シームレスカプセルでの製造、充填、包装まで一気通貫でサポート。商品に付加価値をつけ、競合他社との差別化ができるネタをご提供します。</div>
          <a href="/differentiation/" class="more">差別化できる商品開発をしたい企業様へ</a>
        </summary>
      </div>

      <div class="flex aiC sp-reverse alternate">
        <summary class="alternate__box">
          <div class="alternate__box--num">03</div>
          <h2 class="alternate__box--ttl">機能性表示食品の制度づくりを進めてきた<br>当社ならではのエビデンス作り、届出申請のサポート</h2>
          <div class="alternate__box--txt">機能性表示食品の届出には、ヘルスクレーム企画から臨床試験などのエビデンス作り、届出書類の作成など、さまざまな手順が存在します。機能性表示食品のガイドラインがわからない、あるいは自社で機能性表示の届出まで完結できる知識・ノウハウが無いという企業様には、機能性関与成分の研究レビュー（SR）の提供をはじめ、制度策定の中心メンバーならではの視点で徹底的にサポートいたします。<div class="note">※機能性表示食品制度は森下仁丹が声をかけ、主要な健康食品メーカーとともに規制改革会議に提案。それを受けて、消費者庁がサプリメントに機能性を表示して、生活者が選びやすくなる新しい制度づくりを進めました。</div></div>
        </summary>
        <figure class="alternate__img"><img src="<?php echo assets_path() ?>img/strength/img-alternate03.jpg" alt="機能性表示食品の制度づくりを進めてきた当社ならではのエビデンス作り、届出申請のサポート"></figure>
      </div>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>