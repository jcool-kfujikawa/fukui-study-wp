<header class="l-header">
  <div class="l-wrapper l-header__inner">
    <h1 class="l-header-logo">
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
    </h1>
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
  </div>
  <!-- /.l-header__inner -->
</header>
<!-- /.l-header -->