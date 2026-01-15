<?php

/**
 * Template Name: Convenios
 *
 * @package WordPress
 */

get_header(); ?>

<main class="convenios-page">

    <section class="convenios-hero">
        <div class="container">
            <h1>Convênios atendidos pelo laboratório.</h1>
            <p>Aceitamos tanto os beneficiários locais, quanto os de outros estados, apresentar cartão da instituição e documento de identificação com foto.</p>

            <div class="convenios-cards">
                <div class="conv-card">
                    <div class="conv-card-icon" aria-hidden="true">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Circleendereco.png'); ?>" alt="">
                    </div>
                    <div class="conv-card-text">
                        <h3>Atendemos a diversos planos de saúde</h3>
                        <p>Para realizar seus exames pelo convênio, não se esqueça de apresentar o pedido médico em guia apropriada.</p>
                    </div>
                </div>

                <div class="conv-card">
                    <div class="conv-card-icon" aria-hidden="true">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Circlecard.png'); ?>" alt="">
                    </div>
                    <div class="conv-card-text">
                        <h3>Para agilizar o seu atendimento</h3>
                        <p>Não se esqueça de apresentar a carteirinha do plano e a carteira de identidade.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="convenios-lista">
        <div class="container">
            <div class="convenios-grid">

                <!-- SEUS CONVÊNIOS (os que você já separou) -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/bradesco_saude.webp'); ?>" alt="Bradesco Saúde">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/caixa_saude.webp'); ?>" alt="Caixa Saúde">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/cassems.webp'); ?>" alt="Cassems">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/correios.webp'); ?>" alt="Correios">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/eletrobras.webp'); ?>" alt="Eletrobras">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/br-pax-nacional.webp'); ?>" alt="Pax Nacional">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/unimed.webp'); ?>" alt="Unimed">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/geap.webp'); ?>" alt="Geap">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/cabesp.webp'); ?>" alt="Cabesp">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/embrapa.webp'); ?>" alt="Embrapa">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/plan-assiste.webp'); ?>" alt="Plan Assiste">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/servimed.webp'); ?>" alt="Servimed">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/sulamerica.webp'); ?>" alt="Sulamerica">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/fundacao-ufms.webp'); ?>" alt="Fundação UFMS">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/amil.webp'); ?>" alt="Amil">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/nipoassist.webp'); ?>" alt="Nipo Assist">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/notre-dame.webp'); ?>" alt="Notre Dame">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/unisaude-ms.webp'); ?>" alt="Unisaúde MS">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/fameh-mp.webp'); ?>" alt="Fameh MP">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/convenios/fadsmf.webp'); ?>" alt="FADSMF">

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>