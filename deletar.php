
<?php
include("config.php");


$id = $_GET['delete'];

$insere = mysqli_query($conn, "DELETE FROM livros  WHERE id = '$id' ") or die(mysqli_error());

if($insere){

    echo "Livro  Excluido  com Sucesso!";

    header("Refresh: 3; url = index.php");
}else{

echo "Erro Ao Excluir esse Livro";

}