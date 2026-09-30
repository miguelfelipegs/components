<?php

function produtoController(){
    echo "6. Controller recebeu a requisição.<br>";
    $produtos = produtoService();
    echo "8. Controller recebeu os dados do Service.<br>";
    echo "Produtos encontrados:<br>";
    foreach ($produtos as $produto) {
            echo "- " . $produto . "<br>";    
    }
}