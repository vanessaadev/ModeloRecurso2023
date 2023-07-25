<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.2';
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
                        <p class="SubTitulo">SEGUNDO ROLÊ INVESTIGATIVO </p>
                        <hr>

                        Liberdade Assistida – LA 
Inicialmente é preciso compreender que ASSISTIR  ≠  VIGIAR.














LIBERDADE VIGIADA
LIBERDADE ASSISTIDA
Lógica calcada no medo e na periculosidade do autor do ato infracional.
Lógica calcada na perspectiva do adolescente enquanto sujeito em condição peculiar de desenvolvimento.
Doutrina da situação irregular.
Doutrina da proteção integral.
Vigilância dos comportamentos considerados anormais ou perigosos.
Acompanhamento dos fatores de vulnerabilidades e iniciativas de sua superação.
Estabelecimento de regras comportamentais pela autoridade judiciária.
Pactuação entre a equipe técnica, o adolescente e a família sobre as regras de convivência na unidade e entre os adolescentes e sua família nas rotinas externas (horário de chegada em casa, círculos de amizade, etc.).
Tutela do adolescente pela autoridade judiciária.
Promoção da autonomia e protagonismo do adolescente diante das consequências do ato infracional e das novas trajetórias de vida pactuadas no PIA.













	













                        <br><br>

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
                <a href="Topico03.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico04.php" class="btn btn-primary" role="button" aria-pressed="true"> <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>