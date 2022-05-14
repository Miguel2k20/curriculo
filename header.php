<header id="header" class="<?php echo $url != "home.php" ? "active" : "" ?>">
    <div class="container">
        <div class="menu">
            <ul class="list_pages">
                <li class="item <?php echo $url == "home.php" ? "active actual" : "" ?>">
                    <a href="home">Home</a>
                </li>
                <li class="item <?php echo $url == "sobrenos.php" ? "active actual" : "" ?>">
                    <a href="sobrenos">Sobre mim</a>
                </li>
                <li class="item <?php echo $url == "contato.php" ? "active actual" : "" ?>">
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
            header_float()

            $("#header .menu .list_pages .item").hover(
                function() {
                    $("#header .menu .list_pages .item").removeClass("active");
                },
                function() {
                    $("#header .menu .list_pages .actual").addClass("active")
            });

            $(document).scroll(function() {
                header_float()
            });
        }

        function header_float() {
            if ($(window).scrollTop() === 0) {
                $("header").removeClass("float")
            } else {
                $("header").addClass("float")
            }
        }

    });
</script>