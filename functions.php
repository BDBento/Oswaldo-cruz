<?php

/**
 * Funções do tema Oswaldo Cruz
 */

if (! defined('ABSPATH')) exit;

/* =========================
   Setup do tema
========================= */
function oswaldocruz_setup()
{
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
function oswaldocruz_scripts()
{

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
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'oswaldocruz_scripts');

/* =========================
   Admin bar (opcional)
========================= */
add_action('init', function () {
  if (is_user_logged_in()) {
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
  $body = "Nova mensagem recebida pelo site:\n\n";
  $body .= "Nome: {$nome}\n";
  $body .= "E-mail: {$email}\n\n";
  $body .= "Mensagem:\n{$mensagem}\n";

  // Headers
  $headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    'Reply-To: ' . $nome . ' <' . $email . '>',
  );

  // Envio
  wp_mail($to, $subject, $body, $headers);

  // Redirect com âncora (não sobe a página)
  $ref = wp_get_referer();
  if ( ! $ref ) {
    $ref = home_url('/');
  }

  $url = add_query_arg('enviado', 'sucesso', $ref);
  $url .= '#contatos-form-sucesso';

  wp_redirect( $url );
  exit;
}



/* ============================
   Dúvidas (Home) – Envio de Email
============================ */
add_action('admin_post_nopriv_duvida_home_enviar', 'handle_duvida_home');
add_action('admin_post_duvida_home_enviar', 'handle_duvida_home');

function handle_duvida_home()
{

  if (
    ! isset($_POST['duvida_home_nonce_field']) ||
    ! wp_verify_nonce($_POST['duvida_home_nonce_field'], 'duvida_home_nonce')
  ) {
    wp_die('Falha de segurança.');
  }

  $email    = sanitize_email($_POST['email'] ?? '');
  $mensagem = sanitize_textarea_field($_POST['mensagem'] ?? '');

  if (empty($email) || empty($mensagem)) {
    wp_die('Todos os campos são obrigatórios.');
  }

  $to      = 'contato@oswaldocruzms.ms.gov.br';
  $subject = 'Dúvidas (Home)';

  $body = "
  Nova dúvida recebida pela HOME:

  E-mail: {$email}

  Mensagem:
  {$mensagem}
  ";

  $headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    'Reply-To: <' . $email . '>',
  );

  wp_mail($to, $subject, $body, $headers);

  $ref = wp_get_referer();
  if (! $ref) $ref = home_url('/');

  $url = add_query_arg('duvida', 'sucesso', $ref);

  // garante que volta para o formulário (âncora)
  $url .= '#duvida-home';

  wp_redirect($url);
  exit;
}
