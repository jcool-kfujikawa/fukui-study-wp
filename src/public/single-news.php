<?php get_header(); ?>
<article class="p-news">
  <div class="l-wrapper">
    <div class="p-news-detail__heading">
      <h1 class="p-news-detail__title">
        <?php the_title(); ?>
      </h1>
      <!-- /.p-news-detail__title -->
      <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="p-news-detail__date">
        <?php echo get_the_date('Y.m.d'); ?>
      </time>
      <!-- /.p-news-detail__date -->
    </div>
    <!-- /.p-news-detail__heading -->

    <div class="p-news-detail__body">
      <?php the_content(); ?>
    </div>
    <!-- /.p-news-detail__body -->

    <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>" class="c-link">一覧に戻る</a>
    <!-- /.c-link -->
  </div>
</article>
<!-- /.p-news -->
<?php get_footer(); ?>
