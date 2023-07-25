<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.3';
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

                        <h2 class="SubTitulo"> SOCIOEDUCAÇÃO </h2>
                        <hr>
                        <br>


                        <p>Inicialmente, cumpre esclarecer que nossas legislações, em especial a Lei nº 8.069/1990 e a Lei nº 12.594/2012, não apresentam uma definição acerca do conceito de socioeducação. No entanto, essas legislações estabelecem direitos, princípios e diretrizes que norteiam toda a política de atendimento socioeducativo.</p>

                        <p>Existem diversos autores que discutem o conceito de educação e sua aplicação na prática. Alguns deles incluem:</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Jean Piaget:</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> Piaget foi um renomado psicólogo e educador que desenvolveu teorias sobre o desenvolvimento cognitivo e a construção do conhecimento. Seus trabalhos enfatizam a importância da interação social e da educação na formação das habilidades e capacidades dos indivíduos.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>Lev Vygotsky:</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> Vygotsky foi outro psicólogo e educador que enfatizou a importância do contexto social e cultural no desenvolvimento humano. Ele desenvolveu a teoria sociocultural, que destaca a influência das interações sociais na aquisição de conhecimento e no desenvolvimento de habilidades.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Paulo Freire: </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> Freire foi um educador brasileiro conhecido por sua abordagem pedagógica baseada na conscientização e na transformação social. Ele propôs uma educação libertadora, que valoriza o diálogo, a participação ativa e a compreensão crítica da realidade social como ferramentas para a emancipação dos indivíduos.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion 03 -->

                        <!-- Accordion 04 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="Item04">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    <strong>Emília Ferreiro:</strong>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase04">
                                <div class="accordion-body">
                                    <p> Ferreiro é uma pesquisadora argentina que dedicou seus estudos à alfabetização e ao desenvolvimento da linguagem. Ela enfatiza a importância de considerar o contexto social e cultural dos alunos na prática educativa, reconhecendo que o processo de aprendizagem não ocorre de forma isolada, mas sim em interação com o meio..</p>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Accordion 04 -->

                        <!-- Accordion 05 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="Item05">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    <strong>Celestin Freinet:</strong>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase05">
                                <div class="accordion-body">
                                    <p> Freinet foi um educador francês que desenvolveu uma abordagem educacional baseada na pedagogia do trabalho e na cooperação. Ele defendia a valorização da experiência e dos interesses dos alunos, bem como o envolvimento ativo dos estudantes na construção do conhecimento e na solução de problemas sociais.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Accordion 05 -->
                        <!-- FIM Accordion -->

                        <p>Torna-se importante ressaltar que, a socioeducação é uma área de estudo multidisciplinar, e existem diversos teóricos e pesquisadores que contribuíram para a compreensão desse campo de conhecimento, destacando-se o professor Antônio Carlos Gomes da Costa (2006, p.11), que define a socioeducação como uma modalidade de educação destinada a promover a socialização de adolescentes, senão vejamos: “…a socioeducação, modalidade de ação educativa destinada a preparar os adolescentes para o convívio social no marco da legalidade e da moralidade socialmente aceitas, como forma de assegurar sua efetiva e plena socialização.”</p>

                        <p>Destacamos o conceito de socioeducação extraído dos Cadernos de Socioeducação, Práticas de Socioeducação do estado do Paraná (2010, p.25), na forma que segue:</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>O conceito de socioeducação ou educação social, no entanto, destaca e privilegia o aprendizado para o convívio social e para o exercício da cidadania. Trata-se de uma proposta que implica em uma nova forma do indivíduo se relacionar consigo e com o mundo. Deve-se compreender que educação social é educar para o coletivo, no coletivo, com o coletivo. É uma tarefa que pressupõe um projeto social compartilhado, em que vários atores e instituições concorrem para o desenvolvimento e fortalecimento da identidade pessoal, cultural e social de cada indivíduo.</p>
                        </div>


                        <p>Destacamos que tais legislações estão fundamentadas na Doutrina da Proteção Integral, que assegura a todas as crianças e adolescentes, prioridade absoluta conforme estabelecido nos termos do art. 227 da Constituição Federal/88:</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>É dever da família, da sociedade e do Estado assegurar à criança e ao adolescente, com absoluta prioridade, o direito à vida, à saúde, à alimentação, à educação, ao lazer, à profissionalização, à cultura, à dignidade, ao respeito, à liberdade e à convivência familiar e comunitária, além de colocá-los a salvo de toda forma de negligência, discriminação, exploração, violência, crueldade e opressão.</p>
                        </div>

                        <p>Conforme leciona Antônio Carlos Gomes da Costa aos adolescentes em cumprimento de medida socioeducativa, objetiva-se proporcionar condições para que os adolescentes/jovens possam retornar ao convívio social, assegurando de forma efetiva e plena a sua socialização. Isso implica oferecer um ambiente que promova o desenvolvimento de suas potencialidades, buscando superar fatores que contribuíram para o cometimento do ato infracional.</p>

                        <div class="card">
                            <div class="card-body">
                                <p>A medida socioeducativa, por sua vez, tem caráter pedagógico e não meramente sancionatório, apesar de se tratar de uma determinação judicial imposta ao adolescente o qual foi atribuído autoria de ato infracional. Ela enfatiza a necessidade de ações socioeducativas, garantindo o acesso à direitos fundamentais, como educação, saúde, cultura, esporte, lazer, profissionalização e convivência familiar e comunitária. O objetivo é que, o adolescente em cumprimento de medida socioeducativa, tenha oportunidades para se desenvolver de forma integral e se tornar um cidadão consciente e participativo.</p>
                            </div>
                        </div>

                        <p>Nesse contexto, é fundamental a participação e articulação de diversos atores sociais, como a família, a sociedade civil, o sistema de justiça, as instituições de proteção social e os profissionais que atuam na área socioeducativa. Essa abordagem integrada busca garantir uma rede de proteção e apoio ao adolescente, com o objetivo de promover sua ressocialização e prevenir a reincidência de atos infracionais.</p>

                        <p>Ressaltamos que o art. 103 e seguintes do ECA, dispõe sobre a prática do ato infracional; dos direitos individuais; das garantias processuais; e das disposições gerais das medidas socioeducativas, e a Lei nº12.594/2012, que institui o Sistema Nacional de Atendimento Socioeducativo – SINASE, e regulamenta a execução das medidas socioeducativas destinadas ao adolescente que pratique ato infracional, não definem o conceito de socioeducação.</p>

                        <p class="wow fadeInLeft" data-wow-delay="0.3s">A socioeducação refere-se ao sistema de medidas socioeducativas apl icadas ao adolescente autor de ato infracional, assim considerado pela prática de ato infracional que é análogo aos crimes tipificados no Código Penal.</p>

                        <p>Embora o ECA não defina explicitamente o conceito de socioeducação, ele estabelece diretrizes que visam à promoção do desenvolvimento pessoal, social e educacional das crianças e dos adolescentes, tanto no contexto educacional em geral quanto nas medidas socioeducativas específicas aplicadas aos adolescentes em conflito com a lei.</p>

                        <p>A proteção social para o adolescente em cumprimento de medida socioeducativa, é garantida no ordenamento jurídico brasileiro, através de diversas leis e normativas específicas. Essas medidas socioeducativas são aplicadas aos adolescentes que cometem atos infracionais, visando sua ressocialização e reintegração à sociedade.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">No contexto da proteção social, o Sistema Único de Assistência Social (SUAS) também desempenha um papel importante. O SUAS é uma política pública que organiza os serviços socioassistenciais no Brasil, e tem como objetivo garantir o acesso à direitos, e promover a inclusão social das pessoas em situação de vulnerabilidade, incluindo os adolescentes em cumprimento de medida socioeducativa, devendo disponibilizar diversos serviços e programas socioassistenciais que podem auxiliar os adolescentes em cumprimento de medida socioeducativa, como o Serviço de Proteção e Atendimento Especializado a Famílias e Indivíduos (PAEFI), o Serviço de Medidas Socioeducativas em Meio Aberto, o Serviço de Proteção e Atendimento Integral à Família (PAIF) e o Serviço de Convivência e Fortalecimento de Vínculos (SCFV).</p>
                            </div>

                            <p>Esses serviços têm como objetivo, oferecer apoio, orientação, acompanhamento e inserção social aos adolescentes, bem como fortalecer os vínculos familiares e comunitários. Além disso, o SUAS também prevê a articulação com outros órgãos e setores da sociedade para a efetivação da proteção social dos adolescentes em cumprimento de medida socioeducativa.</p>

                            <!-- Fique Atento -->
                <div class="FiqueAtentoCaixa">
                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                    <div class="FiqueAtentoTexto"><p> Em resumo, a proteção social para o adolescente em cumprimento de medida socioeducativa é assegurada por meio do ECA, que estabelece direitos e garantias fundamentais, e do SUAS, que disponibiliza serviços e programas socioassistenciais para promover a inclusão social e a ressocialização desses adolescentes.</p></div>
                </div>

                           
                            <p>Neste sentido, a socioeducação é um conceito que envolve a combinação de elementos sociais e educacionais, em um contexto de intervenção ou abordagem para promover o desenvolvimento pessoal, social e educacional de indivíduos em situações de vulnerabilidade, risco ou conflito, que busca integrar os aspectos educacionais e sociais para criar um ambiente propício ao aprendizado e ao crescimento pessoal dos indivíduos, considerando suas necessidades específicas e o contexto em que se encontram. Destacamos que fatores sociais, econômicos e culturais, podem influenciar significativamente o desenvolvimento e o comportamento das pessoas, especialmente daquelas em situação de vulnerabilidade.</p>

                            <p>A socioeducação busca trabalhar as habilidades cognitivas e o desenvolvimento de competências, as habilidades socioemocionais, como a empatia, a resolução de conflitos, a comunicação efetiva e a autogestão emocional. Além disso, a abordagem socioeducativa busca promover a inclusão social, a participação ativa na comunidade e o fortalecimento dos laços sociais dos indivíduos.</p>

                            <p class="wow fadeInRight" data-wow-delay="0.3s">Dentro do campo da socioeducação, como veremos nos conteúdos seguintes deste curso, abordaremos diferentes estratégias e métodos como programas socioeducativos, projetos comunitários, medidas socioeducativas em meio aberto e em instituições de internação, entre outros. O objetivo principal é proporcionar oportunidades de aprendizado, ressignificação, crescimento e transformação pessoal, visando ao desenvolvimento integral e à construção de uma sociedade mais justa e equitativa.</p>

                            <p>É importante ressaltar que a socioeducação no Brasil enfrenta inúmeros desafios que impactam diretamente na efetividade do trabalho com o adolescente autor de ato infracional, dentre esses desafios estão à estrutura física limitada, com más condições de higiene e poucos espaços para realização de atividades pedagógicas; falta de investimento adequado; falta de profissionais qualificados e comprometidos com a socioeducação; o alto índice de reincidência de adolescentes na prática de atos infracionais; a falta de articulação com outros setores é uma grande problemática, pois a socioeducação precisa de integração com os diversos setores como a educação, assistência social, saúde, esporte, lazer, cultura, profissionalização entre outros.</p>

                            <p>É fundamental enfrentar esses desafios por meio de investimentos adequados, garantindo a capacitação dos profissionais, melhorias na infraestrutura das unidades de atendimento socioeducativo, desenvolvimento de programas de acompanhamento pós-cumprimento de medida e o fortalecimento e alinhamento da articulação entre todos os setores envolvidos.</p>







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
                    <a href="Topico01.2.php" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.4.php" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div>

            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>

        </div> <!-- DIV MAIN FIM -->

        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>

</html>