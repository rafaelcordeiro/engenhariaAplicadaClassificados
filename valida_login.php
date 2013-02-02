<?php
// Inclui o arquivo com o sistema de seguran�a
require_once("security.php");

// Verifica se um formul�rio foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva duas vari�veis com o que foi digitado no formul�rio
    // Detalhe: faz uma verifica��o com isset() pra saber se o campo foi preenchido
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $senha = (isset($_POST['password'])) ? $_POST['password'] : '';

    // Utiliza uma fun��o criada no seguranca.php pra validar os dados digitados
    if (validaUsuario($email, $senha) == true) {
        // O usu�rio e a senha digitados foram validados, manda pra p�gina interna
        header("Location: menu_user.php");
    } else {
        echo "Usu�rio ou senha incorretos!";
        endSession();
    }
}
?>