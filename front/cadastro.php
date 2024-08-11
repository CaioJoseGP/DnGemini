<?PHP
include "../Negocio/usuario.php";
include "../DAO/conexao.php";
include "../DAO/usuarioDAO.php";

$msg = "";

if (!empty($_POST)){
    $objeto = new Usuario();
    $objeto->set("nome", $_POST["nome"]);
    $objeto->set("email",  $_POST["email"]);
    $objeto->set("senha",  $_POST["senha"]);

    foreach($_POST as $chave=>$campo) {
        if($campo == "Cadastrar-se"){  
            $msg = $objeto->cadastrar();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - D&Gemini</title>

    <link rel="stylesheet" href="./css/style_forms.css">
    <link rel="icon" href="../assets/dng_icon.png">
</head>
<body>
    <div id="container">
        <div id="project-img">
            <img src="../assets/project_img.png" alt="Dado com símbolos de TRPG nas faces e 'D&Gemini' escrito embaixo, tudo branco">
        </div>

        <div id="form">
            <form id="form-cadastro" method="$_POST">
                <input name="name" id="name" type="text" placeholder="Nome:" required>
                <input name="email" id="email" type="text" placeholder="Email:" required>
                <input name="password" id="password" type="text" placeholder="Senha:" required>
                <input name="conf-password" id="conf-password" type="text" placeholder="Confirmar Senha:" required>
    
                <p>
                    Já possui uma conta? <a href="login.php">Faça Login</a>
                </p>
                
                <?php echo $msg; ?>
                <input name="btnCadastrar" id="btnCadastrar" type="submit" value="Cadastre-se">
            </form>
        </div>
    </div>
</body>
</html>