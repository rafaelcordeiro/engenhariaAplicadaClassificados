<?php


include 'mysql_connection.php';

$_SG['abreSessao'] = true;         // Inicia a sessуo com um session_start()?

$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' щ diferente de 'THIAGO'

$_SG['validaSempre'] = true;       // Deseja validar o usuсrio e a senha a cada carregamento de pсgina?
// Evita que, ao mudar os dados do usuсrio no banco de dado o mesmo contiue logado.


$_SG['paginaLogin'] = 'login_de_usuario.html'; // Pсgina de login

$_SG['tabela'] = 'user';       // Nome da tabela onde os usuсrios sуo salvos

// Verifica se precisa iniciar a sessуo
if ($_SG['abreSessao'] == true) {
    session_start();
}


function validaUsuario($email, $senha) {
    global $_SG;

    $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

    // Usa a funчуo addslashes para escapar as aspas
    $nemail = addslashes($email);
    $nsenha = addslashes($senha);

    // Monta uma consulta SQL (query) para procurar um usuсrio
    $sql = "SELECT * FROM user WHERE email='$email' and password='$senha';";
    $query = mysql_query($sql);
    $resultado = mysql_fetch_assoc($query);

    // Verifica se encontrou algum registro
    if (empty($resultado)) {
    	  echo "nada";
        // Nenhum registro foi encontrado => o usuсrio щ invсlido
        return false;

    } else {
        // O registro foi encontrado => o usuсrio щ valido

        // Definimos dois valores na sessуo com os dados do usuсrio
        $_SESSION['userID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
        $_SESSION['userName'] = $resultado['name']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
        $_SESSION['userEmail'] = $resultado['email'];

        // Verifica a opчуo se sempre validar o login
        if ($_SG['validaSempre'] == true) {
            // Definimos dois valores na sessуo com os dados do login
            $_SESSION['userLogin'] = $usuario;
            $_SESSION['userPasswd'] = $senha;
        }

        return true;
    }
}

//funчуo que direciona pra pagina de login caso nуo haja sessуo ativa
function protegePagina() {
    global $_SG;

    if (!isset($_SESSION['userID']) OR !isset($_SESSION['userName']) OR !isset($_SESSION['userEmail'])) {
        // Nуo hс usuсrio logado, manda pra pсgina de login
        endSession();
    } else if (isset($_SESSION['userID']) OR isset($_SESSION['userName'])) {
        // Hс usuсrio logado, verifica se precisa validar o login novamente
        if ($_SG['validaSempre'] == true) {
            // Verifica se os dados salvos na sessуo batem com os dados do banco de dados
            if (!validaUsuario($_SESSION['userEmail'], $_SESSION['userPasswd'])) {
                // Os dados nуo batem, manda pra tela de login
                endSession();
            }
        }
    }
}

/**
 * Funчуo para expulsar um visitante
 */
function endSession() {
    global $_SG;

    // Remove as variсveis da sessуo (caso elas existam)
    unset($_SESSION['userID'], $_SESSION['userName'], $_SESSION['userEmail'], $_SESSION['userLogin'], $_SESSION['userPasswd']);

    // Manda pra tela de login
    header("Location: ".$_SG['paginaLogin']);
}
?>