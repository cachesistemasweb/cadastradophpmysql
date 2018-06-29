
<?php
include("config.php");

$cod_livro=$_POST['cod_livro'];
$nome_livro=$_POST['nome_livro'];
$desc_livro=$_POST['desc_livro'];
$id = $_POST['id'];

$insere = mysqli_query($conn, "UPDATE livros SET cod_livro='$cod_livro', nome_livro='$nome_livro', desc_livro='$desc_livro' WHERE id = '$id' ") or die(mysqli_error());

if($insere){

    echo "Livro <strong>".$nome_livro."</strong> Atualizado  com Sucesso!";
    header("Refresh: 2; url = index.php");
}else{

echo "Erro";

}