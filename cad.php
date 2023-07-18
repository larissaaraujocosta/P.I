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
        <a href ="login.php" class="voltar"><img src="seta-voltar.png"></a> <b>Requerimento</b>
    </nav>
    <div class="container">
        <form method="post" class="form-layout">
            <h1 class="page-title">CADASTRO</h1>
            <b>Nome: </b> <input name="nome" type="text"><br><br>
            <b>Número de matrícula: </b> <input name="matricula" type="text"><br><br>
            <b>CPF: </b> <input name="cpf" type="text"><br><br>
            <b>Telefone: </b> <input name="tel" type="text"><br><br>
            <b>E-MAIL: </b> <input name="email" type="text"><br><br>
            <b>Curso: </b> <input name="curso" type="text"><br><br>
            <input type="submit" value="Enviar" name="enviar"> <input type="reset" value="Limpar">
        </form>
        <?php
            include "function.php";

            extract($_POST);
            if(isset($enviar)){
                $consulta = "INSERT INTO `discentes`(`Nome`, `Matrícula`, `CPF`, `Telefone`, `E-mail`, `Curso`) VALUES ('$nome','$matricula','$cpf','$tel','$email','$curso')";
                banco($server, $user, $password, $db, $consulta);
            }
        ?>
    </div>
</body>
</html>
