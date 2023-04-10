<?php get_header(); ?>

<main class="arc-catalog">

  <section class="hero-lower core">
    <div class="containers">
      <div class="hero-lower__box">
        <h1 class="ttl-primary">商品の差別化に役立つ森下仁丹の<br class="sp-only">サービス資料</h1>
        <div class="hero-lower__box--sub">機能性原料からシームレスカプセル技術の資料まで<br class="pc-only">無料でダウンロードできますので是非ご覧ください。</div>
      </div>
    </div>
  </section>

  <section>
    <div class="containers">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'catalog',
        'paged' => $paged,
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="flex card">
          <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
          <summary class="card__box">
            <h2 class="card__box--ttl"><?php the_title(); ?></h2>
            <h3 class="card__box--txt"><?php echo CFS()->get('lead'); ?></h3>
            <div class="more small bgY">資料の詳細・ダウンロードはこちら</div>
          </summary>
        </a>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>