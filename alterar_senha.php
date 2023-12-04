<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
<body>
    <div class="alterar1">
        <form class="change-password-form" method="post" action="alterar_senha.php">
            <h1>Alterar Senha</h1>
            <label for="senha_atual">Senha Atual:</label>
            <input type="password" name="senha_atual" id="senha_atual" class="input-field">
            <label for="nova_senha">Nova Senha:</label>
            <input type="password" name="nova_senha" id="nova_senha" class="input-field">
            <label for="confirmar_senha">Confirmar Nova Senha:</label>
            <input type="password" name="confirmar_senha" id="confirmar_senha" class="input-field">
            <input type="submit" name="alterar_senha" value="Alterar Senha" class="change-password-button">
            <?php
                    include "function.php";

                    extract($_POST);
                    if(isset($alterar_senha)) {
                        if($nova_senha == $confirmar_senha) {
                            $consulta = "UPDATE `discentes` SET `SENHA`='$nova_senha' WHERE 1";
                            banco($server, $user, $password, $db, $consulta);
                           
                        }
                    }
                ?>
        </form>
    </div>


</body>
</html>
