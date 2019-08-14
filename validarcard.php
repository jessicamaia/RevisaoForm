<?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST"){
		@$NCartao = @$_POST ['cardnumber'];
		@$data = @$_POST ['cardexpiration'];
		@$codigo = @$_POST ['cardcvc'];	
    } 
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
    <p>
       O número do seu cartão é: <?php echo $NCartao; ?>
       <?php
        if(strlen($NCartao)!= 16){
            echo "<br> A quantidade de dígitos inseridos não é válida!";
        }
       ?>
    </p>

    <p>
        Seu cartão expira: <?php echo $data;?>
    </p>

    <p>
       Seu código CVC é: <?php  echo $codigo; ?>
    </p>
</body>
</html>