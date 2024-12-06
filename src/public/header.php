<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sass勉強会用</title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>" rel="stylesheet" />
    <script src="<?php echo get_template_directory_uri() . '/assets/js/common.js'; ?>" defer></script>
    <script>
      function viewportSet() {
        var wsw = window.screen.width;
        if (wsw < 375) {
          document
            .querySelector("meta[name='viewport']")
            .setAttribute(
              "content",
              "width=375, user-scalable=no, target-densitydpi=device-dpi"
            );
        } else {
          document
            .querySelector("meta[name='viewport']")
            .setAttribute(
              "content",
              "width=device-width,initial-scale=1.0,viewport-fit=cover"
            );
        }
      }
      window.addEventListener("DOMContentLoaded", viewportSet, false);
      window.addEventListener("resize", viewportSet, false);
      window.addEventListener("orientationchange", viewportSet, false);
    </script>
  </head>
  <body>
  <div class="l-siteWrapper">
    <main>
    <header class="l-header">
      <div class="l-wrapper l-header__inner">
        <?php
          $logoTag = is_front_page() ? 'h1' : 'div';
        ?>
        <<?php echo $logoTag; ?> class="l-header-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header-logo__link">
            <figure class="l-header-logo__image">
              <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/logo.svg'); ?>"
                alt="My Work"
                width="121"
                height="27"
              />
            </figure>
            <!-- /.l-header-logo__image -->
          </a>
          <!-- /.l-header-logo__link -->
        </<?php echo $logoTag; ?>>
        <!-- /.l-header-logo -->
        <nav class="l-header-nav">
          <ul class="l-header-nav__list">
            <li class="l-header-nav__item">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="l-header-nav__link">About</a>
            </li>
            <li class="l-header-nav__item">
              <a href="<?php echo esc_url(home_url('/works')); ?>" class="l-header-nav__link">Works</a>
            </li>
            <li class="l-header-nav__item">
              <a href="<?php echo esc_url(home_url('/news')); ?>" class="l-header-nav__link">News</a>
            </li>
            <li class="l-header-nav__item">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-header-nav__link">Contact</a>
            </li>
            <li class="l-header-nav__item">
              <a href="#" class="l-header-nav__link">
                <figure class="l-header-nav__image">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/icon-instagram.svg'); ?>"
                    alt=""
                    width="21"
                    height="20"
                  />
                </figure>
                <!-- /.l-header-logo__image -->
              </a>
            </li>
          </ul>
          <!-- /.l-header-nav__list -->
        </nav>
        <!-- /.l-header-nav -->
      </・div>
      <!-- /.l-header__inner -->
    </header>
    <!-- /.l-header -->