<?php

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $email =  email_create($_POST['email']);
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    

?>

<html>
    <head>
        <title>Resposta - POST</title>
        <meta charset="utf-8" >
    </head>

    <body>
        <p>Nome: <?php echo $nome ?> </p>
        <p>Sobrenome: <?php echo $sobrenome ?> </p>
        <p>Idade: <?php echo $idade ?> </p>
        <p>Email: <?php echo $email ?> </p>
        <p>Cidade: <?php echo $cidade ?> </p>
        <p>Telefone: <?php echo $telefone ?> </p>
        
    </body>
</html>