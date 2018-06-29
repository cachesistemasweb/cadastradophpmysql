<?php
include("config.php");

$cod_livro=$_POST['cod_livro'];
$nome_livro=$_POST['nome_livro'];
$desc_livro=$_POST['desc_livro'];


$insere = mysqli_query($conn, "INSERT INTO livros SET cod_livro='$cod_livro', nome_livro='$nome_livro', desc_livro='$desc_livro' ") or die(mysqli_error());

if($insere){

    echo "Livro ".$nome_livro." Cadastrado com Sucesso!";
     header('Location: index.php');
}else{

echo "Erro";

}
