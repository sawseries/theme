<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('page26');
    }

    public function all(){
        $response = [
            'success' => true,
            'data' => "dt",
        ];
        return $this->response->setJson($response);

    }
}
