<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Livro</title>
</head>
<h1>Editar  Livros</h1>
<body>

<?php
include("config.php");
$id = $_GET['update'];
$result_livro = "SELECT * FROM livros WHERE id='$id'";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);

while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
        $codigo_livro  = $rows_livros['cod_livro'];
        $nome_livro    = $rows_livros['nome_livro'];
        $desc_livro    = $rows_livros['desc_livro'];


}


?>   <form action="update.php" method="post">
                 <input type="hidden" name="id" value="<?=$id?>" />
                <label>Código do Livro: </label> <input type="text"  value="<?=$codigo_livro?>" name="cod_livro"/>
                <label>Nome do Livro: </label> <input type="text"    value="<?=$nome_livro?>"   name="nome_livro"/>
                <label>Descrição Livro</label> <input type="text"     value="<?=$desc_livro?>"   name="desc_livro"/>
             
                <input type="submit" value="Atualizar">
             
             </form>
    
</body>
</html>

