<?php 
$id = $_GET['id'];

include_once("conect.php");

include_once("Crud.php");

$obj = new Crud($conect);

$dados = $obj->readInfo($id);

//var_dump($dados);

// echo $dados['nome']."<br>";

 ?>

<link rel="stylesheet" type="text/css" href="css/estilo.css">
<main>
   <header><strong>Altere os campos necessários</strong></header>

 <form action="update.php" method="post">
 	<p> Nome: <input type="text" name="pessoa" value="<?=$dados->nome;?>"> </p>
    <p> Idade: <input type="number" name="idade" value="<?=$dados->idade;?>"> </p>
    <p> E-mail: <input type="email" name="email" value="<?=$dados->email;?>"> </p>
    <p> <input type="hidden" name="id" value="<?=$dados->id;?>"> </p>

    <button type="submit"> Alterar dados </button>

 </form>
 </main>