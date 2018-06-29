<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho PHP</title>
</head>
<body>
<?php include("config.php"); ?>

<?php

$result_livro = "SELECT * FROM livros";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);


while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
    $id_livro = $rows_livros['id'];
    $nome_livro = $rows_livros['nome_livro'];
    $desc_livro = $rows_livros['desc_livro'];

    echo "ID do Livro: $id_livro <br> Nome do Livro:  ".utf8_encode($nome_livro)." <br>  Descrição do Livro: ".utf8_encode($desc_livro)." <br><p>";
}



?>

<a href="formulario.html"  title="Cadastrar Livros">Cadastrar Livros<a/>

</body>
</html>



