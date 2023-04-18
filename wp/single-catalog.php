<?php get_header(); ?>

<main class="sng-common">

  <div class="containers flex">

    <article class="Contents article">

      <h1 class="article__ttl"><?php the_title(); ?></h1>

      <div class="wp-slick">
        <div id="wp-slick">
          <figure class="article__img"><?php the_post_thumbnail(); ?></figure>
          <?php if (!empty(CFS()->get('img-wp2'))) : ?>
            <figure class="article__img"><img src="<?php echo esc_url(CFS()->get('img-wp2')); ?>" alt=""></figure>
          <?php endif; ?>
          <?php if (!empty(CFS()->get('img-wp3'))) : ?>
            <figure class="article__img"><img src="<?php echo esc_url(CFS()->get('img-wp3')); ?>" alt=""></figure>
          <?php endif; ?>
        </div>
      </div>


      <div class="article__lead"><?php echo CFS()->get('lead'); ?></div>

      <div class="toc">
        <div class="toc__ttl">本資料の目次</div>
        <div class="toc__list">

          <?php $paragraph_arr = CFS()->get('toc'); ?>
          <?php if ($paragraph_arr) : ?>
            <dl>
              <?php foreach ($paragraph_arr as $paragraph) : ?>
                <dt><?php echo esc_html(strip_tags($paragraph['title'])) ?></dt>
                <?php if ($paragraph['caption']) : ?>
                  <dd>
                    <ul>
                      <?php foreach ((array)$paragraph['caption'] as $caption) : ?>
                        <li><?php echo esc_html(strip_tags($caption['caption_title'])) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </dd>
                <?php endif; ?>
              <?php endforeach; ?>
            </dl>
          <?php endif; ?>

        </div>
      </div>

    </article>

    <aside class="Sidebar">

      <section class="form">
        <div class="containers">
          <div id="frame_div">
            <script type="text/javascript">
              var K3_acct = "morishitajintan";
              var K3_campcode = "<?php echo CFS()->get('form_id'); ?>";
              var K3_width = "auto";
              var K3_height = "auto";
            </script>
            <script type="text/javascript" src="https://form.k3r.jp/embed/"></script>
          </div>
        </div>
      </section>

    </aside>

  </div>

</main>

<?php get_footer(); ?>