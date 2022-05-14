<div id="home">
    <div class="banner">
        <img class="banner-imagem" src="imagens/dusk-mountains-4k-ma-1366x768.jpg" alt="">
        <div class="text">
            <h3 class="title item">
                João Miguel Mendonça
            </h3>
            <h4 class="subtitle item">Desenvolvedor Full stack</h4>
            <p class="button item">
                Veja mais
            </p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        start_page();

        function start_page() {

            setTimeout(() => {
                $(".banner-imagem").addClass("active")
            }, "500")

            setTimeout(() => {
                start_banner()
            }, "800")

            $("#home .banner .text .button").click(function() {
                $("#header").toggleClass("active")
            });

            function start_banner() {
                $('#home .banner .text .item').each(function(i) {
                    var $li = $(this);
                    setTimeout(function() {
                        $li.toggleClass('active');
                    }, i * 500);
                });
            }
        }
    });
</script>