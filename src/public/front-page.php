<?php get_header(); ?>
<div class="p-top-mv">
  <div class="p-top-mv__image">
    <img
      src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/top/mainvisual.jpg'); ?>"
      alt=""
    />
  </div>
  <!-- /.p-top-mv__image -->
</div>
<!-- /.p-top-mv -->
<section class="p-top-works">
  <div class="l-wrapper">
    <h2 class="c-heading">Works</h2>
    <!-- /.c-heading -->
    <div class="p-top-works__list">
      <?php
      $works_query = new WP_Query(array(
        'post_type'      => 'works',
        'posts_per_page' => 6,
        'orderby'        => 'date',
        'order'          => 'DESC'
      ));

      if ($works_query->have_posts()) :
        while ($works_query->have_posts()) : $works_query->the_post();
      ?>
          <article class="p-top-works__item">
            <a href="<?php echo esc_url(get_permalink()); ?>#works-<?php the_ID(); ?>" class="p-top-works__link">
              <h3 class="u-visually-hidden"><?php the_title(); ?></h3>
              <div class="p-top-works__thumbnail">
                  <?php the_post_thumbnail(); ?>
              </div>
              <!-- /.p-top-works__thumbnail -->
            </a>
            <!-- /.p-top-works__link -->
          </article>
          <!-- /.p-top-works__item -->
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p>表示する作品がありません。</p>
      <?php endif; ?>
    </div>
    <!-- /.p-top-works__list -->
    <a href="<?php echo esc_url(home_url('/works')); ?>" class="c-link">See More</a>
    <!-- /.c-link -->
  </div>
</section>
<!-- /.p-top-works -->
<section class="p-top-news">
  <div class="l-wrapper">
    <h2 class="c-heading">News</h2>
    <!-- /.c-heading -->
    <?php
    $args = array(
      'post_type'      => 'news',
      'posts_per_page' => 3,
      'orderby'        => 'date',
      'order'          => 'DESC'
    );
    $query = new WP_Query($args);
    ?>

    <div class="p-news__list">
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <article class="p-news__item">
            <a href="<?php the_permalink(); ?>" class="p-news__link">
              <h3 class="p-news__title"><?php the_title(); ?></h3>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news__date">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
            </a>
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p class="p-news__no-items">現在、ニュースはありません。</p>
      <?php endif; ?>
    </div>
    <!-- /.p-news__list -->

    <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-link">See More</a>
    <!-- /.c-link -->
  </div>
</section>
<!-- /.p-top-news -->
<?php get_footer(); ?>
