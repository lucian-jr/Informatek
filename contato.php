<?php 
    require "./PHPMailer/src/Exception.php";
    require "./PHPMailer/src/OAuth.php";
    require "./PHPMailer/src/PHPMailer.php";
    require "./PHPMailer/src/POP3.php";
    require "./PHPMailer/src/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $msg = false;
    $classe = false;

    $contato = true;

    if($_POST){

        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = false;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = '';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'c';                 // SMTP username
            $mail->Password = '';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->CharSet = 'UTF-8';

            //Recipients
            $mail->setFrom('');
            $mail->addAddress('', '');  

            $mensagem = '<div style="display: flex; justify-content: center;">';
                $mensagem .= '<div style="border: 1px solid #2a2a2a; max-width: 700px; min-width: 425px;">';
                    $mensagem .= '<div style="background: #2a2a2a; height: 70px; display: flex; align-items: center;">';
                        $mensagem .= '<div style="display: grid; margin: 0px 40px;">';
                            $mensagem .= '<h4 style="font-size: 22px; color: #fff; margin: auto; font-weight: 400;"> <strong>'. $_POST['nome'] .'</strong> entrou em contato: </h4> ';
                        $mensagem .= '</div>';
                    $mensagem .= '</div>';
                    $mensagem .= '<div style="padding: 20px;">';
                        $mensagem .= '<p><strong>Nome:</strong> ' . $_POST['nome'] . '</p>';
                        $mensagem .= '<p><strong>E-mail:</strong> ' . $_POST['email'] . '</p>';
                        $mensagem .= '<p><strong>Celular:</strong> ' . $_POST['telefone'] . '</p>';
                        $mensagem .= '<p><strong>Assunto:</strong> ' . $_POST['assunto'] . '</p>';
                        $mensagem .= '<p><strong>Mensagem:</strong> ' . $_POST['mensagem'] . '</p>';
                    $mensagem .= '</div>';
                $mensagem .= '</div>';
            $mensagem .= '</div>';
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST['nome'] . ' entrou em contato via Site - Informatek';
            $mail->Body    = $mensagem;
            $mail->AltBody = $mensagem;

            if($mail->send()) {
                $msg = 'Mensagem enviada com sucesso!';
                $classe="success";
            }            
        } catch (Exception $e) {
            $msg = 'Erro ao enviar a mensagem. Por favor, tente novamente mais tarde';
            $classe="danger";
        }
    }

	$title = 'Informatek' . ' - ' . 'Contato';
    $css = 'contato';
	require_once ('./templates/header.php');
?>

<!-- MAPA -->          
<script src='https://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>

<body class="page-contato">
    <div class="container">
        <div class="cabecalho">
            <div class="titulo"><h2>Envie sua Mensagem</h2></div>
            <div class="barra"></div>
            <div class="descricao"><p>Para entrar em contato com a INFORMATEK, ligue para (48) 3333-7375. Se desejar, você também pode entrar em contato preenchendo o formulário abaixo:</p></div>
        </div>

        <div class="bloco-contato">
            <div class="bloco-formulario">
                <? if($msg || $classe){ ?>
                    <div class="<?= $classe ?>" role="alert">
                        <?= $msg ?>
                    </div>
                <? } ?>

                <form action="" method="POST">
                    <input class="large" type="text" placeholder="Nome*" name="nome" id="nome" required>
                    <input class="large" type="text" placeholder="Email*" name="email" id="email" required>

                    <div class="duo-input">
                        <input class="small mg-right" type="text" placeholder="Telefone*" name="telefone" id="telefone" required>
                        <input class="small" type="text" placeholder="Assunto*" name="assunto" id="assunto" required>
                    </div>
                    
                    <textarea type="text" placeholder="Mensagem*" name="mensagem" id="mensagem" required></textarea>

                    <div class="div-btn">
                        <button class="enviar-contato" type="submit">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="div-map-contato">
                <div id='map-contato'></div>
            </div>
        </div>
    </div>

<? require_once ('./templates/footer.php'); ?>

<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="<?= base_url ?>js/pages/contato.js"></script>

