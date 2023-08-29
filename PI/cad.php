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
            <b>Número de matrícula/ SIAPE: </b> <input name="matricula" type="text"><br><br>
            <b>Senha: </b> <input name="senha" type="password"><br><br>
            <b>CPF: </b> <input name="cpf" type="text"><br><br>
            <b>Telefone: </b> <input name="tel" type="text"><br><br>
            <b>E-MAIL: </b> <input name="email" type="text"><br><br>
            <b>Curso/Coordenação: </b> <input name="curso" type="text"><br><br>
            <input type="submit" value="Enviar" name="enviar"> <input type="reset" value="Limpar">
            <?php
                include "function.php";

                extract($_POST);
                if(isset($enviar)){
                    if(strlen($matricula) == 12){
                        $consulta = "INSERT INTO `discentes`(`NOME`, `MATRICULA`, `SENHA`, `CPF`, `TELEFONE`, `EMAIL`, `CURSO`) VALUES ('$nome','$matricula','$senha','$cpf','$tel','$email','$curso')";
                        banco($server, $user, $password, $db, $consulta);
                    }
                    if(strlen($matricula) == 7){
                        $consulta = "INSERT INTO `adm`(`NOME`, `SIAPE`, `SENHA`, `CPF`, `TELEFONE`, `EMAIL`, `COORDENAÇÃO`) VALUES ('$nome','$matricula','$senha','$cpf','$tel','$email','$curso')";
                        banco($server, $user, $password, $db, $consulta);
                    }
                    else{
                        echo "Não se esqueça da Matrícula/SIAPE";
                    }
                }
            ?>
        
        </form>

    </div>
</body>
</html>
