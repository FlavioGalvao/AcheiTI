<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <?php
    require_once '../dao/usuarioDAO.php';
    $usuarioDAO = new UsuarioDAO();
    $usuarios = $usuarioDAO->getAllUsuario();
    
    // listar todos os Usuários
    echo "<table align='center'>";
    echo "<tr>";
    echo "<th>Usuário</th>";
    echo "<th>Perfil</th>";
    echo "<th>Excluir</th>";
    echo "<th>Alterar</th>";
    echo "</tr>";
    foreach ($usuarios as $u) {
    echo"<tr>";
    echo"<td> {$u["usuario"]} </td>";
    echo"<td> {$u['perfil_idperfil']} </td>";
    echo"<td>
        <a href='../controller/excluirUsuarioByIdController.php?id={$u["idusuario"]}'>
        Excluir
        </a></td>";
    echo "<td>
        <a href=' formAlterarUsuario.php?id={$u["idusuario"]}'>
        Alterar
        </a></td>";
    echo "</tr>";
     }
    echo "</table>";
    
    ?>
    
</body>
</html>
