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
      <?php echo get_template_part('inc/header'); ?>