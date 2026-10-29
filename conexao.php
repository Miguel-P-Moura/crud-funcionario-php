<?php
    // Este arquivo CONECTA com o banco de dados MySQL

    // 1) Definir as variáveis
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "";
    $bd       = "empresa";

    // 2) Chamar o comando para CONECTAR
    $result = mysqli_connect($servidor, $usuario, $senha, $bd);

    // 3) Se a conexão falhar, mostrar o erro e parar
    if (!$result) {
        die("Erro ao conectar: " . mysqli_connect_error());
    }

    // Linha só para TESTE. Mantenha comentada (com //) depois de testar.
    // echo "Conexao realizada com sucesso";
?>