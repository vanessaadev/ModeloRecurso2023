<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo">A INTERSETORIALIDADE E A INTERINSTITUCIONALIDADE COMO NCORAS DO ATENDIMENTO SOCIOEDUCATIVO: CONSIDERAÇÕES SOBRE O ATENDIMENTO DOS ADOLESCENTES EM CUMPRIMENTO DE MEDIDAS SOCIOEDUCATIVA EM MEIO ABERTO NA EDUCAÇÃO, SAÚDE E ASSISTÊNCIA SOCIAL.</h2>
                        <hr>
                        <br>


                        <p>Ao tratar do SINASE precisamos considerar o princípio da incompletude institucional e a integralidade entre as ações que compõe a intersetorialidade que, por sua vez:</p>

                        <ul class="none">
                            <li class="wow fadeInLeft"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Visa a oferta ampliada de serviços e ações das políticas setoriais para o adolescente autor de ato infracional;</li>
                            <li class="wow fadeInLeft"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Se materializa nas intervenções em conjunto dos diversos profissionais do Sistema Socioeducativo.</li>
                        </ul>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O SINASE não se trata de uma política de caráter setorial, associada unicamente a uma área das políticas sociais. A INTERSETORIALIDADE se faz imprescindível a partir da incompletude institucional.</p>
                            </div>
                        </div>

                        <p>A proteção integral só se efetiva com ação complementar das diversas políticas públicas. Portanto, devem-se articular os demais programas e serviços que têm por objetivo o atendimento aos direitos dos adolescentes: assistência social, defesa jurídica, saúde, trabalho, escolarização, profissionalização, lazer, esporte, cultura e outros.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O desafio é romper com o paradigma da INSTITUIÇÃO TOTAL, pelo da incompletude institucional, haja vista que se faz necessário à articulação de políticas, serviços, áreas e competências, em virtude da política de direitos ser de natureza transversal.</p>
                            </div>
                        </div>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Faz-se IMPORTANTE ressaltar a responsabilidade DOS GESTORES, na promoção dessa articulação, para assegurar os direitos dos/as adolescentes em cumprimento de medidas.</p>
                            </div>
                        </div>

                        <p>Como observamos, a intersetorialidade e interinstitucionalidade são fundamentais para o fortalecimento do Sistema de Atendimento Socioeducativo, em qualquer um dos âmbitos. Partindo dessa premissa, traremos a seguir algumas pontuações sobre o atendimento aos adolescentes em cumprimento de medida socioeducativa relativa às principais políticas públicas setoriais: Educação, Saúde e Assistência Social.</p>


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
                <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>