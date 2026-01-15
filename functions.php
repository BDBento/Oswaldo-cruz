<?php
/**
 * Funções do tema Oswaldo Cruz
 */

if ( ! defined('ABSPATH') ) exit;

/* =========================
   Setup do tema
========================= */
function oswaldocruz_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_theme_support('custom-logo', array(
    'height'      => 58,
    'width'       => 325,
    'flex-height' => true,
    'flex-width'  => true,
  ));

  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'oswaldocruz'),
  ));
}
add_action('after_setup_theme', 'oswaldocruz_setup');

/* =========================
   Enfileirar CSS/JS
========================= */
function oswaldocruz_scripts() {

  // Bootstrap 5.3 (CDN)
  wp_enqueue_style(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    array(),
    '5.3.3'
  );

  // CSS do tema
  wp_enqueue_style('oswaldocruz-style', get_stylesheet_uri(), array('bootstrap'), null);
  wp_enqueue_style('oswaldocruz-fonts', get_template_directory_uri() . '/assets/fonts.css', array(), null);
  wp_enqueue_style('oswaldocruz-header', get_template_directory_uri() . '/assets/css/header.css', array(), null);
  wp_enqueue_style('oswaldocruz-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), null);
  wp_enqueue_style('oswaldocruz-main', get_template_directory_uri() . '/assets/css/main.css', array(), null);

  // Bootstrap JS (bundle com Popper)
  wp_enqueue_script(
    'bootstrap',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    array(),
    '5.3.3',
    true
  );

  // JS do tema (sem jQuery)
  wp_enqueue_script(
    'oswaldocruz-main',
    get_template_directory_uri() . '/assets/js/main.js',
    array('bootstrap'),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'oswaldocruz_scripts');

/* =========================
   Admin bar (opcional)
========================= */
add_action('init', function () {
  if ( is_user_logged_in() ) {
    show_admin_bar(true);
  }
});




/* ============================
   Fale Conosco – Envio de Email
============================ */

add_action('admin_post_nopriv_fale_conosco_enviar', 'handle_fale_conosco');
add_action('admin_post_fale_conosco_enviar', 'handle_fale_conosco');

function handle_fale_conosco() {

  // Segurança (nonce)
  if (
    ! isset($_POST['fale_conosco_nonce_field']) ||
    ! wp_verify_nonce($_POST['fale_conosco_nonce_field'], 'fale_conosco_nonce')
  ) {
    wp_die('Falha de segurança.');
  }

  // Sanitização
  $nome     = sanitize_text_field($_POST['nome'] ?? '');
  $email    = sanitize_email($_POST['email'] ?? '');
  $mensagem = sanitize_textarea_field($_POST['mensagem'] ?? '');

  if ( empty($nome) || empty($email) || empty($mensagem) ) {
    wp_die('Todos os campos são obrigatórios.');
  }

  // Destinatário e assunto
  $to      = 'contato@oswaldocruzms.ms.gov.br';
  $subject = 'Fale Conosco / Dúvidas';

  // Corpo do email
  $body = "
  Nova mensagem recebida pelo site:

  Nome: {$nome}
  E-mail: {$email}

  Mensagem:
  {$mensagem}
  ";

  // Headers
  $headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    'Reply-To: ' . $nome . ' <' . $email . '>',
  );

  // Envio
  wp_mail($to, $subject, $body, $headers);

  // Redireciona de volta com status
  wp_redirect(
    add_query_arg(
      'enviado',
      'sucesso',
      wp_get_referer()
    )
  );
  exit;
}