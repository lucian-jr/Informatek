<?php 
	$title = 'Informatek' . ' - ' . 'Servicos';
    $css = 'servicos';
	require_once ('./templates/header.php');
?>

<body class="page-servicos">
    <div class="container">
        <div class="cabecalho">
            <div class="titulo"><h2>Painel de serviços</h2></div>
            <div class="barra"></div>
            <div class="descricao"><p>Aqui você pode encontrar a solução que você procura para o seu Hardware! Abaixo estão a maioria dos serviços prestados pela INFORMATEK:</p></div>
        </div>
        
        <div class="list">
            <div class="item-list first" data-id="1">
                <div class="title-item">
                    <img src="<?= base_url ?>images/pages/home/notebook-icon.svg" alt="">
                    <h3>Notebook</h3>
                </div>

                <div class="arrow">
                    <img class="img-arrow" src="<?= base_url ?>images/pages/servicos/arrow.svg" alt="" data-id="1">
                </div>
            </div>

            <div class="info-box" data-id="1">
                <div class="content">
                    <div class="img-block">
                        <img class="banner-box" src="<?= base_url ?>images/pages/servicos/notebook-img.jpg" alt="">
                    </div>      

                    <div class="topics-block">
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de placa mãe</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Formatação</p>
                        </div>
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Recuperação de dados</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Troca tela</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-list" data-id="2">
                <div class="title-item">
                    <img src="<?= base_url ?>images/pages/home/desktop-icon.svg" alt="">
                    <h3>Computador Desktop</h3>
                </div>

                <div class="arrow">
                    <img class="img-arrow" src="<?= base_url ?>images/pages/servicos/arrow.svg" alt="" data-id="2">
                </div>
            </div>

            <div class="info-box" data-id="2">
                <div class="content">
                    <div class="img-block">
                        <img class="banner-box" src="<?= base_url ?>images/pages/servicos/desktop-img.jpg" alt="">
                    </div>

                    <div class="topics-block">
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de fonte</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de Monitor</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Recuperação de dados</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Formatação</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-list" data-id="3">
                <div class="title-item">
                    <img src="<?= base_url ?>images/pages/home/printer-icon.svg" alt="">
                    <h3>Impressora</h3>
                </div>

                <div class="arrow">
                    <img class="img-arrow" src="<?= base_url ?>images/pages/servicos/arrow.svg" alt="" data-id="3">
                </div>
            </div>

            <div class="info-box" data-id="3">
                <div class="content">
                    <div class="img-block">
                        <img class="banner-box" src="<?= base_url ?>images/pages/servicos/printer-img.jpg" alt="">
                    </div>

                    <div class="topics-block">
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de jato de tinta</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de impressora Laser</p>
                        </div>
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de impressora Térmica</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de impressora Multifuncional</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-list" data-id="4">
                <div class="title-item">
                    <img src="<?= base_url ?>images/pages/servicos/projector-icon.svg" alt="">
                    <h3>Projetor</h3>
                </div>

                <div class="arrow">
                    <img class="img-arrow" src="<?= base_url ?>images/pages/servicos/arrow.svg" alt="" data-id="4">
                </div>
            </div>

            <div class="info-box" data-id="4">
                <div class="content">
                    <div class="img-block">
                        <img class="banner-box" src="<?= base_url ?>images/pages/servicos/projetor-img.jpg" alt="">
                    </div>

                    <div class="topics-block">
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Conserto de fonte</p>
                        </div>

                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Troca de lâmpada</p>
                        </div>
                        <div class="topic">
                            <i class="fas fa-check-circle"></i><p>Limpeza interna</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-list" data-id="5">
                <div class="title-item">
                    <img src="<?= base_url ?>images/pages/servicos/domotic-icon.svg" alt="">
                    <h3>Domótica</h3>
                </div>

                <div class="arrow">
                    <img class="img-arrow" src="<?= base_url ?>images/pages/servicos/arrow.svg" alt="" data-id="5">
                </div>
            </div>

            <div class="domotic info-box" data-id="5" style="height: 600px;">
                <div class="content">
                    <div class="img-block">
                        <img class="banner-box" src="<?= base_url ?>images/pages/servicos/domotic-img.jpg" alt="">
                    </div>

                    <div class="topics-block topics-block-domotic">
                        <div class="topic">
                            <p class="text-block"><strong>Domótica</strong> é uma tecnologia recente e é responsável pela gestão de todos os recursos habitacionais. Este termo nasceu da fusão da palavra “Domus”, que significa casa, com a palavra “Robótica”, que está ligada ao ato de automatizar, isto é, realizar ações de forma automática.</p>
                        </div>
                    </div>  
                </div>

                <div class="topics-block-domotic">
                    <div class="topic">
                        <i class="fas fa-check-circle"></i><p>Controlar a iluminação: é possível programar vários cenários de iluminação e controlar tomadas onde estejam ligadas fontes de iluminação. Assim, com uma escolha de cenário, adequa logo o ambiente para uma situação de festa, jantar, leitura, cinema. Isto com um toque de botão;</p>
                    </div>

                    <div class="topic">
                        <i class="fas fa-check-circle"></i><p>Desligar com um toque todas as luzes da casa ou da empresa sem andar à procura de luzes acesas esquecidas.</p>
                    </div>

                    <div class="topic">
                        <i class="fas fa-check-circle"></i><p>Poupe energia com o aproveitamento programado de luz solar. No Verão a programação impede o calor de entrar, e no Inverno aproveita o sol.</p>
                    </div>

                    <div class="topic">
                        <i class="fas fa-check-circle"></i><p>Programar consumos em horas de vazio, para diminuir custos energéticos.</p>
                    </div>

                    <div class="topic">
                        <i class="fas fa-check-circle"></i><p>Controle remoto do sistema de alarme, que poderá ter visualização remota do videoporteiro.</p>
                    </div>
                </div>
            </div>

            <div class="not-found">
                <img src="<?= base_url ?>images/pages/servicos/not-found.svg" alt="">
                <p>Não achou o serviço que procurava?</p>
                <em>Fale conosco abaixo para ver se <br> conseguimos te ajudar:</em>

                <div class="btn-switch-page"><a href="<?= base_url ?>contato">Clique aqui</a></div>
            </div>
        </div>
    </div>
    <!-- <div class="manutencao">
        <h4>PÁGINA EM CONSTRUÇÃO</h4>
        <img src="<?= base_url ?>images/construcao.png" alt="">
    </div> -->


<? require_once ('./templates/footer.php'); ?>

<script type="text/javascript" src="<?= base_url ?>js/pages/servicos.js"></script>