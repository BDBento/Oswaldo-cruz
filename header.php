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
          <?php
          if ( function_exists('the_custom_logo') ) {
            the_custom_logo();
          }
          ?>
        </div>

        <nav class="menu-nav">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-principal', // use a MESMA key registrada no functions.php
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
