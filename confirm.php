<?php
    include "./validar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ficha do Usuário</h1>
    <p> 
       <b> Nome completo: </b>  <?php echo $nome." ".$sobrenome. "<br>";?>
    </p>

    <p>
        <?php echo $sobrenome. "<br>";?>
    </p>

    <p>
      <b> Email: </b> <?php echo $email. "<br>";?>
    </p>

    <p>
        <b> Senha: </b> <?php  echo $password. "<br>";?>
    </p>

    <p>
       <b> Confirmação de senha: </b> <?php  echo $confirm_password. "<br>";?>
    </p>

    <?php 
        if ($password != $confirm_password){
            echo "As senhas inseridas não coincidem";
        }
    ?>

    <p>
         <?php 
            if ($termos == true){
                echo "<b>Termos Aceitos</b>";
            } else { 
                echo "Termos não aceitos";
            }
         ?> 
    </p>

</body>
</html>