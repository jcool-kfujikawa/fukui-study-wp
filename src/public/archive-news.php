<?php get_header(); ?>
<section class="p-news">
  <div class="l-wrapper">
    <h1 class="c-heading">News</h1>
    <div class="p-news__list">
      <?php
      $paged = max(1, get_query_var('paged', 1));

      $news_query = new WP_Query([
        'post_type' => 'news',
        'posts_per_page' => 1,
        'paged' => $paged
      ]);

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <article class="p-news__item">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <h2 class="p-news__title"><?php the_title(); ?></h2>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news__date">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
            </a>
          </article>
        <?php endwhile;
      else : ?>
        <p>現在、ニュースはありません。</p>
      <?php endif; ?>
    </div>

    <!-- ページネーション -->
    <ol class="l-pagenation">
      <?php
      $pagination_links = paginate_links([
        'total' => $news_query->max_num_pages,
        'current' => $paged,
        'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/images/news/arrow.svg" alt="" width="9" height="16" loading="lazy" />',
        'next_text' => '<img src="' . get_template_directory_uri() . '/assets/images/news/arrow.svg" alt="" width="9" height="16" loading="lazy" />',
        'type' => 'array'
      ]);

      if ($pagination_links) :
        foreach ($pagination_links as $link) : ?>
          <li class="l-pagenation__item"><?php echo $link; ?></li>
        <?php endforeach;
      endif;
      ?>
    </ol>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer(); ?>
