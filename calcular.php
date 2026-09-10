<?php
 //obter os dados(entrada)
    $nome = $_POST['Tnome'];
    $anoNasc = (int) $_POST['Tano'];
    $anoAtual = (int) date ('Y'); //obtem o ano do sistema
//prodessamento
    $idade = $anoAtual - $anoNasc;
//saida

    //echo "<h2>$nome, sua idade é $idade anos</h2>";
//Dados recebidos
$diasVividos = $idade * 365.25;
$horasVividas = $diasVividos * 24;
$minutosVividos = $horasVividas * 60;

$bpmMedio = 75;
$respiracoesPorMinutos = 17;

$batimentosTotais = $bpmMedio * $minutosVividos;
$respiracoesTotais = $respiracoesPorMinutos * $minutosVividos;

$expectativaDeVida = 95;
$diasVividosExpectativas = $expectativaDeVida * 365.25;
$horasVividasExpectativas = $diasVividosExpectativas * 24;
$minutosVividosExpectativas =$horasVividasExpectativas * 60;

$expectativaBatimentos = $bpmMedio * $minutosVividosExpectativas;
$expectativaRespirações = $respiracoesTotais * $minutosVividosExpectativas;

$anosRestantes = $idade - $expectativaDeVida;
$batimentosRestantes = $expectativaBatimentos - $batimentosTotais;
$respiracoesRestantes = $expectativaRespirações = $respiracoesTotais;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de vida</title>
</head>
<body>
    <h1>Tempo de vida</h1>
    <hr>

    <h2><?php echo $nome?> sua iadade é: <?php $idade ?></h2>
    
</body>
</html>