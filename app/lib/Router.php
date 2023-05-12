<?php

namespace app\lib;

use app\controller\IndexController;

class Router
{
    private $index;

    public function __construct()
    {
        $this->index = new IndexController();
    }

    public function start()
    {
        // Obtém o caminho da URL
        $path = $_SERVER['REQUEST_URI'];

        // Split da request em seguimentos
        $segments = explode('/', trim($path, '/'));
        $actionName = isset($segments[0]) ? $segments[0] : '/';

        // Mapeia o caminho para a classe controladora correspondente
        switch ($actionName) {
            case '':
                $this->index->listar();
                break;
            case 'alterar':
                // Verifique se existe um parâmetro de URL para o ID
                if (isset($segments[1])) {
                    $this->index->alterar($segments[1]);
                } else {
                    // Lidar com URL inválido
                    http_response_code(400);
                    echo 'Invalid URL';
                }
                break;
            case 'inserir':
                $this->index->inserir();
                break;
            case 'deletar':
                $this->index->deletar();
                break;
            case 'cadastrar':
                $this->index->inserir();
                break;
            case 'cliente':
                $this->index->listarCliente();
                break;
            default:
                // Handle 404 Not Found
                http_response_code(404);
                echo '404 Not Found';
                break;
        }
    }
}