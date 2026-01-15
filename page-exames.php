<?php

/**
 * Template Name: Exames
 * 
 * @package Wordpress
 * @author Bruno Bento
 * @license GPL-2.0+
 * @since 1.0.0
 * Description: Página institucional da empresa.
 * 
 */
get_header(); ?>
<main></main>
<section class="exames-section-cabecario">
    <div class="container">
        <h1>Tipos de exames oferecidos no Laboratório <span>Oswaldo Cruz.</span></h1>
        <p>Todos os exames com respaldo do PNCQ (Programa Nacional de Controle da Qualidade) da SBAC (Sociedade Brasileira de Análises Clínicas) da SBPC (Sociedade Brasileira de Patologia Clínica) e CONTROLLAB – <strong>Controle de Qualidade para Laboratórios.</strong></p>
    </div>
</section>

<section class="exames-section-main">
    <div class="container exames-main-lista">
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hematologia.png" alt="Hematologia">
                <p>Hematologia</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/glicemia.png" alt="Glicemia em Jejum">
                <p>Glicemia em Jejum</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/micologia.png" alt="Perfil Lipídico">
                <p>Micologia</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Bioquímica">
                <p>Bioquímica</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Imunologia">
                <p>Imunologia</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Urinálise">
                <p>Urinálise</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Parasitologia">
                <p>Parasitologia</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Teste de DNA (paternidade)">
                <p>Teste de DNA (paternidade)</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Sexagem Fetal">
                <p>Sexagem Fetal</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Teste do Pezinho">
                <p>Teste do Pezinho</p>
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bioquimica.png" alt="Toxicológico do cabelo e Urina">
                <p>Toxicológico do cabelo e Urina</p>
            </li>
        </ul>
    </div>
</section>
<section class="lista-de-exames">
    <div class="container">
        <div class="exames-accordion">

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE ESCARRO:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>O paciente deve colher o material pela manhã , em jejum, antes de escovar os dentes e após lavar a boca com bastante água.</li>
                        <li>Deve respirar fundo de 8 a 10 vezes e tossir profundamente.</li>
                        <li>Escarrar diretamente dentro do pote. Cuidado para o escarro não escorrer para fora.</li>
                        <li>Enviar o material para o laboratório, logo após a coleta.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE ESPERMA:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>Abstinência sexual de 03 a 05 dias ou conforme orientação médica.</li>
                        <li>Abstinência sexual (relação sexual, masturbação e ejaculação noturna )de 3 a 5 dias ou conforme orientação médica.</li>
                        <li>Coleta de material preferencialmente no laboratório, em frasco de boca larga e estéril.</li>
                        <li>Colher todo material ejaculado.</li>
                        <li>A coleta deve ser realizada através de ato de masturbação, sem a utilização de qualquer tipo de lubrificante.Colher todo material ejaculado.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE URINA TIPO 1 (EAS) E UROCULTURA:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>Colher preferencialmente no laboratório a 1ª urina da manhã ou com intervalo de 4 horas entre as micções.</li>
                        <li>Fazer higiene da genitália com água e sabão, secar.</li>
                        <li>Para urina jato médio, desprezar o 1º jato de urina e coletar o jato do meio diretamente no frasco.</li>
                        <li>Para urina primeiro jato, colher os primeiros 20ml de urina (não ultrapassar este volume).</li>
                        <li>Assim que o material for colhido, enviar para o laboratório no tempo máximo de 40 minutos.</li>
                        <li>Usar frasco fornecido pelo laboratório.</li>
                        <li>Para crianças com menos de 3 anos de idade a higiene e a coleta devem ser obrigatoriamente realizadas no laboratório.</li>
                        <li>Não passamos cateter (sonda) no cliente.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE URINA DE 24 HORAS:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>Cliente deverá informar peso e altura atualizados no momento do atendimento.</li>
                        <li>Marcar o horário do início da coleta e do término, os volumes devem ser rigorosamente coletados, sem nenhuma perda de material.</li>
                        <li>Relacionar o uso de medicamentos em caso da impossibilidade de suspensão.</li>
                        <li>Não coletar urina para exame tipo I como parte da urina de 24 horas.</li>
                    </ul>
                    <p><span style="color: #9a3156;"><strong>Técnica de coleta:</strong></span></p>
                    <ul>
                        <li>Desprezar a primeira urina da manhã e marcar o horário.</li>
                        <li>Coletar todas as urinas do dia e da noite, em um ou mais recipientes, colher a primeira urina do dia seguinte à mesma hora em que jogou fora a urina do dia anterior.</li>
                        <li>Conservar sempre o frasco na geladeira.</li>
                        <li>Trazer toda urina colhida ao laboratório e não apenas uma amostra.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE URINA PARA TESTE DE COCAÍNA/MACONHA:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <p>A coleta da urina deve ser assistida por um técnico do laboratório. Pode-se utilizar a amostra de urina coletada em qualquer hora do dia.</p>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE URINA PARA EXAMES TOXICOLÓGICOS:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>A amostra deve ser coletada no início ou final da jornada de trabalho.</li>
                        <li>Retirar o uniforme.</li>
                        <li>Não coletar no local da atividade laboral.</li>
                        <li>Lavar as mãos e a genitália com água e sabão.</li>
                        <li>Enxugar com toalha descartável.</li>
                        <li>Coletar o material para o frasco âmbar e fechar.</li>
                        <li>Transportar para o laboratório.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE URINA PARA HEMÁCIAS DISMÓRFICAS, PROTEÍNA DE BENCE JONES E QUALQUER DOSAGEM EM AMOSTRA ISOLADA DE URINA:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <p>Fazer higiene íntima prévia e coletar toda a primeira urina da manhã, sem desprezar o primeiro jato.</p>
                </div>
            </details>


            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA DE 1º JATO URINÁRIO:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <p>Fazer higiene íntima prévia e coletar somente o primeiro jato urinário, um volume bem pequeno (Ex. uma colher de sopa).</p>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA PARA PESQUISA DE SANGUE OCULTO:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">

                    <p><span style="color: #9a3156;"><strong>Para sangue oculto realizado após dieta, evitar 3 dias antes da coleta de fezes:</strong></span></p>
                    <p><span style="color: #9a3156;"><strong>Carnes:</strong></span>&nbsp;de qualquer tipo (inclusive caldos, extratos ou molhos que contenham, lingüiça, salame, salsicha, presunto , etc).<br><span style="color: #9a3156;"><strong>Legumes:</strong></span>&nbsp;rabanete, nabo, beterraba, cenoura, tomate, pepino, ervilha, repolho e feijão de qualquer tipo.<br><span style="color: #9a3156;"><strong>Vegetais:</strong></span>&nbsp;alface, agrião, brócolis e folhas em geral.<br><span style="color: #9a3156;"><strong>Frutas:</strong></span>&nbsp;acerola, banana, laranja e limão.<br><span style="color: #9a3156;"><strong>Outros:</strong></span>&nbsp;gema de ovo e chocolates.</p>
                    <ul>
                        <li>Antes de coletar as fezes, se necessário, urinar no vaso sanitário para evitar a contaminação do material. Em casos de crianças utilizar coletor de urina, se necessário.</li>
                        <li>Evitar o uso de laxantes, contraste oral ( utilizado em exames radiológicos) e supositórios nos 3 dias que antecedem ao exame e no dia da coleta.</li>
                        <li>Defecar em vasilhame limpo e seco.</li>
                        <li>Não colher durante o período menstrual ou quando houver hemorróidas sangrantes. Aguardar no mínimo 48 horas após o sangramento ter cessado.</li>
                        <li>É recomendado não ingerir bebida alcoólica nos três dias que antecedem ao exame.</li>
                        <li>Medicamentos que podem causar sangramento gastrointestinal e devem ter o seu uso suspenso por 3 dias antes da coleta ou conforme orientação médica, pode ser suspenso após orientação médica: aspirina, AAS, anti-inflamatórios não esteróide (ex.: diclofenaco), anticoagulantes, colchicina, reserpina, vitamina C, iodo, sulfato ferroso, contraste radiológico.</li>
                        <li>No 4º dia coletar uma porção de fezes no frasco e encaminhar ao laboratório até 01 hora após coleta. (pode-se conservar as fezes até 12 horas sob refrigeração).</li>
                    </ul>

                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">COLETA SANGUÍNEA:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">

                    <p><span style="color: #9a3156;"><strong>Triglicérides e frações do colesterol:</strong></span><br>Jejum obrigatório de 12 horas e não consumir bebidas alcoólicas 72 horas antes do exame.<br>Evitar esforço físico antes da coleta de sangue.<br><span style="color: #9a3156;"><strong>Glicose (Jejum):</strong></span><br>Até 3 anos de idade, jejum mínimo necessário de 3 horas.<br>De 3 a 8 anos de idade, jejum mínimo necessário de 4 horas.<br>Acima de 8 anos de idade, jejum mínimo necessário de 8 horas ou C.O.M.<br><span style="color: #9a3156;"><strong>Glicose pós-prandial:</strong></span><br>Coletar 2 horas após o início da refeição(almoço) ou conforme solicitação médica. O tempo deve ser cronômetrado a partir do início da refeição.<br>Após o término da refeição determinada, não se alimentar mais até a coleta do exame.<br><span style="color: #9a3156;"><strong>PSA Total e Livre:</strong></span><br>Recomendações:</p>
                    <ul>
                        <li>Não fazer exercícios em bicicletas pelo menos 2 dias antes do exame.</li>
                        <li>Após o exame de toque retal ou sondagens de uretra, aguardar pelo menos 3 dias para colher o sangue.</li>
                        <li>Após ultrassons aguardar uma semana.</li>
                        <li>Após colonoscopia ou biópsias de próstata, esperar 30 dias para a coleta de sangue.</li>
                        <li>Recomenda-se abstinência sexual de 2 dias antes de realizar o exame.</li>
                    </ul>


                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">CULTURA PARA BETA-HEMOLÍTICO (STREPTOCOCCUS GRUPO B):</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>Nos casos de coletas de secreção vaginal ou anal, pode-se urinar, defecar e tomar banho.</li>
                        <li>Não fazer uso de antissépticos, medicações tópicas e uso de antibiótico oral.</li>
                        <li>Caso o cliente já esteja fazendo o uso destes medicamentos, deve-se fazer a coleta 48 horas após o término do medicamento tópico e 7 dias no caso de antibiótico oral.</li>
                        <li>Manter abstinência de relação sexual nas últimas 24 horas anteriores a coleta.</li>
                        <li>No período anterior à coleta, não usar ducha ginecológica.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">FEZES PARA EPF (EXAME PARASITOLÓGICO DE FEZES):</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">

                    <ul>
                        <li>Não usar laxantes para colher as fezes (só a critério médico).</li>
                        <li>Urinar no vaso sanitário antes da evacuação para não contaminar as fezes com urina.</li>
                        <li>Colher uma porção de fezes em frasco apropriado e trazer imediatamente ao laboratório.</li>
                        <li>Se não puder entregar no mesmo dia, manter em geladeira até o dia seguinte.</li>
                    </ul>
                    <p><span style="color: #9a3156;"><strong>Instruções de coleta para fezes com conservante</strong></span></p>
                    <ul>
                        <li>Não usar laxantes para colher as fezes.</li>
                        <li>Urinar no vaso sanitário antes da evacuação para não contaminar as fezes com urina.</li>
                        <li>Colocar uma porção no frasco, por três dias, de preferência alternados, no mesmo frasco com conservante e misturar.</li>
                        <li>Não precisa guardar na geladeira.</li>
                    </ul>

                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">MICOLÓGICO DIRETO E CULTURA PARA FUNGOS:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">
                    <ul>
                        <li>O paciente deve fazer a coleta antes do uso de qualquer medicamento que contenha antifúngico, seja esse medicamento de uso oral ou tópico. Após o uso destes medicamentos , deve aguardar, no mínimo, 15 dias para que se realize a coleta ou conforme orientação médica.</li>
                        <li>Pomadas e cremes comuns (lavar e realizar a coleta no dia seguinte).</li>
                        <li>Esmalte (retirar e voltar após no mínimo 3 dias para a coleta).</li>
                        <li>Não lavar o couro cabeludo ou região da barba no dia da coleta.</li>
                    </ul>
                </div>
            </details>

            <details class="exame-item">
                <summary>
                    <span class="exame-titulo">PROVA COPROLÓGICA FUNCIONAL:</span>
                    <span class="exame-tag">[orientação]</span>
                </summary>
                <div class="exame-conteudo">

                    <ul>
                        <li>Importante informar a idade.</li>
                        <li>Criança ate 12 anos não necessita de dieta.</li>
                        <li>Para maiores de 12 anos, manter dieta habitual com as recomendações descritas abaixo, ou conforme orientação medica.</li>
                    </ul>
                    <p><span style="color: #9a3156;"><b>DIETA:</b></span></p>
                    <ul>
                        <li>Manter dieta habitual (dia a dia do cliente) sendo recomendável nas últimas 72 horas (3 dias) antes da coleta que o mesmo inclua nas refeições principais (almoço e/ou jantar) quantidades usuais de carne, batata e feijão e, nas outras refeições (café da manhã, lanche da tarde), manteiga e leite integral.</li>
                        <li>No 4º dia colher todo o volume fecal da primeira evacuação do dia e trazer ao laboratório imediatamente.</li>
                        <li>Usar recipientes limpos e secos.</li>
                        <li>Evitar contaminação por urina, água, gordura ou outro elemento.</li>
                        <li><span style="color: #9a3156;">Recomendável suspender medicação laxante e/ou supositórios nos 3 dias anteriores e durante a coleta ou conforme orientação médica.</span></li>
                        <li><span style="color: #9a3156;">Evitar o uso de bebidas gasosas (ex: refrigerantes,água gaseificada) e alcoólicas durante os 3 dias que antecedem a coleta.</span></li>
                    </ul>
                    <p>&nbsp;</p>

                </div>
            </details>

        </div>
    </div>
</section>


</main>
<?php get_footer(); ?>