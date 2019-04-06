<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    require_once '../dto/usuarioDTO.php';
    require_once '../dao/usuarioDAO.php';
    
    
// recuperei os dados do formulario
            $usuario = $_POST["usuario"];
            $senha = md5($_POST["senha"]);
            $perfil = $_POST["perfil_idperfil"];
            $usuarioDTO = new UsuarioDTO();
            $usuarioDTO->setUsuario($usuario);
            $usuarioDTO->setSenha($senha);
            $usuarioDTO->setPerfil($perfil);
            $usuarioDAO = new UsuarioDAO();
            $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);
    
        if ($sucesso) {
            $msg = "Usuário Cadastrado com sucesso";
            echo "<script>";
            echo"window.location.href='../view/formCadastroUsuario.php?msg={$msg}' ";
            echo "</script> ";
        }
    
    ?>

</body>

</html>
