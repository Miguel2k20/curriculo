<header id="header">
    <div class="container">
        <div class="menu">
            <div class="logo">
                <a href="home">
                    <img src="imagens/cpu.png" alt="">
                </a>
            </div>
            <ul class="list_pages">
                <li class="item <?php echo $_GET["page"] == "home" ? "active" : "" ?>">
                    <a href="home">Home</a>
                </li>
                <li class="item <?php echo $_GET["page"] == "sobrenos" ? "active" : "" ?>">
                    <a href="sobrenos">Sobre mim</a>
                </li>
                <li class="item <?php echo $_GET["page"] == "contato" ? "active" : "" ?>">
                    <a href="contact">Contato</a>
                </li>

            </ul>
        </div>
    </div>
</header>