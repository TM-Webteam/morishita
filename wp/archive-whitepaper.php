<?php get_header(); ?>

<main class="arc-whitepaper">

  <section class="hero-lower core">
    <div class="containers">
      <div class="hero-lower__box">
        <h1 class="ttl-primary">お役立ち資料</h1>
        <div class="hero-lower__box--sub">機能性原料やシームレスカプセル技術に関する基礎知識から実践に役立つノウハウ・事例資料まで<br class="pc-only">無料でダウンロードできますので是非ご覧ください。</div>
      </div>
    </div>
  </section>

  <section class="latest">
    <div class="containers">
      <h2 class="ttl-secondary non">おすすめ資料</h2>
      <div class="flex gap30">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 2,
          'post_type' => 'whitepaper',
          'paged' => $paged,
          'post_status' => 'publish',
        );
        $latest_query = new WP_Query($args);
        $exclude_ids = array();
        if ($latest_query->have_posts()) :
        ?>
        <?php while ($latest_query->have_posts()) : $latest_query->the_post(); 
          $exclude_ids[] = get_the_ID();
        ?>

          <a href="<?php the_permalink(); ?>" class="flex item">
            <h2 class="item__ttl"><?php the_title(); ?></h2>
            <div class="item__img"><?php the_post_thumbnail(); ?></div>
            <div class="item__box">
              <?php if ($post_terms) : ?>
                <?php foreach ($post_terms as $post_term) : ?>
                  <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                <?php endforeach; ?>
              <?php endif; ?>
              <h3 class="item__box--txt"><?php echo CFS()->get('lead'); ?></h3>
            </div>
          </a>

          <?php endwhile; ?>
        <?php endif; ?>
        
      </div>
    </div>
  </section>

  <section>
    <div class="containers">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'whitepaper',
        'paged' => $paged,
        'post_status' => 'publish',
        'post__not_in' => $exclude_ids,
      );
      $grid_query = new WP_Query($args);
      if ($grid_query->have_posts()) :
      ?>
      <?php while ($grid_query->have_posts()) : $grid_query->the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="flex card">
          <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
          <summary class="card__box">
            <div class="card__box--ttl"><?php the_title(); ?></div>
            <div class="card__box--txt"><?php echo CFS()->get('lead'); ?></div>
            <div class="more small">ダウンロードはこちら</div>
          </summary>
        </a>

        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>