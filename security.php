<?php


include 'mysql_connection.php';

$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?

$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'

$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.


$_SG['paginaLogin'] = 'user_login.php'; // Página de login

$_SG['tabela'] = 'user';       // Nome da tabela onde os usuários são salvos

// Verifica se precisa iniciar a sessão
if ($_SG['abreSessao'] == true) {
    session_start();
}


function validaUsuario($email, $senha) {
    global $_SG;

    $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

    // Usa a função addslashes para escapar as aspas
    $nemail = addslashes($email);
    $nsenha = addslashes($senha);

    // Monta uma consulta SQL (query) para procurar um usuário
    $sql = "SELECT * FROM user WHERE email='$email' and password='$senha';";
    $query = mysql_query($sql);
    $resultado = mysql_fetch_assoc($query);

    // Verifica se encontrou algum registro
    if (empty($resultado)) {
    	  echo "nada";
        // Nenhum registro foi encontrado => o usuário é inválido
        return false;

    } else {
        // O registro foi encontrado => o usuário é valido

        // Definimos dois valores na sessão com os dados do usuário
        $_SESSION['userID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
        $_SESSION['userName'] = $resultado['name']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
        $_SESSION['userEmail'] = $resultado['email'];

        // Verifica a opção se sempre validar o login
        if ($_SG['validaSempre'] == true) {
            // Definimos dois valores na sessão com os dados do login
            $_SESSION['userEmail']  = $resultado['email'];
            $_SESSION['userPasswd'] = $resultado['password'];
        }

        return true;
    }
}

//função que direciona pra pagina de login caso não haja sessão ativa
function protegePagina() {
    global $_SG;

    if (!isset($_SESSION['userID']) OR !isset($_SESSION['userName']) OR !isset($_SESSION['userEmail'])) {
        // Não há usuário logado, manda pra página de login
        endSession();
    } else if (isset($_SESSION['userID']) OR isset($_SESSION['userName'])) {
        // Há usuário logado, verifica se precisa validar o login novamente
        if ($_SG['validaSempre'] == true) {
            // Verifica se os dados salvos na sessão batem com os dados do banco de dados
            if (!validaUsuario($_SESSION['userEmail'], $_SESSION['userPasswd'])) {
                // Os dados não batem, manda pra tela de login
                endSession();
            }
        }
    }
}

/**
 * Função para expulsar um visitante
 */
function endSession() {
    global $_SG;

    // Remove as variáveis da sessão (caso elas existam)
    unset($_SESSION['userID'], $_SESSION['userName'], $_SESSION['userEmail'], $_SESSION['userLogin'], $_SESSION['userPasswd']);

    // Manda pra tela de login
    header("Location: ".$_SG['paginaLogin']);
}
?>