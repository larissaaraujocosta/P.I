<!-- html do requerimento, sem conexão com o banco -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimento</title>
</head>
<body>
    <form method="post">   
        <b>Requerente: </b> <input name="requerente" type="text" ><br><br>
        <b>Endereço (Rua,Praça, Avenida): </b> <input name="end" type="text" >
        <b>N°: </b> <input name="num" type="text" >
        <b>Bairro: </b> <input name="bairro" type="text" ><br><br>
        <b>Cidade: </b> <input name="Cidade" type="text" >
       
        <h1>Objetivo do requerimento</h1>
        
        <input type="checkbox" id="justificativa" value="just"> Justificativa de Falta<br>

        <input type="checkbox" id="segchamada"  value="segundachamada"> Segunda chamada<br><br>
       
        <b>Informações complementares: </b> <br>
        <textarea name="info" rows="4" cols="50"></textarea><br><br>
        <input type='submit' name='enviar'>
        </form>
        <?php
            extract($_POST); 
            if(isset($enviar)){
                $Requerente=$_POST['requerente'];
                $Endereço=$_POST['end'];
                $num=$_POST['num'];
                $bairro=$_POST['bairro'];
                $cidade=$_POST['cidade'];
            }
         
            ?>
            
                
        
</html>
