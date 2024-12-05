<?php get_header(); ?>
<section class="p-works">
  <div class="l-wrapper--secondary">
    <h1 class="c-heading">Works</h1>
    <div class="p-works__list">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="p-works__item" id="works-<?php the_ID(); ?>">
          <div class="p-works__body">
            <h2 class="p-works__title"><?php the_title(); ?></h2>
            <div class="p-works__content">
              <?php the_excerpt(); ?>
            </div>
          </div>
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="p-works__thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
        </article>
      <?php endwhile; else : ?>
        <p>投稿が見つかりませんでした。</p>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
