<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include ('conexao_bd.php');

        $Login = $_POST['Login'];
        $Senha = $_POST['Senha'];
        $NomeCompleto = $_POST['NomeCompleto'];
        $Email = $_POST['Email'];
        $Telefone = $_POST['Telefone'];

        $sql = "INSERT INTO CONTA(Login, Senha, NomeCompleto, Email, Telefone) VALUES('$Login','$Senha','$NomeCompleto', '$Email', '$Telefone')";

        if(executarComando($sql)){
            echo "<h2> Conta Realizada! </h2>";
        }else{
            echo "<h2> Falha ao realizar a conta. </h2>";
        }
    ?>
</body>
</html>