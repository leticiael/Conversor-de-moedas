<?php

namespace Cyber\Controller;
use Cyber\Controller\BaseController;
use Cyber\HttpRequest\HttpRequest;
use Slim\Views\Twig;
use Cyber\Header\Header;


 class  HomeController extends BaseController{
public function  __construct($request, $response, Twig $view) {
    parent::__construct($request, $response, $view);
}

public function home(){
    try {
            return $this->view->render($this->response, 'index.twig', [
                'data' => []
            ]);
    } catch (\Throwable $e) {
        return Header::validateRequest($this->response, '500', $e->getMessage());
    }
}

public function convert(){
    try {
        $formData = $this->request->getParsedBody();

        if (isset($formData['moeda'])) {
            // Acessa o valor da moeda
            $moeda = $formData['moeda'];
            var_dump($formData['moeda']);
            // Restante do seu código...
        } else {
            // Campo 'moeda' não encontrado, lida com isso adequadamente
        }
      

     
        $data = HttpRequest::convertCoins($this->response, $formData);
        return $this->view->render($this->response, 'index.twig', [
            'data' => $data
        ]);
    } catch (\Throwable $e) {
      
        return Header::validateRequest($this->response, '500', $e->getMessage());
    }
    }
}
