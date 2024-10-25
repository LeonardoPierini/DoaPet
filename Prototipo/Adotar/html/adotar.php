<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Léo Pierini">
    <meta name="keywords" content="Pets, pet, adaoção, adotar, cachorro, gato, dog, cat, abandonado, hamister,coelho">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adotar</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+TC&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">
                <img src="../../Imgs/LogoTipo DoaPet.PNG" alt=""><!--Imagem-->
            </div><!--Logo-->

            <div class="desktop">
                <nav>
                    <ul>
                        <li><a href="../../Home/Html/index.html">Home</a></li>
                        <li><a href="../../Blog/html/blog.html">FAQs</a></li>
                        <li><a href="../../Comun/html/comunidade.html">Comunidade</a></li>
                        <li><a href="../../Colaborar/html/colaborar.html">Compartilhar</a></li>
                    </ul>
                </nav>
            </div><!--desktop-->

            <div class="mobile">
                <img src="../../Imgs/botao-de-menu.png" alt="" id="menu">
                <nav id="nav-menu">
                    <ul>
                        <li><a href="../../Home/Html/index.html">Home</a></li>
                        <li><a href="../../Blog/html/blog.html">FAQs</a></li>
                        <li><a href="../../Comun/html/comunidade.html">Comunidade</a></li>
                        <li><a href="../../Colaborar/html/colaborar.html">Compartilhar</a></li>
                    </ul>
                </nav>
            </div> <!--Mobile-->
            <div class="clear"></div>
        </div><!--container-->
    </header>


    <?php
        include '../php/adotar.php';
    ?>

    <footer>
        <div class="container">
            <div class="footer-single">
                <div class="w33">
                    <h2>Autor</h2>
                    <p>Leonardo Pierini</p>
                </div><!--w33-->
            </div>

            <div class="footer-single">
                <div class="w33">
                    <h2>Serviços</h2>
                    <p>Desenvolvimento de Aplicativos</p>
                    <p>desenvolvimentos de Websites<p>
                    <p>Criação de Portifólios</p>
                </div><!--w33-->
            </div><!--footer-single-->

            <div class="footer-single">
                <div class="w33">
                    <h2>Entre em Contato</h2>
                    <p>leopirtini06@gmail.com</p>
                    <p>+55(18) 99723-7098</p>
                </div><!--w33-->
            </div><!--footer-single-->
        </div><!--container-->
    </footer><!--footer-->

    <footer class="footer-2">
        <div class="container">
            <h2>TODOS OS DIREIOS RESERVADOS</h2>
        </div><!--container-->
    </footer><!--footer-2-->

    <script src="../js/index.js"></script>
</body>
</html>