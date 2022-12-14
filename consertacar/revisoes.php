<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}

require_once './model/Revisao.php';
require_once './model/DaoRevisao.php';
require_once './control/ControlRevisao.php';
require_once './model/Automovel.php';
require_once './model/DaoAutomovel.php';
require_once './control/ControlAutomovel.php';

$control = new ControlRevisao();
$controlAutomovel = new ControlAutomovel();

$revisoes = $control->listar();

/*
foreach ($revisoes as $r) {
    if ($control->status($r->id)) {
        $alertas = "";
        foreach ($control->getAlertas() as $a) {
            $alertas = $alertas . $a . "<br>";
        }
    }
}
*/

$revisoes = $control->listar();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Gerenciamento de Conteúdo</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/bootstrap-table.css" rel="stylesheet">
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-table.js"></script>
        <script src="js/bootbox.js"></script>
        <script src="js/lumino.glyphs.js"></script>      
        <script src="js/jquery-maskedinput.min.js"></script>      
        <script src="js/mascaras.js"></script> 
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">ConsertaCar</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><span class="nome_usuario">Usuário Logado </span><span class="caret"></span>                                    
                            </a>
                            <ul class="dropdown-menu" role="menu">                                
                                <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php include 'menu.php'; ?>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">            
            <div id="carregando">
                Carregando...                        
            </div>
            <div id="conteudo">               

                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                        <li class="active">Revisões</li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Revisões</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">

                            <div class="panel-body">
                                <form action="" method="POST" id="form">
                                    <input type="hidden" value="" name="id" id="id"/>
                                    <input type="hidden" value="" name="acao" id="acao"/>

                                    <table data-toggle="table" data-show-refresh="true" data-id-field="1" data-show-toggle="true" data-show-columns="false" data-search="true" data-select-item-name="selecionados[]" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                                        <thead>
                                            <tr>                                                
                                                <th data-sortable="true">Id</th>
                                                <th data-sortable="true">Data</th>
                                                <th data-sortable="true">Observações</th>
                                                <th data-sortable="true">Próxima Revisão</th>
                                                <th data-sortable="true">Automóvel</th>
                                            </tr>                        
                                        </thead>  
                                        <tbody>
                                            <?php if ($revisoes) foreach ($revisoes as $r) { ?>
                                                    <tr>
                                                        <td><?php echo $r->id ?></td>                                                        
                                                        <td><?php echo $r->data ?></td> 
                                                        <td><?php echo $r->observacoes ?></td> 
                                                        <td><?php echo $r->proxima_revisao ?></td> 
                                                        <td><?php echo $controlAutomovel->selecionar($r->id_veiculo)->placa ?></td>
                                                    </tr>
                                                <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>		
                        </div>
                    </div>
                </div>

            </div>            
        </div>

        <script>
            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
                $('#carregando').fadeOut();
                $('#conteudo').fadeIn();
            });
        </script>

    </body>
</html>
