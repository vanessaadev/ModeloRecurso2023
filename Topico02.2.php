<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.2';
include('layout/header.php');
?>


<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <!-- Sub Título -->
                        <p class="SubTitulo"> ÁGUA QUE VAI </p>
                        <hr>

                        SAÚDE
A saúde é um direito constitucional, explícito no Art. 196 da Carta Magna. Com relação ao segmento da criança e do adolescente, a Lei nº 8.069/1990 trata do direito à saúde, em especial o acesso a cuidados de saúde de adolescentes em cumprimento de medidas socioeducativas, conforme preconizam os Art. 112 e 124.
O SUS através das suas leis orgânicas, e de suas diversas políticas, assumiu o compromisso sanitário para com as crianças, adolescentes e suas famílias.
A resolução do CONANDA, sob nº 119/2006, estabelece diretrizes primárias que direcionam o SUAS e o SUS como sistemas integrantes do SINASE, especificando no eixo 6.3.5 para a descrição das ações de saúde aos adolescentes, com destaque para aqueles do meio fechado.

Resolução CONANDA nº 119/2006 e documento específico disponíveis no material complementar.

Apenas em 2012, com a aprovação da Lei que institui o SINASE, o direito à saúde se regularizou legalmente no campo da socioeducação, estabelecendo no Capítulo V a previsão do direito à saúde integral dos adolescentes, evidenciando as questões relacionadas aos cuidados com a saúde mental.
A Nota Técnica Interministerial nº 42 inaugurou a regulamentação no Sistema Único de Saúde - SUS quanto às questões e peculiaridades do meio aberto, ampliando o alcance da Política Nacional de Atenção Integral à Saúde de Adolescentes em Conflito com a Lei - PNAISARI no Brasil.

Nota Técnica Interministerial nº 42/2020 disponível no material complementar.
Além da Nota Técnica, há outros documentos que tratam do atendimento no SUS aos adolescentes em cumprimento de medida socioeducativa. São eles:
Portaria nº 1.082/2014 - Política Nacional de Atenção Integral à Saúde de Adolescentes em Conflito com a Lei, em Regime de Internação e Internação Provisória (PNAISARI), incluindo-se o cumprimento de medida socioeducativa em meio aberto e fechado;
Portaria nº 493/2020 - Inclui procedimento na Tabela de Procedimentos, Medicamentos, Órteses, Próteses e Materiais Especiais do SUS.
Compreender a saúde de forma plural, ampla e não apenas biológica é fundamental para o processo de responsabilização do adolescente diante das consequências do ato infracional, e amplia a visão protetiva que o meio aberto tem sobre ele.



Segundo a Lei nº 12.594/2012, é dever dos programas socioeducativos promover atenção integral e amplo acesso ao SUS aos adolescentes em cumprimento de qualquer medida socioeducativa.
Considerando o exposto, cabe ressaltar, que a PNAISARI busca a articulação e a integração entre o SUS e o SUAS à luz do SINASE. Diante disso, tem como objetivos:
Garantir e promover a atenção integral à saúde de adolescentes em cumprimento de medida socioeducativa;
Organizar os serviços de saúde dentro dos princípios do SUS e do SINASE;
Desenvolver ações de promoção da saúde, prevenção de agravos e doenças e recuperação da saúde;
Cumprir a Constituição Federal, a Lei Orgânica da Saúde e o ECA;
Cumprir o princípio da INCOMPLETUDE INSTITUCIONAL.















A PNAISARI visa auxiliar a organização, articulação e oferta dos cuidados em saúde que já estão previstos nas normativas vigentes, mas precisavam de especificações. Ela não cria novas atribuições, porém elucida quais atividades são necessárias para que a referência e contra-referência entre saúde e assistência social já estruturais das políticas possam realmente ocorrer nos municípios.









A seguir, relacionaremos as principais atribuições do SUS com relação ao atendimento dos adolescentes em cumprimento de medidas socioeducativas:






















                        

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->
                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.3.php" class="btn btn-primary" role="button" aria-pressed="true"> <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>