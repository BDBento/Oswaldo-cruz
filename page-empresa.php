<?php

/**
 * Template Name: Empresa
 * 
 * @package Wordpress
 * @author Bruno Bento
 * @license GPL-2.0+
 * @since 1.0.0
 * Description: Página institucional da empresa.
 * 
 */
get_header(); ?>

<main>
    <section class="empresa-section-cabecario">
        <div class="container">
            <h1>Saiba um pouco mais sobre a história do Laboratório <span>Oswaldo Cruz.</span></h1>
            <p>Conheça mais sobre a nossa história, desde a construção de todos os pilares à evolução e a busca constante pela excelência. Assista o nosso vide-o institucional.</p>
        </div>
    </section>
    <section class="empresa-section-main">
        <div class="container empresa-main-tragetoria">
            <div class="empresa-main-card empresa-main-card_1 ">
                <div class="empresa-main-card-content">
                    <h2>A HISTÓRIA</h2>
                    <p>Foi em abril de 1974, na rua Rui Barbosa, quase esquina com a Antônio Maria Coelho, que um grupo de competentes profissionais da área da saúde, ambicionou a criação de uma empresa na qual fosse possível aliar agilidade, responsabilidade e muito profissionalismo para oferecer a todos o que havia na época de mais moderno e confiável em termos de serviços laboratoriais de análises clínicas.</p>
                </div>
                <div class="empresa-main-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empresa-icon-1.png" alt="História do Laboratório Oswaldo Cruz">
                </div>
            </div>
            <div class="empresa-main-card empresa-main-card_2">
                <div class="empresa-main-card-content">
                    <h2>A EVOLUÇÃO</h2>
                    <p>O espírito inovador e audacioso que estava presente desde a fundação da antiga sede, há quarenta anos atrás, frutificou e depois de onze anos, em 1985, proporcionou a construção da nossa base atual na Rua Maracaju, 937 e também tornou o Laboratório Oswaldo Cruz sinônimo de qualidade em exames laboratoriais segundo médicos e empresas em Mato Grosso do Sul.</p>
                </div>
                <div class="empresa-main-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empresa-icon-2.png" alt="Evolução do Laboratório Oswaldo Cruz">
                </div>
            </div>
            <div class="empresa-main-card empresa-main-card_3">
                <div class="empresa-main-card-content">
                    <h2>A BUSCA PELA EXCELÊNCIA</h2>
                    <p>Estamos equipados com sistemas automatizados de última geração, com os quais nossos profissionais contam para garantir extrema qualidade e detalhes nos exames laboratoriais que serão muito úteis ao seu médico na formulação de diagnósticos confiáveis. Proporcionamos também, caso seja necessário, a entrega de laudos com resultados, no mesmo dia, para exames de rotina e de 90% dos exames considerados especiais.</p>
                </div>
                <div class="empresa-main-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empresa-icon-3.png" alt="Busca pela Excelência do Laboratório Oswaldo Cruz">
                </div>
            </div>
            <div class="empresa-main-card empresa-main-card_4">
                <div class="empresa-main-card-content">
                    <h2>A CONSTANTE EVOLUÇÃO</h2>
                    <p>Nosso foco principal é, em primeiro lugar, a sua satisfação, aliada também à qualidade e segurança dos nossos laudos. Por isso, investimos constantemente na capacitação de colaboradores, aquisição de equipamentos, certificações e softwares de gerenciamento de laudos laboratoriais e disponibilização de resultados também pela internet, para garantir a você e sua família sempre o melhor e mais ágil serviço de análises clínicas.</p>
                </div>
                <div class="empresa-main-card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/empresa-icon-4.png" alt="Constante Evolução do Laboratório Oswaldo Cruz">
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>