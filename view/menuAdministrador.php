<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

    <?php
    
    require_once 'webcomplements.php';
    
    ?>
    <div class="container">
        <h1>Administrador</h1>
        <table border="0" width="100%" class="table table-danger">
            <tr>
                <td>
                    <button type="button" class="btn btn-warning"><a href="listarAllCliente.php" target="centro">Listar Cliente</a></button>
                    <button type="button" class="btn btn-warning"><a href="formCadastrarCliente.php" target="centro">Cadastrar Cliente</a></button>
                    <button type="button" class="btn btn-warning"><a href="listarAllUsuario.php" target="centro">Listar Usuário</a></button>
                    <button type="button" class="btn btn-warning"><a href="formCadastroUsuario.php" target="centro">Cadastrar Usuário</a></button>
                </td>
        </table>
    </div>
</body>

</html>
