<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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
    <div id="Inicio"></div>
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

                        <p class="Titulo">APRESENTAÇÃO</p>

                        <p>Seja bem-vindo(a) ao módulo 1 da Formação Técnica para a execução e acompanhamento das Medidas Socioeducativas do Estado do Ceará. Neste módulo faremos uma explanação sobre a Proteção Social para adolescentes em cumprimento de Medida Socioeducativa, suas previsões legais e o SUAS.</p>

                        <p>A proteção social para adolescentes em cumprimento de medida socioeducativa é um tema de extrema importância, envolvendo aspectos legais e práticas sociais voltadas para garantir o desenvolvimento integral desses jovens e sua reintegração na sociedade. As medidas socioeducativas são aplicadas a adolescentes que cometem atos infracionais, com o objetivo de promover sua responsabilização e ressocialização.</p>

                        <p>No Brasil, as medidas socioeducativas são regidas pelo Estatuto da Criança e do Adolescente (ECA), que estabelece diretrizes e princípios para a proteção integral dos adolescentes em conflito com a lei. O ECA prevê diversas medidas socioeducativas, tais como advertência, obrigação de reparar o dano, prestação de serviços à comunidade, liberdade assistida, semiliberdade e internação.</p>

                        <p>O Sistema Único de Assistência Social (SUAS) também desempenha um papel relevante na proteção social dos adolescentes em cumprimento de medida socioeducativa. O SUAS é uma política pública que visa promover a garantia de direitos e a inclusão social por meio da oferta de serviços e benefícios socioassistenciais. Ele é responsável por articular os diferentes órgãos e entidades governamentais e não governamentais envolvidos na assistência social, incluindo as medidas socioeducativas.</p>

                        <p>Dentro do SUAS, existem serviços específicos voltados para os adolescentes em cumprimento de medida socioeducativa, como os Centros de Referência Especializados de Assistência Social (CREAS). Esses centros têm como objetivo prestar apoio técnico e acompanhamento socioassistencial aos adolescentes e suas famílias, buscando promover sua reinserção social e prevenir a reincidência em atos infracionais.</p>

                        <p>Além do ECA e do SUAS, é importante destacar que a proteção social para adolescentes em cumprimento de medida socioeducativa deve ser garantida de acordo com os princípios e diretrizes estabelecidos pela Constituição Federal, que assegura a proteção integral dos direitos da criança e do adolescente.</p>

                        <p>Em suma, a proteção social para adolescentes em cumprimento de medida socioeducativa é fundamentada em previsões legais, como o ECA, e é implementada por meio de políticas públicas, como o SUAS, visando à responsabilização e ressocialização desses jovens, buscando sua reintegração na sociedade de forma plena e consciente.</p>














































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
            <br><br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <!--<a href="Apresentacao.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>-->
                <a href="Topico01.1.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div>

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>