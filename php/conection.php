<?php

    $gc_host    = "sql10.freemysqlhosting.net";
    $gc_usuario = "sql10287940";
    $gc_senha   = "1aBXwCTH41";
    $gc_bd      = "sql10287940";
    //cria a conexao mysqli_connect('localizacao BD', 'usuario de acesso', 'senha', 'banco de dados')
    $gc_conexao = mysqli_connect($gc_host, $gc_usuario, $gc_senha, $gc_bd);
    
    //ajusta o charset de comunicação entre a aplicação e o banco de dados
    mysqli_set_charset($gc_conexao, 'utf8');
    //verifica a conexão
    if ($gc_conexao->connect_errno) {
        die ("Falha ao realizar a conexão: " . $gc_conexao->connect_errno);
    }

?>