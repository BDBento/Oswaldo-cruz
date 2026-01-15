<?php

/**
 * Template Name: Certificacoes
 *
 * @package WordPress
 * @author Bruno Bento
 * @license GPL-2.0+
 * @since 1.0.0
 */

get_header(); ?>

<main class="certificacoes-page">

    <!-- CABEÇALHO -->
    <section class="certificacoes-hero">
        <div class="container">
            <h1>Certificações</h1>
            <p>Aprimoramento e Qualidade de Serviços</p>
        </div>
    </section>

    <!-- CONTEÚDO -->
    <section class="certificacoes-content">
        <div class="bg-rosa-claro">
            <div class="container">
                <!-- BLOCO 1 -->
                <article class="cert-item">
                    <div class="cert-text">
                        <h2>Sistema Nacional de Acreditação</h2>
                        <p>
                            Temos como filosofia a busca constante e incansável da qualidade. Para garantir a qualidade
                            dos nossos serviços mantemos o PNCQ (Programa Nacional de Controle da Qualidade) da SBAC
                            (Sociedade Brasileira de Análises Clínicas) pelo qual os exames (serviços) e a equipe são
                            avaliados mensalmente e recebemos, todos os meses, uma avaliação de desempenho excelente.
                        </p>
                    </div>
                    <div class="cert-media">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/dicq.png'); ?>" alt="Sistema Nacional de Acreditação">
                    </div>
                </article>
            </div>
        </div>
        <!-- BLOCO 2 (inverte) -->

        <div class="bg-branco">
            <div class="container">
                <article class="cert-item is-reverse">
                    <div class="cert-media">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/celo-de-qualidade.png'); ?>" alt="Selo de Qualidade PNCQ">
                    </div>
                    <div class="cert-text">
                        <h2>A evolução</h2>
                        <p>
                            O Laboratório Oswaldo Cruz participa do Programa Nacional de Controle da Qualidade, da
                            Sociedade Brasileira de Análises Clínicas desde 1998. O laboratório participa do PROGRAMA
                            AVANÇADO em função da quantidade e complexidade da sua atividade.
                        </p>
                        <p>
                            O Controle Externo da Qualidade ou Ensaio de Proficiência – PRO-EX é constituído de uma série
                            de amostras-controle que o PNCQ envia, mensalmente, aos Laboratórios participantes como Ensaio
                            de Proficiência, para que eles venham a conhecer a sua precisão e exatidão.
                        </p>
                        <p>
                            O Laboratório participante recebe, analisa as amostras-controle e envia os resultados para o
                            PNCQ que, com os resultados de todos os laboratórios participantes, realiza os cálculos estatísticos.
                        </p>
                    </div>
                </article>
            </div>
        </div>

        <div class="bg-rosa-claro">
            <div class="container">
                <!-- BLOCO 3 -->
                <article class="cert-item">
                    <div class="cert-text">
                        <h2>Sistema Nacional de Acreditação</h2>
                        <p>
                            Temos como filosofia a busca constante e incansável da qualidade. Para garantir a qualidade
                            dos nossos serviços mantemos o PNCQ (Programa Nacional de Controle da Qualidade) da SBAC
                            (Sociedade Brasileira de Análises Clínicas) pelo qual os exames (serviços) e a equipe são
                            avaliados mensalmente e recebemos, todos os meses, uma avaliação de desempenho excelente.
                        </p>
                    </div>
                    <div class="cert-media">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/sistema-nacional-de-acreditacao.png'); ?>" alt="Consagração Pública Brasileira">
                    </div>
                </article>
            </div>
        </div>
        <div class="bg-branco">
            <div class="container">

                <!-- BLOCO 4 -->
                <article class="cert-item cert-item--footer">
                    <div class="cert-media">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/controlab.png'); ?>" alt="Controllab">
                    </div>
                    <div class="cert-text">
                        <h2>Controllab – Controle de Qualidade para Laboratórios</h2>
                        <p>
                            O Laboratório Oswaldo Cruz conta com a certificação do Controllab nos serviços de Ensaios de
                            Proficiência, Controle Interno, Calibração, Indicadores e Treinamento.
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>