<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
        <style>
            *{
                box-sizing: border-box;
                margin: 0px;
                padding: 0px;
                font-family: verdana, arial, sans-serif;
                text-align: justify;
            }
            .box{
                padding-top: 10px;
                padding-bottom: 10px;
                float: left;
                width: 33.333%;
                color: white;
            }
            .port{
                width: 25%;
            }
            .box img{
                width: 100%;
                height: 200px;
            }
            .final{
                margin-right: 0px;
            }
            header{
                padding: 10px;
                background-color: gray;
            }
            nav{
                float: right;
                padding: 5px;
                height: 50px;
            }
            #title{
                float: left;
            }
            #title h1{
                color: white;
                margin: 0px;
            }
            h1 a{
                color: white;
            }
            h1 a:hover{
                text-decoration: none;
                color: white;
            }
            .menu{
                float: left;
                padding-top: 7px;
                margin-left: 50px;
                height: 100%;
            }
            .menu a{
                text-decoration: none;
                color: white;
            }
            .menu a:hover{
                color: #3366ff;
                border: 1px solid #3366ff;
                margin: -1px;
            }
            #portfolio{
                border-bottom: 1px solid black;
                margin: 10px 0px 10px 0px;
                padding-bottom: 10px;
            }
            #portfolio h4{
                margin: 0px;
            }
            footer{
                padding: 0px;
                background: gray;
                margin-top: 10px;
            }
            #imagem{
                background-image:url(imagem.jpg);
                background-position: center;
                background-size: 100% 100%;
                padding: 0px;
                height: 400px;
            }
            #blwimage{
                background: #3366ff;
            }
            .clear{
                clear: both;
            }
            .G{
                color: #3366ff;
            }
            .rp{
                width: 50%;
                padding-top: 10px;
                padding-bottom: 10px;
                float: left;
                font-size: 12px;
            }
            .rp p{
                margin: 0px;
                color: white;
            }
            .inicio{
                padding-right: 10px;
            }
            .fim{
                padding-left: 10px;
            }
            .meio{
                padding-left: 10px;
                padding-right: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        ?>
        <header>
            <div class="container">
                <div id="title">
                    <h1><a href="">LO<span class="G">G</span>O</a></h1>
                </div>
                <nav>
                    <div class="menu">
                        <a href="">
                            Início
                        </a>
                    </div>
                    <div class="menu">
                        <a href="">
                            Sobre
                        </a>
                    </div>
                    <div class="menu">
                        <a href="">
                            Notícias
                        </a>
                    </div>
                    <div class="menu">
                        <a href="">
                            Contato
                        </a>
                    </div>
                    <div class="clear"></div>
                </nav>
                <div class="clear"></div>
            </div>
        </header>
        <div id="imagem">
        </div>
        <div id="blwimage">
            <div class="container">
                <div>
                    <div class="box inicio">
                        <h5>DESENVOLVIMENTO WEB</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="box meio">
                        <h5>HOSPEDAGEM DE SITES</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="box fim">
                        <h5>REGISTRO DE DOMÍNIOS</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div>
                <div id="portfolio">
                    <h4>Portifólio</h4>
                </div>
                <div class="box port inicio">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="box port meio">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="box port meio">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="box port fim">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="clear"></div>
                <div class="box port inicio">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="box port meio">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="box port meio">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="box port fim">
                    <a href=""><img src="puzzle.png"></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="rp inicio">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="rp fim">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </footer>
    </body>
</html>
