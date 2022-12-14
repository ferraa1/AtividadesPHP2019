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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($control->inserir($_POST['data'], $_POST['observacoes'], $_POST['veiculo'])) {
        $mensagem = "Revisão inserida com sucesso";
        $alertas = $control->getAlertas();
        unset($_POST);
    } else {
        $erros = "";
        foreach ($control->getErros() as $e) {
            $erros = $erros . $e . "<br>";
        }
    }
}

$automoveis = $controlAutomovel->listar();
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
                            <form action="" method="POST" id="form"> 
                                <div class="panel-heading">                
                                    <button type="submit" class="btn btn-primary gravar" data-toggle="tooltip" title="Gravar o registro" data-placement="auto"><svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"/></svg> Gravar</button>
                                    <button type="button" class="btn btn-primary voltar" data-toggle="tooltip" title="Voltar para a listagem" data-placement="auto"><svg class="glyph stroked arrow left"><use xlink:href="#stroked-arrow-left"/></svg> Voltar</button>                                  
                                </div>
                                <div class="panel-body">

                                    <?php if (isset($mensagem)) { ?>
                                        <div class="alert alert-success">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                                            <?php echo $mensagem; ?>
                                        </div>
                                    <?php } ?>

                                    <?php if (isset($erros)) { ?>
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                                            <?php echo $erros; ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <?php if (isset($alertas) && strlen($alertas)) { ?>
                                        <div class="alert alert-warning">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                                            <?php echo $alertas; ?>
                                        </div>
                                    <?php } ?>

                                    <div class="campo_esquerda">
                                        <input type="date" class="form-control" value="<?php echo (isset($_POST['data']) ? $_POST['data'] : ""); ?>" name="data" id="data" placeholder="Informe a data" required="required" data-toggle="tooltip" title="Informe a data" data-placement="auto"/>
                                    </div>
                                    <div class="campo_direita">
                                        <input type="text" class="form-control" value="<?php echo (isset($_POST['observacoes']) ? $_POST['observacoes'] : ""); ?>" name="observacoes" id="observacoes" placeholder="Informe as observacoes" required="required" data-toggle="tooltip" title="Informe as observacoes" data-placement="auto" />
                                    </div>
                                    <div class="campo_esquerda">
                                        <select class="form-control" name="veiculo">
                                            <option value="" placeholder="Informe o automóvel" required="required" data-toggle="tooltip" title="Informe o automóvel" data-placement="auto">Informe o automóvel</option>
                                            <?php foreach ($automoveis as $a) { ?>
                                                <option value="<?php echo $a->id ?>"><?php echo $a->placa ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
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
                $(".voltar").click(function () {
                    $(location).attr("href", "revisoes.php");
                });
            });
            /*$("#veiculo").change(function() {
             var id_veiculo = $("#veiculo").val();
             $.ajax({
             url: 'modelos.php',
             dataType: 'html',
             data: {id_marca: id_marca},
             type: 'POST',
             success: function (resposta) {
             $("#proximaRevisao").html(resposta);
             }
             });
             });*/
        </script>

    </body>
</html>
