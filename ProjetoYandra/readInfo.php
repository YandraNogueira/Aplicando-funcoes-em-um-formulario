<?php
include_once("conect.php");

include_once("Crud.php");

//$obj = new Crud($conect);

//$obj->readInfo();

// $dado = $obj->getAll();

// foreach ($dado as $info) {
// 	echo $info['id']." - ".$info['nome']." - ".$info['idade']." - ".$info['email']." - ".$info['data_now']."<br>";
// }


// echo "<table border='1'>";
// echo "<tr><th> Nome </th><th> Idade </th><th> E-mail </th><th> Data </th></tr>";
// foreach ($dado as $info) {
// 	echo "<tr><td>".$info['nome']."</td>
// 	<td>".$info['idade']."</td>
// 	<td>".$info['email']."</td>
// 	<td>".$info['data_now']."</td></tr>";
// }

// echo "</table>";
$nome = $_POST['nome'];
$obj = new Crud($conect);
$dado = $obj->readInfoAll($nome);


?>

<link rel="stylesheet" type="text/css" href="css/estilo.css">

<main>
<header><strong>Registro(s)!</strong></header>

<?php  

echo "<table border='1'>";
echo "<tr><th> Nome </th><th> Idade </th><th> E-mail </th><th> Data </th></tr>";
foreach ($dado as $info) {
	echo "<tr><td>".$info['nome']."</td>
	<td>".$info['idade']."</td>
	<td>".$info['email']."</td>
	<td>".$info['data_now']."</td></tr>";
}

echo "</table>";
	// echo "<tr><td>".$dado['nome']."</td>
	// <td>".$dado['idade']."</td>
	// <td>".$dado['email']."</td>
	// <td>".$dado['data_now']."</td></tr>";

?>
</main>