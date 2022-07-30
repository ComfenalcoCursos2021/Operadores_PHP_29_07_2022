<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    print_r(json_encode((object) [
        "Mensaje" => (string) "Realizar los operadores de la calculadora",
        "Servidor" => $_SERVER["HTTP_HOST"]
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG))


?>