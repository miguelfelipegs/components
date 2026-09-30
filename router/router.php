<?php

function router(){
    echo "2. Router esrá analisando a URL.<br>";;
    $rota = "/produtos";
    $parametro = "is=123";
    middleware($rota);
}