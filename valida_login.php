<?php
// Inclui o arquivo com o sistema de segurança
require_once("security.php");

// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Salva duas variáveis com o que foi digitado no formulário
    // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
    $email = (isset($_POST['email'])) ? $_POST['email'] : '';
    $senha = (isset($_POST['password'])) ? $_POST['password'] : '';

    // Utiliza uma função criada no seguranca.php pra validar os dados digitados
    if (validaUsuario($email, $senha) == true) {
        // O usuário e a senha digitados foram validados, manda pra página interna
        header("Location: menu_user.php");
    } else {
        echo "Usuário ou senha incorretos!";
        endSession();
    }
}
?>