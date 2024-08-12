<?PHP
include "../Negocio/usuario.php";
include "../DAO/conexao.php";
include "../DAO/usuarioDAO.php";

$msg = "";

if(!empty($_POST)){
    $objeto = new Usuario();
    $objeto->set("email", $_POST["email"]);
    $objeto->set("senha",  $_POST["password"]);
    $dados = $objeto->consultarUsuarioPorEmail();
    foreach ($dados as $chave => $valor) {
        if ($valor["email"] == $_POST["email"] && $valor["senha"] == $_POST["password"]){
            header("Location: wallpaper_2.html");
        } else {
            $msg = "Email ou senha incorretos";
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
    <title>Login - D&Gemini</title>

    <link rel="stylesheet" href="./css/style_forms.css">
    <link rel="icon" href="../assets/dng_icon.png">
</head>
<body>
    <div id="container">
        <div id="project-img">
            <img src="../assets/project_img.png" alt="Dado com símbolos de TRPG nas faces e 'D&Gemini' escrito embaixo, tudo branco">
        </div>

        <div id="form">
            <form id="form-login" method="post" action="">
                <h1>Login</h1>
    
                <input name="email" id="email" type="text" placeholder="Email:" required>
                <input name="password" id="password" type="password" placeholder="Senha:" required>
    
                <a id="pass-forgot" href="pass_forgot.html">Esqueceu a senha?</a>
                <?php echo $msg; ?>
                <div id="form-buttons">
                    <a href="cadastro.php">Cadastre-se</a>
                    <input name="entrar" id="entrar" type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>