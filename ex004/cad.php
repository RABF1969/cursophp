<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
      <?php        // var_dump($_GET); //$_GET $_POST $_COOKIES
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é o meu site!";
      ?>  
      <p><a href="javascript:history.go(-1)">voltar para página anterior</a></p>
    </main>
</body>
</html>
