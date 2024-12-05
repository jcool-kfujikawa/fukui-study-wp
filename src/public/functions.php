<?php

  // 投稿者アーカイブを無効化する
  add_filter( 'author_rewrite_rules', '__return_empty_array' );

  function disable_author_archive() {
    if( isset($_GET['author']) || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
      wp_redirect( home_url() );
      exit;
    }
  }

  add_action('init', 'disable_author_archive');

  // Contact Form 7の自動pタグ挿入を無効化
  add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
  function wpcf7_autop_return_false()
  {
      return false;
  }

  // サムネイル画像を有効化
  add_theme_support('post-thumbnails');

  // デフォルトの投稿を非表示にする
  function remove_menus () {
    global $menu;
    remove_menu_page( 'edit.php' ); // 投稿を非表示
  }
  add_action('admin_menu', 'remove_menus');

  add_action( 'init', 'create_post_type' );

  function create_post_type() {

    register_post_type(
      'news',
      array(
        'label' => 'News',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array(
          'title',
          'editor',
          'thumbnail',
          'revisions',
        ),
      )
    );

    register_post_type(
      'works',
      array(
        'label' => 'Works',
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'supports' => array(
          'title',
          'editor',
          'thumbnail',
          'revisions',
        ),
      )
    );
  }

  // Worksの詳細ページを無効化
  function disable_single_works() {
    if (is_singular('works')) {
      wp_redirect(home_url('/works/'));
      exit;
    }
  }
  add_action('template_redirect', 'disable_single_works');
  
  // Newsのページネーション設定
  function custom_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('news')) {
      $query->set('posts_per_page', 1);
    }
  }
  add_action('pre_get_posts', 'custom_pre_get_posts');
