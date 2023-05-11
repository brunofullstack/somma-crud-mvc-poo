<?php

namespace app\lib;

use app\controller\ClienteController;
use app\controller\IndexController;

// Obtém o caminho da URL
$path = $_SERVER['REQUEST_URI'];
$index = new IndexController();
$cliente = new ClienteController();
// Split da request em seguimentos
$segments = explode('/', trim($path, '/'));
$actionName = isset($segments[0]) ? $segments[0] : '/';

// Mapeia o caminho para a classe controladora correspondente
switch ($actionName) {
    case '/':
        $index->listar();
        break;
    case 'inserir':
        $index->inserir();
        break;
    case 'alterar':
        // Verifique se existe um parâmetro de URL para o ID
        if (isset($segments[1])) {
            $index->alterar($segments[1]);
        } else {
            // Lidar com URL inválido
            http_response_code(400);
            echo 'Invalid URL';
        }
        break;
    case '/deletar':
        $index->deletar();
        break;
    case '/cliente':
        $cliente->listar();
        break;
    default:
        // Handle 404 Not Found
        http_response_code(404);
        echo '404 Not Found';
        break;
}