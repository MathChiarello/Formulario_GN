<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-teste';

    $conexao = new mysqli($dbHost , $dbUsername , $dbPassword , $dbName);

    // Validação de Conexão

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>