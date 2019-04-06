<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="../controller/cadastraUsuarioController.php" method="post">
        <label>Nome</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha</label>
        <input type="password" name="senha">
        <br>
        <label>Perfil</label>
        Administrador<input type="radio" name="perfil_idperfil" value="1">
        Usuário<input type="radio" name="perfil_idperfil" value="2">
        <br>
        <input type='submit' value='Enviar'>
    </form>
    <center>
        <?php
            if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
            }
        ?>
    </center>

</body>

</html>
