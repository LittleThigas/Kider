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

        $NomePais = $_POST['NomePais'];
        $NomeCrianca = $_POST['NomeCrianca'];
        $Email = $_POST['Email'];
        $Idade = $_POST['Idade'];
        $Mensagem = $_POST['Mensagem'];

        $sql = "INSERT INTO PERGUNTA(NomePais, NomeCrianca, Email, Idade, Mensagem) VALUES('$NomePais','$NomeCrianca','$Email', '$Idade', '$Mensagem')";

        if(executarComando($sql)){
            echo "<h2> A mensagem foi enviada! </h2>";
        }else{
            echo "<h2> Falha ao enviar a mensagem. </h2>";
        }
    ?>
</body>
</html>