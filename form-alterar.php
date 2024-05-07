<?php include "header.php"; 
include "conexao.php";
$id = $_GET["id"];

$nome = "nome do pokemon";
$tipo = "tipo do pokemon";
$foto = "foto do pokemon";

$sql = "select * from tb_pokemon where id= $id";
$resultado = mysqli_query($conexao, $sql);
while($umPokemon = mysqli_fetch_assoc($resultado)):
    $nome = $umPokemon['nome'];
    $tipo = $umPokemon['tipo'];
    $foto = $umPokemon['foto'];
endwhile;
?>
    <h2>EDITAR POKEMON NUMERO <?= $id?></h2>
    <form method="post" action="atualizar.php?id=<?=$id?>" enctype="multipart/form-data">
        <input type="text" name="nome" placeholder="Nome" class="form-control" value="<?=$nome?>">


        <input type="radio" name="tipo" value="Normal" class="form-check-input"<?php if ($tipo == 'Normal'){echo "checked";}?>> Normal
        <input type="radio" name="tipo" value="Fogo" class="form-check-input"<?php if ($tipo == 'Fogo'){echo "checked";}?>> Fogo 
        <input type="radio" name="tipo" value="Água" class="form-check-input"<?php if ($tipo == 'Água'){echo "checked";}?>> Água
        <input type="radio" name="tipo" value="Grama" class="form-check-input"<?php if ($tipo == 'Grama'){echo "checked";}?>> Grama
        <input type="radio" name="tipo" value="Voador" class="form-check-input"<?php if ($tipo == 'Voador'){echo "checked";}?>> Voador

        <br>
        Foto: <input type="file" name="foto"><br>
        <br>
        <img src="img/<?=$foto?>" alt="<?=$foto?>" class="img-fluid">
        <br>
        <button class="btn btn-primary mt-5" type="submit"> 
            Salvar Pokemon
        </button>
    </form>
<?php
mysqli_close($conexao);
include "footer.php"; 
?>