<?php
function __e($input) {
    $input = trim($input); // Remove espaços e tabulações
    $input = stripslashes($input); // Impede o uso do caracter barra (/)
    $input = htmlspecialchars($input); // Remove caracteres html da string
    return $input;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = __e($_POST["first_name"]);
	$sobrenome = __e($_POST["last_name"]);
	$email = __e($_POST["email"]);
	$password = __e($_POST["password"]);
    $confirm_password = __e($_POST["confirm_password"]);
    $termos = __e($_POST["check"]);
}

?>

