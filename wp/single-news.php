<?php get_header(); 
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
?>

<main class="sng-news">

  <section class="news-article">
    <div class="containers">

      <div class="flex gap20 fS aiC inherit news-article__date">
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
      </div>

      <h1 class="news-article__h1"><?php the_title(); ?></h1>

      <?php get_template_part( 'template-parts/sns' ); ?>

      <div class=" news-article__lead"><?php echo CFS()->get('lead'); ?></div>

      <div class=" news-article__conts"><?php the_content(); ?></div>

    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>