<?php
include("config.php");


$result_livro = "SELECT * FROM livros";
$resultado_livro = mysqli_query($conn, $result_livro);
$total_livro = mysqli_num_rows($resultado_livro);


while($rows_livros = mysqli_fetch_assoc($resultado_livro)) {
    $id =  $rows_livros['id'];
    $codigo_livro = $rows_livros['cod_livro'];
    $nome_livro = $rows_livros['nome_livro'];
    $desc_livro = $rows_livros['desc_livro'];

    echo "<br> 
                 Código do Livro: <strong>$codigo_livro</strong>                                   <br> 
                 Nome do Livro:   <strong>".utf8_encode($nome_livro)."</strong>                    <br> 
                 Descrição do Livro:<strong>".utf8_encode($desc_livro)."  </strong>                <br>

        <br><a href='editar.php?update=$id' >Editar Livro<a/> ou <a href='deletar.php?delete=$id'>Excluir Livro<a/><br> 

          <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<br>
           <br>";
}



?>