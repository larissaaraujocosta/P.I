<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action='login.php'>
            USUÁRIO: <input TYPE='text' name='usuario' ><br><br>
            SENHA: <input type='password' name= 'senha'  ><br><br>
            <input type='submit' name='enviar' value='Acessar' ><br><br>
            <a href="recuperar.php">Esqueceu senha?</a><br>
            <p>Ainda não tem conta? <a href="cod.php">Cadastre-se</a><br><br></p>
            </form>  
    <?php
        extract($_POST);
        
        if (isset($enviar)){
            
        }
    ?>
</body>
</html>
