        <footer class="footer">
            <div class="container-large">
                <div class="div-left">
                    <div class="logo">
                        <img src="<?= base_url ?>images/logo-informatek.svg" alt="">
                    </div>
                </div>

                <div class="informatek-contato">
                    <p>(48) 3333-7375</p>
                    <p>contato@informatek.com.br</p>

                    <div class="endereco">
                        <p>R. Almeida Coelho, 57 - Saco dos Limões,</p>
                        <p>Florianópolis - SC, 88045-110</p>
                    </div>
                </div>
            </div>
            <div class='copyright'>
                <h4>Copyright ©<?= date('Y') ?> Informatek - Oficina de Informática. Todos os direitos reservados.</h4>
            </div>
        </footer>

        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
        <script type="text/javascript" src="<?= base_url ?>js/slick.min.js"></script>
        <script type="text/javascript" src="<?= base_url ?>js/main.js"></script>

    </body>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+554833337375", // WhatsApp number
                call_to_action: "Dúvidas? Envie uma mensagem!", // Call to action
                button_color: "#34BD49", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp", // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
</html> 