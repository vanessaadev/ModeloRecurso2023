<!-- PLUGIN DO FADE IN -->

<style>
    .MenuTopico {
        color: #274F23 !important;
        font-weight: bold !important;
    }

    #menuNumero {
        color: #274F23;
        font-weight: bold !important;
        font-size: 1.1rem;
        padding-right: 0.3rem;
        margin-left: 0;
        margin-right: 0.4rem;
        font-family: "Raleway";
        right: 0.8rem;
        margin-top: -0.23rem;
    }

    .ativo {
        background-color: #e1ebe3;
    }
</style>

<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active ps">
            <div class="m-4 mx-auto text-center">
                <!-- <a href="index.php">
                <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                </a> -->
                <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
            </div>
            <div class="sidebar-menu">

                <ul class="menu ms-3">

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo'ativo';}?>"><span id="menuNumero">01 </span>MEIO AMBIENTE E EDUCAÇÃO AMBIENTAL</a>
                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico01.php#Inicio" class="sidebar-sub <?php if($page=='Topico01'){echo 'ativo';}?>"><span id="menuNumero">
                                        01 -<span> Meio Ambiente e Educação Ambiental</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.1.php#SubTopico1.1" class="sidebar-sub <?php if($page=='Topico01.1'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.1 -<span> Meio Ambiente, Meu Ambiente</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.2.php#SubTopico1.2" class="sidebar-sub <?php if($page=='Topico01.2'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.2 -<span> Primeiro Rolê Investigativo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.3.php#SubTopico1.3" class="sidebar-sub <?php if($page=='Topico01.3'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.3 -<span> Meio Ambiente em Permanente Transformação</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.4.php#SubTopico1.4" class="sidebar-sub <?php if($page=='Topico01.4'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.4 -<span> Segundo Rolê Investigativo</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.5.php#SubTopico1.5" class="sidebar-sub <?php if($page=='Topico01.5'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.5 -<span> Revolução Industrial</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico01.6.php#SubTopico1.6" class="sidebar-sub <?php if($page=='Topico01.6'){echo 'ativo';}?>"><span id="menuNumero">
                                    01.6 -<span> Terceiro Rolê Investigativo </span>
                                    </a>
                                </li>                                                         
                            </ul>
                        </div>
                    </li>

                    <li class="sidebar-item has-sub">
                        <div class="bd-callout-menu bd-callout-success-menu">
                            <a href="#.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo'ativo';}?>"><span id="menuNumero">02 </span>EDUCAÇÃO AMBIENTAL
                             </a>
                            <ul class="submenu">
                                <li class="sidebar-item">
                                    <a href="Topico02.php#Inicio" class="sidebar-sub <?php if($page=='Topico02'){echo 'ativo';}?>"><span id="menuNumero">
                                        02 -<span> Educação Ambiental</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico02.1.php#SubTopico2.1" class="sidebar-sub <?php if($page=='Topico2.1'){echo 'ativo';}?>"><span id="menuNumero">
                                    02.1 -<span> Como um Agente se Torna um Educador Ambiental?</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="Topico02.2.php#SubTopico2.2" class="sidebar-sub <?php if($page=='Topico2.2'){echo 'ativo';}?>"><span id="menuNumero">
                                    02.2 -<span> O que um AJA faz</a>
                                </li>                                    
                            </ul>
                        </div>
                    </li>                                     
                                                
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

</div>
<!-- SCRIPT - JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('ul li a').click(function() {
            $('li a').removeClass("ativo");
            $(this).addClass("ativo");
        });
    });
</script>
