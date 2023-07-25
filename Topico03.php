<?php
// EGPCE - Chama o conectamoodle.php
//require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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

3. AS MEDIDAS SOCIOEDUCATIVAS EM MEIO ABERTO
Prestação de Serviços à Comunidade - PSC

O que é?
Prevista no Art. 117 do ECA, a PSC se configura como a execução de tarefas gratuitas de interesse geral, conforme aptidões do adolescente, sem prejudicar a frequência à escola ou à jornada normal de trabalho. 

IMPORTANTE!
É essencial que se considere as aptidões e perfil do socioeducando, por isso faz-se necessário à pluralidade de locais para a prestação de serviços visando proporcionar opções a fim de adequar o local ao adolescente e não o contrário. Isso impacta na adesão do adolescente a MSE, evitando o descumprimento. Para o Caderno do SINASE (2006) a PSC é uma ação pedagógica que deve privilegiar a descoberta de novas potencialidades direcionando construtivamente seu futuro.

Quanto tempo?
No máximo por 06 meses, com jornada máxima de 08 horas semanais, sem prejuízo da escola ou do trabalho. Pode ocorrer em dias úteis ou aos finais de semana.

Onde?
Em entidades assistenciais, hospitais, escolas e outros estabelecimentos similares, bem como em programas comunitários ou governamentais.


IMPORTANTE!
O Art. 14 da Lei nº 12.594/2012 estabelece que cabe ao Programa municipal responsável pelos serviços de MSE realizar o credenciamento  das instituições parceiras com a validação posterior do Sistema de Justiça através do Termo de Parceria/Cooperação.  Dessa forma, é de responsabilidade da equipe do CREAS avaliar a cultura, valores e objetivos das instituições parceiras para observar se são compatíveis com a socioeducação. Este credenciamento pode ser impugnado, ou seja, negado pelo Sistema de Justiça.


Esses locais devem ser disponibilizados por toda a rede governamental, tendo em vista o caráter intersetorial do Sistema de Atendimento Socioeducativo a fim de atender  a prerrogativa de que a inserção do adolescente deve ser compatível com suas aptidões e favorecedoras do seu desenvolvimento pessoal e social.

Quais as instituições parceiras/entidades?
Unidades do poder público (escolas, postos de saúde, unidades da assistência social) como as da sociedade civil (projetos sociais, entidades beneficentes ou movimentos sociais) que prestem serviços relevantes à sociedade.

FIQUE ATENTO!
A Prestação de Serviços é para a Comunidade, não para a Instituição!!!

Educação
≠
Socioeducação




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
<a href="Topico02.3.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
<a href="Topico03.2.php" class="btn btn-primary" role="button" aria-pressed="true"> <i class="fa fa-chevron-right"></i></a>
</div>

</div> <!-- CONTEUDO FIM -->

<!-- FOOTER -->
<?php include('layout/footer.php') ?>

</div> <!-- DIV MAIN FIM -->

<!-- FOOTER JS -->
<?php include('layout/js.php') ?>

</body>

</html>