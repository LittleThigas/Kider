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

        $Nome = $_POST['Nome'];
        $Formacao = $_POST['Formacao'];
        $TempoExperiencia = $_POST['TempoExperiencia'];
        $EscolaAnterior = $_POST['EscolaAnterior'];
        $TurnoDisponivel = $_POST['TurnoDisponivel'];

        $sql = "INSERT INTO PROFESSOR(Nome, Formacao, TempoExperiencia, EscolaAnterior, TurnoDisponivel) VALUES('$Nome','$Formacao','$TempoExperiencia', '$EscolaAnterior', '$TurnoDisponivel')";

        if(executarComando($sql)){
            echo "<h2> O Professor foi Registrado com sucesso! </h2>";
        }else{
            echo "<h2> Falha ao registrar o professor. </h2>";
        }
    ?>
</body>
</html>