<header id="header">
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="home">
                    <img src="imagens/logo.png" alt="">
                </a>
            </div>
            <ul class="list_pages">
                <li class="item <?php echo $_GET["page"] == "home" ? "active actual" : "" ?>">
                    <a href="home">Home</a>
                </li>
                <li class="item <?php echo $_GET["page"] == "sobrenos" ? "active actual" : "" ?>">
                    <a href="sobrenos">Sobre mim</a>
                </li>
                <li class="item <?php echo $_GET["page"] == "contato" ? "active actual" : "" ?>">
                    <a href="contact">Contato</a>
                </li>

            </ul>
        </div>
    </div>
</header>

<script type="text/javascript">
    $(document).ready(function() {
        start_page();
        function start_page() {
            $("#header .menu .list_pages .item").hover(
                function() {
                    $("#header .menu .list_pages .item").removeClass("active");
                },
                function() {
                    $("#header .menu .list_pages .actual").addClass("active")
                });
            $("#header").addClass("active")
        }
    });
</script>