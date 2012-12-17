<?php


include 'mysql_connection.php';

$_SG['abreSessao'] = true;         // Inicia a sess�o com um session_start()?

$_SG['caseSensitive'] = false;     // Usar case-sensitive? Onde 'thiago' � diferente de 'THIAGO'

$_SG['validaSempre'] = true;       // Deseja validar o usu�rio e a senha a cada carregamento de p�gina?
// Evita que, ao mudar os dados do usu�rio no banco de dado o mesmo contiue logado.


$_SG['paginaLogin'] = 'login_de_usuario.html'; // P�gina de login

$_SG['tabela'] = 'user';       // Nome da tabela onde os usu�rios s�o salvos

// Verifica se precisa iniciar a sess�o
if ($_SG['abreSessao'] == true) {
    session_start();
}


function validaUsuario($email, $senha) {
    global $_SG;

    $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

    // Usa a fun��o addslashes para escapar as aspas
    $nemail = addslashes($email);
    $nsenha = addslashes($senha);

    // Monta uma consulta SQL (query) para procurar um usu�rio
    $sql = "SELECT * FROM user WHERE email='$email' and password='$senha';";
    $query = mysql_query($sql);
    $resultado = mysql_fetch_assoc($query);

    // Verifica se encontrou algum registro
    if (empty($resultado)) {
    	  echo "nada";
        // Nenhum registro foi encontrado => o usu�rio � inv�lido
        return false;

    } else {
        // O registro foi encontrado => o usu�rio � valido

        // Definimos dois valores na sess�o com os dados do usu�rio
        $_SESSION['userID'] = $resultado['id']; // Pega o valor da coluna 'id do registro encontrado no MySQL
        $_SESSION['userName'] = $resultado['name']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
        $_SESSION['userEmail'] = $resultado['email'];

        // Verifica a op��o se sempre validar o login
        if ($_SG['validaSempre'] == true) {
            // Definimos dois valores na sess�o com os dados do login
            $_SESSION['userLogin'] = $usuario;
            $_SESSION['userPasswd'] = $senha;
        }

        return true;
    }
}

//fun��o que direciona pra pagina de login caso n�o haja sess�o ativa
function protegePagina() {
    global $_SG;

    if (!isset($_SESSION['userID']) OR !isset($_SESSION['userName']) OR !isset($_SESSION['userEmail'])) {
        // N�o h� usu�rio logado, manda pra p�gina de login
        endSession();
    } else if (isset($_SESSION['userID']) OR isset($_SESSION['userName'])) {
        // H� usu�rio logado, verifica se precisa validar o login novamente
        if ($_SG['validaSempre'] == true) {
            // Verifica se os dados salvos na sess�o batem com os dados do banco de dados
            if (!validaUsuario($_SESSION['userEmail'], $_SESSION['userPasswd'])) {
                // Os dados n�o batem, manda pra tela de login
                endSession();
            }
        }
    }
}

/**
 * Fun��o para expulsar um visitante
 */
function endSession() {
    global $_SG;

    // Remove as vari�veis da sess�o (caso elas existam)
    unset($_SESSION['userID'], $_SESSION['userName'], $_SESSION['userEmail'], $_SESSION['userLogin'], $_SESSION['userPasswd']);

    // Manda pra tela de login
    header("Location: ".$_SG['paginaLogin']);
}
?>