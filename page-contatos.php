<?php
/**
 * Template Name: Contatos
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
    <section class="contatos-section-cabecario">
        <div class="container">
            <h1>Contato</span></h1>
        </div>
    </section>

    <section class="contatos-section-main">


        <div class="container contatos-main-canais">


            <div class="contatos-main-card contatos-main-card_1">
                <div class="contatos-main-card-image" style="height: 15px;">
                    <img style="position: relative;top: -70px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/circleendereco.svg" alt="Telefone do Laboratório Oswaldo Cruz">
                </div>
                <div class="contatos-main-card-content">
                    <h2>Endereço</h2>
                    <p><strong>Rua:</strong> Maracajú, 937 - Centro</p>
                    <p><strong>CEP:</strong> 79002-211 - Campo Grande</p>

                    <h3>Horário de Funcionamento:</h3>
                    <p><strong>Segunda a Sexta:</strong> 06:30 às 18:00</p>
                    <p><strong>Sábado:</strong> 07:00 às 11:00</p>
                </div>
            </div>

            <div class="contatos-main-card contatos-main-card_2">
                <div class="contatos-main-card-image" style="height: 15px;">
                    <img style="position: relative;top: -70px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/circleatendimento.svg" alt="Telefone do Laboratório Oswaldo Cruz">
                </div>
                <div class="contatos-main-card-content">
                    <h2>Contato</h2>
                    <p><strong>E-mail:</strong> contato@oswaldocruzms.ms.gov.br</p>

                    <h3>Telefones:</h3>
                    <p>(67) 3383-4838</p>
                    <p>(67) 99965-4885</p>
                </div>
            </div>

        </div>

        <div class="container contatos-main-mapa">
            <h2>Localização</h2>
            <div class="contatos-main-mapa-embed">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.4862632634283!2d-54.58982302492987!3d-20.468208986153736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecefc6f6f5b6b7%3A0x6d3e7c4f4e8b4e0!2sLaborat%C3%B3rio%20Oswaldo%20Cruz!5e0!3m2!1spt-BR!2sbr!4v1696357974865!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

        <!-- FORM / FALE CONOSCO -->
        <div class="container contatos-main-form">
            <div class="contatos-form-card">
                <h2>Fale Conosco</h2>
                <p>Envie suas dúvidas, elogios e/ou reclamações que teremos imenso prazer em atendê-los!</p>


                <?php if (isset($_GET['enviado']) && $_GET['enviado'] === 'sucesso') : ?>
                    <div class="contatos-form-sucesso" id="contatos-form-sucesso">
                        Mensagem enviada com sucesso. Em breve entraremos em contato.
                    </div>
                <?php endif; ?>

                <form
                    class="contatos-form"
                    action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                    method="post">
                    <?php wp_nonce_field('fale_conosco_nonce', 'fale_conosco_nonce_field'); ?>

                    <input type="hidden" name="action" value="fale_conosco_enviar">

                    <div class="contatos-form-group">
                        <input type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="contatos-form-group">
                        <input type="email" name="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="contatos-form-group">
                        <textarea name="mensagem" rows="4" placeholder="Como podemos ajudar?" required></textarea>
                    </div>

                    <button type="submit" class="btn-contatos-enviar">Enviar</button>
                </form>

            </div>
        </div>

    </section>
</main>
<?php get_footer(); ?>