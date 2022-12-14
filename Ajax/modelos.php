<?php
$conexao = new PDO("mysql:host=localhost;dbname=ajax", "root", "root");
$modelos = $conexao->query("select * from modelos where fk_marca = " . $_POST['id_marca'], PDO::FETCH_OBJ);
?>
<option value="0">Selecione</option>
<?php foreach ($modelos as $m) { ?>
    <option value="<?php echo $m->id ?>"><?php echo $m->nome ?></option>
<?php } ?>