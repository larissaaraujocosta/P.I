<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <b>Requerimento</b>
    </nav>
    <div class="container">
        <form method="post" action="login.php" class="login-form">
            <h1 class="page-title">LOGIN</h1><br>
            <label for="usuario">USUÁRIO:</label>
            <input type="text" name="usuario" id="usuario" class="input-field"><br><br>
            <label for="senha">SENHA:</label>
            <input type="password" name="senha" id="senha" class="input-field"><br>
            <input type="submit" name="enviar" value="Acessar"><br><br>
            <?php
                include "function.php";

                extract($_POST);
                if (isset($enviar)){
                    if(strlen($usuario) == 12){
                        $consulta = "SELECT * FROM `discentes` WHERE `MATRICULA` = $usuario AND `SENHA` = '$senha'";
                        $res = banco($server, $user, $password, $db, $consulta);
                        if($linha = $res->fetch_assoc()){
                            header("Location: Requerimento.php");
                        }
                        else{
                            echo '<h3>Usuário/Senha Incorreta!</h3>';
                        }
                    }
                    
                    if(strlen($usuario) == 7){
                        $consulta = "SELECT * FROM `adm` WHERE `SIAPE` = $usuario AND `SENHA` = '$senha'";
                        $res = banco($server, $user, $password, $db, $consulta);
                        if($linha = $res->fetch_assoc()){
                            header("Location: Requerimento.php");
                        }
                        else{
                            echo '<h3>Usuário/Senha Incorreta!</h3>';
                        }
                    
                    }
                }

        ?>
            <p>Ainda não tem conta? <a href="cad.php">Cadastre-se</a></p>
        </form>  
    </div>
    
</body>
</html>
