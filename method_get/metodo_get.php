<?php
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    echo 'Erro desconhecido! Por favor tente novamente';
}

  
?>
<h1> O seu nome é <?= $nome ?> e sua idade é <?= $idade ?></h1>