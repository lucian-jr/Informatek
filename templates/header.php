<?php define('base_url', 'https://www.informatek.com.br/'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Temos a solução que você precisa especializada em Hardware. Trabalhamos com Domótica. Conheça nossos serviços.">
    <meta name="keywords" content="Florianópolis/SC, Solução em Hardware, Domotica, Tecnologia">
    <meta name="author" content="Luciano A. Júnior - Meu Copo Eco">
    <title><?= $title ?></title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url ?>css/header.css">
    <link rel="stylesheet" href="<?= base_url ?>css/footer.css">
    <link rel="stylesheet" href="<?= base_url ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url ?>css/slick-theme.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
    
    <?php if($css): ?>
        <link rel="stylesheet" href="<?= base_url ?>css/pages/<?= $css ?>.css">
    <?php endif; ?>

    <!-- fontes -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Font-awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="<?= base_url ?>images/logo-informatek.svg" >
</head>

<body>
    <nav>
        <div class="container-header">
            <div class="bloco-esquerda">
                <a href="<?= base_url ?>" style="height: 70px; width: 200px;">
                    <h1 class="hide-name">Informatek</h1>
                    <img src="<?= base_url ?>images/logo-informatek.svg" alt="">
                </a>
                <div class="navegacao">
                    <ul class="lista-navegacao">  
                         <li class="item-nav">
                            <a href="<?= base_url ?>" <?=($css == "" ? "class='active'": '') ?>>Página Inicial</a>
                        </li>

                        <li class="item-nav">
                            <a href="<?= base_url ?>servicos" <?=($css == "servicos" ? "class='active'": '') ?>>Serviços</a>
                        </li>

                        <li class="item-nav">
                            <a href="<?= base_url ?>contato" <?=($css == "contato" ? "class='active'": '') ?>>Contato</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="redes-sociais">
               <a href="https://www.facebook.com/Informatek-oficina-de-computadores-103717671406287/">
                   <i class="fab fa-facebook"></i>
                </a>
			</div>

            <div class="icone-burger">	
                <i class="fas fa-bars fa-2x" style="font-size: 27px;"></i>
            </div>

            <div class="bg-burger" style="display: none;">
                <div class="hidden-bar">
                    <div class="close-bar">
                        <i class="fas fa-times fa-2x"></i>
                    </div>

                    <ul class="lista-navegacao">
                        <li class="item-nav">
                            <a href="<?= base_url ?>">Página Inicial</a>
                        </li>

                        <li class="item-nav">
                            <a href="<?= base_url ?>servicos">Serviços</a>
                        </li>

                        <li class="item-nav">
                            <a class="contato" href="<?= base_url ?>contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

   

<!-- Fim do Cabeçalho -->