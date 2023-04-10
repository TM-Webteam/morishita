<?php get_header(); ?>

<main class="top">

  <section class="hero">
    <div class="containers">
      <div class="hero__sub"><span>独自の原料素材</span>・<span>シームレスカプセル技術</span>で<br class="sp-only"><ruby>差<rt>・</rt>別<rt>・</rt>化<rt>・</rt></ruby>できる商品開発をサポート</div>
      <h1 class="ttl-primary">機能性表示食品開発＆<br>新たな価値提供の支援サービス</h1>
      <div class="hero__lead">長年蓄積された原料調達のノウハウを駆使し、確立された品質管理体制のもとで、<br>差別化できる商品開発を支援いたします。</div>
      <div class="flex fS aiC hero__btn">
        <a href="/differentiation/" class="more core">差別化できる商品開発をしたい企業様へ</a>
        <div class="cta-btn">
          <!-- <div class="balloon"><span class="balloon__txt">差別化をサポートする森下仁丹のサービス資料</span></div>
          <a href="/catalog/" class="more bgY">サービス資料ダウンロード</a>
          <summary class="tooltip cW">お申込み後、リアルタイムでお送りいたします！</summary> -->
          <div class="balloon"><span class="balloon__txt">差別化できる商品開発をサポートいたします。</span></div>
          <a href="/contact/" class="more bgY">お問合せ・ご相談はこちら</a>
          <!-- <summary class="tooltip cW">お申込み後、リアルタイムでお送りいたします！</summary> -->
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/praise' ); ?>

  <section class="product bg-pattern">
    <div class="containers">
      <h2 class="ttl-secondary">独自の原料素材とシームレスカプセル技術で<br class="pc-only">差別化された商品開発を<br class="sp-only">サポートします。</h2>
      <div class="flex jcC gap30 item">
        <a href="/rosehip_polyphenol/" class="item__box">
          <div class="telop"><span>原料供給</span></div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-product01.jpg" alt="ローズヒップポリフェノールMJ"></figure>
          <h3 class="item__box--ttl">ローズヒップポリフェノールMJ</h3>
        </a>
        <a href="/cassis/" class="item__box">
          <div class="telop"><span>原料供給</span></div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-product02.jpg" alt="カシスエキスMJ"></figure>
          <h3 class="item__box--ttl">カシスエキスMJ</h3>
        </a>
        <a href="/salacia/" class="item__box">
          <div class="telop"><span>原料供給</span></div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-product03.jpg" alt="サラシアエキスMJ"></figure>
          <h3 class="item__box--ttl">サラシアエキスMJ</h3>
        </a>
        <a href="/seamless_capsule/" class="item__box">
          <div class="telop"><span class="oem">OEM・受託製造</span></div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-product04.jpg" alt="シームレスカプセル受託"></figure>
          <h3 class="item__box--ttl">シームレスカプセル受託</h3>
        </a>
        <a href="/supplement_oem/" class="item__box">
          <div class="telop"><span class="oem">OEM・受託製造</span></div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-product05.jpg" alt="サプリメントOEM受託"></figure>
          <h3 class="item__box--ttl">サプリメントOEM受託</h3>
        </a>
      </div>
      <div class="cta-btn">
        <div class="balloon"><span class="balloon__txt">差別化をサポートする森下仁丹のサービス資料</span></div>
        <a href="/catalog/" class="more bgY wp-thumb">サービス資料ダウンロード</a>
        <summary class="tooltip">お申込み後、リアルタイムでお送りいたします！</summary>
      </div>
    </div>
  </section>

  <section class="needs">
    <div class="containers">
      <h2 class="ttl-secondary">「機能性表示食品をつくりたい」<br class="sp-only">「新たな付加価値をつけたい」<br>このようなニーズやお悩みは<br class="sp-only">ございませんか？</h2>
      <ul class="flex gap30 card">
        <li class="card__box">
          <h3 class="card__box--ttl core">差別化のネタが見つからない</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-needs01.jpg" alt="差別化のネタが見つからない"></figure>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl core">機能性原料が見つからない<br>使い方がわからない</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-needs02.jpg" alt="機能性原料が見つからない使い方がわからない"></figure>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl core">機能性表示食品の届出業務を<br>サポートしてほしい</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-needs03.jpg" alt="機能性表示食品の届出業務をサポートしてほしい"></figure>
        </li>
      </ul>
      <div class="speech"><span>差別化できる商品開発をサポートいたします。</span></div>
      <a href="/differentiation/" class="more">詳しくはこちら</a>
    </div>
  </section>

  <section class="useful-wp">
    <div class="containers">
      <h2 class="ttl-secondary cW">お役立ち資料</h2>
      <div class="lead">差別化できる商品開発におけるトレンドや開発段階の課題解決につながるノウハウなどを<br>ご紹介しています。是非ご覧ください。</div>
      <div class="flex gap30">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 2,
          'post_type' => 'whitepaper',
          'paged' => $paged,
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="card">
            <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
            <summary class="card__box">
              <h3 class="card__box--ttl"><?php the_title(); ?></h3>
              <div class="card__box--txt"><?php echo CFS()->get('lead'); ?></div>
              <div class="more bgY small">お役立ち資料をダウンロード</div>
            </summary>
          </a>

          <?php endwhile; ?>
        <?php endif; ?>
        
        
      </div>
      <a href="/whitepaper/" class="more">お役立ち資料一覧を見る</a>
    </div>
  </section>

  <section class="info bg-pattern">
    <div class="containers">
      <h2 class="ttl-secondary">会社情報</h2>
      <div class="flex gap30 card">
        <a href="/company/" class="flex aiC card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-info01.svg" alt="企業情報"></figure>
          <dl class="card__box--txt">
            <dt><h3>企業情報</h3></dt>
            <dd>1893年創業以来、人々の健康や豊かな暮らしの一助となる製品をお届けしてきた森下仁丹についてのご案内です。</dd>
          </dl>
        </a>
        <a href="/strength/" class="flex card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-info02.svg" alt="森下仁丹が選ばれる理由"></figure>
          <dl class="card__box--txt">
            <dt><h3>森下仁丹が選ばれる理由</h3></dt>
            <dd>独自の原料素材、シームレスカプセル技術、機能性表示食品の制度づくりを進めてきた当社ならではのサポート力が選ばれる理由です。</dd>
          </dl>
        </a>
      </div>
    </div>
  </section>

  <section class="news">
    <div class="containers">
      <h2 class="ttl-secondary">お知らせ</h2>

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 5,
          'post_type' => 'news',
          'paged' => $paged,
          'order' => 'DESC',
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'news_category');
            
          ?>
          
          <a href="<?php the_permalink(); ?>" class="news__box">
            <dl class="flex aiC gap30 news__box--item">
              <dt class="flex aiC sp-fS">
                <time class="time"><?php echo get_the_modified_date(); ?></time>
                <?php if ($post_terms) : ?>
                  <?php foreach ($post_terms as $post_term) : 
                    $t_id = $post_term->term_id;
                    $term_idsp = "news_category_" . $t_id;
                    $bgcolor = get_field('bgcolor', $term_idsp);
                  ?>
                    <span class="cat" style="background: <?php echo $bgcolor ?>;"><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </dt>
              <dd><?php the_title(); ?></dd>
            </dl>
          </a>

          <?php endwhile; ?>
        <?php endif; ?>
        
      
      <a href="/news/" class="more">お知らせ一覧を見る</a>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>