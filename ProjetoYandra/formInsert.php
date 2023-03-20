<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Insert</title>
</head>
<body>
    <main>
    <header><strong>Cadastrar Dados dos clientes</strong></header>
    <section>
     <form action="insert.php" method="post">
        <p> Nome: <input type="text" name="nome"> </p>
        <p> E-mail: <input type="email" name="e-mail"> </p>
        <p> Idade: <input type="number" name="idade"> </p>
        <button type="submit"> Inserir dados </button>
     </form>
     </section>
     </main>
</body>
</html>