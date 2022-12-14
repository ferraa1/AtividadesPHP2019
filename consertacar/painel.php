<?php
session_start();
if (!$_SESSION['email']) {
    header("Location: login.php");
}
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
                        <li><a href=""><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                        <li class="active">Painel de Gerenciamento</li>
                    </ol>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Painel</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bem-vindo!
                            </div>
                            <div class="panel-body" style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales mauris a diam auctor aliquet. Nullam malesuada placerat eros, in pharetra sapien feugiat in. In sit amet eros lacus. Donec porttitor massa orci, et blandit ex ornare quis. Donec mollis elementum augue eget dapibus. Cras pulvinar consequat arcu ac posuere. Nunc tristique purus risus, a feugiat eros convallis a. Nullam iaculis volutpat felis non blandit. Vestibulum dapibus turpis ac massa suscipit condimentum.
                                <br><br>
                                Sed mauris lectus, feugiat sit amet elementum ut, porttitor ac magna. Aliquam nec mi a augue cursus interdum. Suspendisse massa lorem, fringilla vel nisl nec, pharetra interdum risus. Aliquam auctor felis a justo hendrerit, id tincidunt ex efficitur. Cras fringilla et mauris vitae rutrum. Nulla condimentum eu ex ac eleifend. Vestibulum tincidunt, eros eget fringilla imperdiet, diam mi luctus libero, ac lobortis elit felis sed urna. Quisque at nisi molestie, molestie mi vel, efficitur odio. Etiam malesuada vehicula nunc, sit amet malesuada libero interdum fermentum. Donec feugiat congue vulputate.
                                <br><br>
                                Morbi sed tristique nulla. Etiam ultricies dolor sit amet turpis commodo scelerisque. Aliquam aliquet ligula eu lobortis rutrum. Aliquam in varius quam. Duis finibus eget neque quis placerat. Duis vitae enim erat. Fusce pretium orci vitae placerat posuere. Donec felis nisi, condimentum a mauris eu, pulvinar sagittis sem. Morbi sit amet augue accumsan, gravida justo ac, porttitor purus. Cras dui erat, lobortis id ornare et, tincidunt vitae urna. Vivamus vulputate sagittis dolor, vitae semper massa. Vestibulum rutrum molestie sapien, vitae commodo nisl malesuada congue. Proin tincidunt dui eros, at tristique est tempor vel.
                                <br><br>
                                Sed congue ante ut facilisis sodales. Praesent arcu sem, aliquam quis iaculis quis, posuere nec purus. Curabitur vel erat nec sem hendrerit semper. Aenean sed tempus elit. Proin nisi ligula, imperdiet vitae ex a, consectetur sodales mi. Vestibulum ante dolor, dignissim eget nunc sit amet, vehicula consectetur dui. Maecenas sollicitudin metus vitae lacus tristique tincidunt. Donec erat lorem, dignissim in tortor et, vestibulum suscipit nisi. Curabitur quis ultricies leo. Sed hendrerit leo eget est mollis dignissim. Vivamus convallis purus ac lorem semper consectetur. Duis metus tellus, viverra non mauris ac, volutpat euismod purus. Fusce lobortis nisl eu hendrerit pretium. Donec eget mauris non odio aliquam dapibus nec et tellus.
                                <br><br>
                                Morbi tristique tristique sapien, in gravida purus placerat ut. Donec volutpat ultricies arcu, sit amet consequat nisl cursus vel. Donec vulputate gravida nibh at facilisis. Donec lobortis elit a velit dapibus, vitae lobortis felis commodo. Phasellus non tortor est. Praesent malesuada, arcu ut elementum luctus, metus dui tempor enim, et fringilla eros elit at lorem. Fusce eget condimentum elit, vitae rhoncus tellus. Etiam bibendum dictum orci, et dictum quam dignissim dapibus. Aenean lacus libero, pharetra id orci eget, sollicitudin tincidunt est. Integer nec tortor ac tellus fringilla eleifend ut a augue. Phasellus vestibulum sapien eu finibus hendrerit. Donec ut accumsan nunc, sit amet vestibulum eros. Vivamus nec sagittis ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi semper lectus sit amet sodales interdum.
                                <br><br>
                                In tincidunt erat in justo consequat, sit amet hendrerit arcu imperdiet. Nullam aliquam lorem quam. Sed mollis lacus sed felis elementum, vel eleifend libero vehicula. Aliquam vulputate ornare enim. Nunc semper leo sed purus tincidunt, at mattis eros hendrerit. Aliquam dapibus lorem nec hendrerit ornare. Suspendisse non enim mi. In non nisl mi. Duis nunc lacus, vulputate eget pretium suscipit, pharetra vel massa. Maecenas lobortis augue quis bibendum convallis. Donec dignissim ac ipsum a congue. Phasellus congue massa et tellus molestie fermentum. Aliquam erat volutpat.
                                <br><br>
                                Sed iaculis ut nisi sed tincidunt. Cras ultricies fermentum orci at varius. Curabitur augue metus, congue sed est vel, aliquam fringilla urna. In pellentesque, dui vel finibus egestas, diam odio pulvinar velit, nec consequat felis massa eget justo. Etiam ac ligula mi. Mauris felis erat, maximus eu nisi at, placerat pretium mi. Nulla tempus, elit et iaculis elementum, tellus nisi gravida lacus, eu pulvinar nibh tortor vel nibh.
                                <br><br>
                                Ut non leo in magna lacinia porta ac ut libero. Ut varius risus nec lectus tincidunt, facilisis semper nibh consequat. Quisque rhoncus nibh diam, vitae semper magna egestas et. Pellentesque faucibus mauris purus, ut aliquam dolor fermentum vitae. Fusce vehicula quam et tellus ultricies sollicitudin. Donec malesuada ultrices neque vel aliquam. Suspendisse at tempus risus, a blandit dolor. Donec ut mollis risus. Aliquam et quam non ligula convallis convallis a ut eros. Nam a mi volutpat turpis rutrum dignissim nec et ante. Donec non faucibus metus. Mauris blandit nunc nunc, ac faucibus massa dignissim ac. Proin in hendrerit neque, eu rhoncus ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <br><br>
                                Phasellus leo ante, volutpat ut elit at, lobortis euismod lectus. Donec scelerisque magna sed gravida porta. Quisque aliquam, tellus sed viverra egestas, purus metus molestie elit, dapibus dapibus odio dui eget nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer at gravida lectus. Suspendisse potenti. Nullam eu aliquet quam, id vestibulum tortor. Fusce ac magna ac turpis consequat iaculis sed sit amet leo. Vivamus pharetra blandit lectus, eget rhoncus nisl tempus tincidunt. Vivamus ultrices lorem sit amet urna sodales, vitae finibus eros vulputate. Pellentesque nec mauris non sapien rutrum tincidunt iaculis sit amet leo. Nam at varius ante. Ut quis pretium quam. Fusce est nunc, mollis nec laoreet vitae, iaculis in mauris. Nullam eget purus iaculis, luctus arcu ac, maximus turpis. Vivamus fermentum at nisi in elementum.
                                <br><br>
                                Nulla consectetur dui a imperdiet auctor. Ut et augue leo. Mauris ultrices felis vel nunc tincidunt, vel tristique mauris facilisis. Quisque egestas faucibus metus, sit amet ultrices tortor suscipit id. Sed vestibulum enim risus, at posuere sapien dignissim non. Donec lacinia justo arcu, at placerat purus fringilla in. Integer consequat ipsum massa, vitae maximus ipsum pharetra a. Fusce quis leo risus. Donec blandit posuere finibus. Fusce malesuada ex id bibendum condimentum. Cras vestibulum accumsan vulputate. Aenean eget leo diam. In turpis mauris, blandit vel consectetur non, gravida sit amet nibh. 
                            </div>		
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Instruções:
                            </div>
                            <div class="panel-body" style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales mauris a diam auctor aliquet. Nullam malesuada placerat eros, in pharetra sapien feugiat in. In sit amet eros lacus. Donec porttitor massa orci, et blandit ex ornare quis. Donec mollis elementum augue eget dapibus. Cras pulvinar consequat arcu ac posuere. Nunc tristique purus risus, a feugiat eros convallis a. Nullam iaculis volutpat felis non blandit. Vestibulum dapibus turpis ac massa suscipit condimentum.
                                <br><br>
                                Sed mauris lectus, feugiat sit amet elementum ut, porttitor ac magna. Aliquam nec mi a augue cursus interdum. Suspendisse massa lorem, fringilla vel nisl nec, pharetra interdum risus. Aliquam auctor felis a justo hendrerit, id tincidunt ex efficitur. Cras fringilla et mauris vitae rutrum. Nulla condimentum eu ex ac eleifend. Vestibulum tincidunt, eros eget fringilla imperdiet, diam mi luctus libero, ac lobortis elit felis sed urna. Quisque at nisi molestie, molestie mi vel, efficitur odio. Etiam malesuada vehicula nunc, sit amet malesuada libero interdum fermentum. Donec feugiat congue vulputate.
                                <br><br>
                                Morbi sed tristique nulla. Etiam ultricies dolor sit amet turpis commodo scelerisque. Aliquam aliquet ligula eu lobortis rutrum. Aliquam in varius quam. Duis finibus eget neque quis placerat. Duis vitae enim erat. Fusce pretium orci vitae placerat posuere. Donec felis nisi, condimentum a mauris eu, pulvinar sagittis sem. Morbi sit amet augue accumsan, gravida justo ac, porttitor purus. Cras dui erat, lobortis id ornare et, tincidunt vitae urna. Vivamus vulputate sagittis dolor, vitae semper massa. Vestibulum rutrum molestie sapien, vitae commodo nisl malesuada congue. Proin tincidunt dui eros, at tristique est tempor vel.
                                <br><br>
                                Sed congue ante ut facilisis sodales. Praesent arcu sem, aliquam quis iaculis quis, posuere nec purus. Curabitur vel erat nec sem hendrerit semper. Aenean sed tempus elit. Proin nisi ligula, imperdiet vitae ex a, consectetur sodales mi. Vestibulum ante dolor, dignissim eget nunc sit amet, vehicula consectetur dui. Maecenas sollicitudin metus vitae lacus tristique tincidunt. Donec erat lorem, dignissim in tortor et, vestibulum suscipit nisi. Curabitur quis ultricies leo. Sed hendrerit leo eget est mollis dignissim. Vivamus convallis purus ac lorem semper consectetur. Duis metus tellus, viverra non mauris ac, volutpat euismod purus. Fusce lobortis nisl eu hendrerit pretium. Donec eget mauris non odio aliquam dapibus nec et tellus.
                                <br><br>
                                Morbi tristique tristique sapien, in gravida purus placerat ut. Donec volutpat ultricies arcu, sit amet consequat nisl cursus vel. Donec vulputate gravida nibh at facilisis. Donec lobortis elit a velit dapibus, vitae lobortis felis commodo. Phasellus non tortor est. Praesent malesuada, arcu ut elementum luctus, metus dui tempor enim, et fringilla eros elit at lorem. Fusce eget condimentum elit, vitae rhoncus tellus. Etiam bibendum dictum orci, et dictum quam dignissim dapibus. Aenean lacus libero, pharetra id orci eget, sollicitudin tincidunt est. Integer nec tortor ac tellus fringilla eleifend ut a augue. Phasellus vestibulum sapien eu finibus hendrerit. Donec ut accumsan nunc, sit amet vestibulum eros. Vivamus nec sagittis ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi semper lectus sit amet sodales interdum.
                                <br><br>
                                In tincidunt erat in justo consequat, sit amet hendrerit arcu imperdiet. Nullam aliquam lorem quam. Sed mollis lacus sed felis elementum, vel eleifend libero vehicula. Aliquam vulputate ornare enim. Nunc semper leo sed purus tincidunt, at mattis eros hendrerit. Aliquam dapibus lorem nec hendrerit ornare. Suspendisse non enim mi. In non nisl mi. Duis nunc lacus, vulputate eget pretium suscipit, pharetra vel massa. Maecenas lobortis augue quis bibendum convallis. Donec dignissim ac ipsum a congue. Phasellus congue massa et tellus molestie fermentum. Aliquam erat volutpat.
                                <br><br>
                                Sed iaculis ut nisi sed tincidunt. Cras ultricies fermentum orci at varius. Curabitur augue metus, congue sed est vel, aliquam fringilla urna. In pellentesque, dui vel finibus egestas, diam odio pulvinar velit, nec consequat felis massa eget justo. Etiam ac ligula mi. Mauris felis erat, maximus eu nisi at, placerat pretium mi. Nulla tempus, elit et iaculis elementum, tellus nisi gravida lacus, eu pulvinar nibh tortor vel nibh.
                                <br><br>
                                Ut non leo in magna lacinia porta ac ut libero. Ut varius risus nec lectus tincidunt, facilisis semper nibh consequat. Quisque rhoncus nibh diam, vitae semper magna egestas et. Pellentesque faucibus mauris purus, ut aliquam dolor fermentum vitae. Fusce vehicula quam et tellus ultricies sollicitudin. Donec malesuada ultrices neque vel aliquam. Suspendisse at tempus risus, a blandit dolor. Donec ut mollis risus. Aliquam et quam non ligula convallis convallis a ut eros. Nam a mi volutpat turpis rutrum dignissim nec et ante. Donec non faucibus metus. Mauris blandit nunc nunc, ac faucibus massa dignissim ac. Proin in hendrerit neque, eu rhoncus ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <br><br>
                                Phasellus leo ante, volutpat ut elit at, lobortis euismod lectus. Donec scelerisque magna sed gravida porta. Quisque aliquam, tellus sed viverra egestas, purus metus molestie elit, dapibus dapibus odio dui eget nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer at gravida lectus. Suspendisse potenti. Nullam eu aliquet quam, id vestibulum tortor. Fusce ac magna ac turpis consequat iaculis sed sit amet leo. Vivamus pharetra blandit lectus, eget rhoncus nisl tempus tincidunt. Vivamus ultrices lorem sit amet urna sodales, vitae finibus eros vulputate. Pellentesque nec mauris non sapien rutrum tincidunt iaculis sit amet leo. Nam at varius ante. Ut quis pretium quam. Fusce est nunc, mollis nec laoreet vitae, iaculis in mauris. Nullam eget purus iaculis, luctus arcu ac, maximus turpis. Vivamus fermentum at nisi in elementum.
                                <br><br>
                                Nulla consectetur dui a imperdiet auctor. Ut et augue leo. Mauris ultrices felis vel nunc tincidunt, vel tristique mauris facilisis. Quisque egestas faucibus metus, sit amet ultrices tortor suscipit id. Sed vestibulum enim risus, at posuere sapien dignissim non. Donec lacinia justo arcu, at placerat purus fringilla in. Integer consequat ipsum massa, vitae maximus ipsum pharetra a. Fusce quis leo risus. Donec blandit posuere finibus. Fusce malesuada ex id bibendum condimentum. Cras vestibulum accumsan vulputate. Aenean eget leo diam. In turpis mauris, blandit vel consectetur non, gravida sit amet nibh. 
                            </div>		
                        </div>
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Sobre:
                            </div>
                            <div class="panel-body" style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales mauris a diam auctor aliquet. Nullam malesuada placerat eros, in pharetra sapien feugiat in. In sit amet eros lacus. Donec porttitor massa orci, et blandit ex ornare quis. Donec mollis elementum augue eget dapibus. Cras pulvinar consequat arcu ac posuere. Nunc tristique purus risus, a feugiat eros convallis a. Nullam iaculis volutpat felis non blandit. Vestibulum dapibus turpis ac massa suscipit condimentum.
                                <br><br>
                                Sed mauris lectus, feugiat sit amet elementum ut, porttitor ac magna. Aliquam nec mi a augue cursus interdum. Suspendisse massa lorem, fringilla vel nisl nec, pharetra interdum risus. Aliquam auctor felis a justo hendrerit, id tincidunt ex efficitur. Cras fringilla et mauris vitae rutrum. Nulla condimentum eu ex ac eleifend. Vestibulum tincidunt, eros eget fringilla imperdiet, diam mi luctus libero, ac lobortis elit felis sed urna. Quisque at nisi molestie, molestie mi vel, efficitur odio. Etiam malesuada vehicula nunc, sit amet malesuada libero interdum fermentum. Donec feugiat congue vulputate.
                                <br><br>
                                Morbi sed tristique nulla. Etiam ultricies dolor sit amet turpis commodo scelerisque. Aliquam aliquet ligula eu lobortis rutrum. Aliquam in varius quam. Duis finibus eget neque quis placerat. Duis vitae enim erat. Fusce pretium orci vitae placerat posuere. Donec felis nisi, condimentum a mauris eu, pulvinar sagittis sem. Morbi sit amet augue accumsan, gravida justo ac, porttitor purus. Cras dui erat, lobortis id ornare et, tincidunt vitae urna. Vivamus vulputate sagittis dolor, vitae semper massa. Vestibulum rutrum molestie sapien, vitae commodo nisl malesuada congue. Proin tincidunt dui eros, at tristique est tempor vel.
                                <br><br>
                                Sed congue ante ut facilisis sodales. Praesent arcu sem, aliquam quis iaculis quis, posuere nec purus. Curabitur vel erat nec sem hendrerit semper. Aenean sed tempus elit. Proin nisi ligula, imperdiet vitae ex a, consectetur sodales mi. Vestibulum ante dolor, dignissim eget nunc sit amet, vehicula consectetur dui. Maecenas sollicitudin metus vitae lacus tristique tincidunt. Donec erat lorem, dignissim in tortor et, vestibulum suscipit nisi. Curabitur quis ultricies leo. Sed hendrerit leo eget est mollis dignissim. Vivamus convallis purus ac lorem semper consectetur. Duis metus tellus, viverra non mauris ac, volutpat euismod purus. Fusce lobortis nisl eu hendrerit pretium. Donec eget mauris non odio aliquam dapibus nec et tellus.
                                <br><br>
                                Morbi tristique tristique sapien, in gravida purus placerat ut. Donec volutpat ultricies arcu, sit amet consequat nisl cursus vel. Donec vulputate gravida nibh at facilisis. Donec lobortis elit a velit dapibus, vitae lobortis felis commodo. Phasellus non tortor est. Praesent malesuada, arcu ut elementum luctus, metus dui tempor enim, et fringilla eros elit at lorem. Fusce eget condimentum elit, vitae rhoncus tellus. Etiam bibendum dictum orci, et dictum quam dignissim dapibus. Aenean lacus libero, pharetra id orci eget, sollicitudin tincidunt est. Integer nec tortor ac tellus fringilla eleifend ut a augue. Phasellus vestibulum sapien eu finibus hendrerit. Donec ut accumsan nunc, sit amet vestibulum eros. Vivamus nec sagittis ligula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi semper lectus sit amet sodales interdum.
                                <br><br>
                                In tincidunt erat in justo consequat, sit amet hendrerit arcu imperdiet. Nullam aliquam lorem quam. Sed mollis lacus sed felis elementum, vel eleifend libero vehicula. Aliquam vulputate ornare enim. Nunc semper leo sed purus tincidunt, at mattis eros hendrerit. Aliquam dapibus lorem nec hendrerit ornare. Suspendisse non enim mi. In non nisl mi. Duis nunc lacus, vulputate eget pretium suscipit, pharetra vel massa. Maecenas lobortis augue quis bibendum convallis. Donec dignissim ac ipsum a congue. Phasellus congue massa et tellus molestie fermentum. Aliquam erat volutpat.
                                <br><br>
                                Sed iaculis ut nisi sed tincidunt. Cras ultricies fermentum orci at varius. Curabitur augue metus, congue sed est vel, aliquam fringilla urna. In pellentesque, dui vel finibus egestas, diam odio pulvinar velit, nec consequat felis massa eget justo. Etiam ac ligula mi. Mauris felis erat, maximus eu nisi at, placerat pretium mi. Nulla tempus, elit et iaculis elementum, tellus nisi gravida lacus, eu pulvinar nibh tortor vel nibh.
                                <br><br>
                                Ut non leo in magna lacinia porta ac ut libero. Ut varius risus nec lectus tincidunt, facilisis semper nibh consequat. Quisque rhoncus nibh diam, vitae semper magna egestas et. Pellentesque faucibus mauris purus, ut aliquam dolor fermentum vitae. Fusce vehicula quam et tellus ultricies sollicitudin. Donec malesuada ultrices neque vel aliquam. Suspendisse at tempus risus, a blandit dolor. Donec ut mollis risus. Aliquam et quam non ligula convallis convallis a ut eros. Nam a mi volutpat turpis rutrum dignissim nec et ante. Donec non faucibus metus. Mauris blandit nunc nunc, ac faucibus massa dignissim ac. Proin in hendrerit neque, eu rhoncus ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <br><br>
                                Phasellus leo ante, volutpat ut elit at, lobortis euismod lectus. Donec scelerisque magna sed gravida porta. Quisque aliquam, tellus sed viverra egestas, purus metus molestie elit, dapibus dapibus odio dui eget nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer at gravida lectus. Suspendisse potenti. Nullam eu aliquet quam, id vestibulum tortor. Fusce ac magna ac turpis consequat iaculis sed sit amet leo. Vivamus pharetra blandit lectus, eget rhoncus nisl tempus tincidunt. Vivamus ultrices lorem sit amet urna sodales, vitae finibus eros vulputate. Pellentesque nec mauris non sapien rutrum tincidunt iaculis sit amet leo. Nam at varius ante. Ut quis pretium quam. Fusce est nunc, mollis nec laoreet vitae, iaculis in mauris. Nullam eget purus iaculis, luctus arcu ac, maximus turpis. Vivamus fermentum at nisi in elementum.
                                <br><br>
                                Nulla consectetur dui a imperdiet auctor. Ut et augue leo. Mauris ultrices felis vel nunc tincidunt, vel tristique mauris facilisis. Quisque egestas faucibus metus, sit amet ultrices tortor suscipit id. Sed vestibulum enim risus, at posuere sapien dignissim non. Donec lacinia justo arcu, at placerat purus fringilla in. Integer consequat ipsum massa, vitae maximus ipsum pharetra a. Fusce quis leo risus. Donec blandit posuere finibus. Fusce malesuada ex id bibendum condimentum. Cras vestibulum accumsan vulputate. Aenean eget leo diam. In turpis mauris, blandit vel consectetur non, gravida sit amet nibh. 
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