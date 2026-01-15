<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Open Graph -->
  <meta property="og:title" content="Oswaldo Cruz" />
  <meta property="og:description" content="laboratorio de analises clinicas" />
  <meta property="og:image" content="https://www.oswaldocruzms.com.br/" />
  <meta property="og:url" content="https://www.oswaldocruzms.com.br/" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:site_name" content="Oswaldo Cruz" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Oswaldo Cruz" />
  <meta name="twitter:description" content="laboratorio de analises clinicas" />
  <meta name="twitter:image" content="https://www.oswaldocruzms.com.br/" />
  <meta name="twitter:site" content="@Oswaldo_Cruz" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <div class="menu-principal">
    <div class="container">
      <div class="menu-content">
        <div class="logo">
          <?php if ( function_exists('the_custom_logo') ) { the_custom_logo(); } ?>
        </div>

        <!-- BOTÃO MOBILE (novo) -->
        <button class="menu-toggle" type="button" aria-label="Abrir menu" aria-expanded="false">
          <span></span>
        </button>

        <!-- OVERLAY (novo) -->
        <div class="menu-overlay" aria-hidden="true"></div>

        <nav class="menu-nav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'container'      => false,
            'items_wrap'     => '%3$s',
            'fallback_cb'    => false,
          ));
          ?>
          <a href="https://www.oswaldocruzms.com.br/exames/" class="btn btn-banner" target="_blank" rel="noopener">
            Resultados Online
          </a>
        </nav>

      </div>
    </div>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const nav = document.querySelector('.menu-principal .menu-nav');
  const btn = document.querySelector('.menu-toggle');
  const overlay = document.querySelector('.menu-overlay');

  if (!nav || !btn || !overlay) return;

  const openMenu = () => {
    nav.classList.add('is-open');
    overlay.classList.add('is-open');
    btn.setAttribute('aria-expanded', 'true');
  };

  const closeMenu = () => {
    nav.classList.remove('is-open');
    overlay.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
  };

  btn.addEventListener('click', () => {
    nav.classList.contains('is-open') ? closeMenu() : openMenu();
  });

  overlay.addEventListener('click', closeMenu);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });
});

</script>