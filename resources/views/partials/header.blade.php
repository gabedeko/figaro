<header class="banner">
  <?php/*
    <div class="container">
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <nav class="nav-primary">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
  */ ?>
  
  <nav class="figaro-nav navbar navbar-expand-lg fixed-top
  <?php /*Add class .not-home if page is not homepage*/ ?>
  <?php /* if(!is_front_page() && !is_home()): ?>
  not-home
  <?php endif; */ ?>
  ">
  <div class="figaro-nav-container container-fluid">
    <a class="navbar-brand figaro-logo" href="/">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse figaro-collapse" id="navbarNav">
      <ul class="navbar-nav figaro-nav-list">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/facials">Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/store">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
