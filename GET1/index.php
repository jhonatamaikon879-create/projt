<?php
//  $host = "localhost";
//  $dbname = "agenda";
//  $user="root";
//  $pass = "";

 

// $pdo = new PDO("mysql:host=$host;  dbname=$dbname", "usuario0","senha"  );


// $stmt =$pdo -> prepare("SELECT nome, telefone, observacoes FROM contatos WHERE id = ?");


// $stmt -> execute([$_GET["id"]]);

// $contato = $stmt -> fetchAll(PDO :: FETCH_ASSOC);
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100 ">
    <div class=" justify-content-center border">

<div class="container">
    <h2>FORMULARIO</h2>

    <ul class="list-group">
        <li class="list-group-item d-flex align-items-center">
            <i class="bi bi-person-fill me-3 fs-4"></i>
            <div>

        <div>
            <label for="nome">Digite seu nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Nome">
        </div>

        <div>
             <label for="Email">Email:<label>
            <input type="text" id="Email" name="Email" placeholder="Email">
        </div>

        <button type="submit">Enviar</button>
    
</div>
        </li>

    </ul>

</div>

</div>
</body> 