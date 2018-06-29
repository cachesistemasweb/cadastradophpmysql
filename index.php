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



<h1>Trabalho PHP </h1>
<h5>cadastro e consulta usando MySQL</h5>

<h3><a href="formulario.html"  title="Cadastrar Livros">Cadastrar Livros<a/></h3><br>

<?php

$result_livro = "SELECT * FROM livros";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);


while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
    $codigo_livro = $rows_livros['cod_livro'];
    $nome_livro = $rows_livros['nome_livro'];
    $desc_livro = $rows_livros['desc_livro'];

    echo " XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>
           X     Código do Livro: <strong>$codigo_livro</strong>                                   <br> 
           X     Nome do Livro:   <strong>".utf8_encode($nome_livro)."</strong>                    <br> 
           X     Descrição do Livro:<strong>".utf8_encode($desc_livro)."  </strong>                <br> 
           XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>
           <br>";
}



?>



</body>
</html>



