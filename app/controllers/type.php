<?php

class Type extends BaseController
{
    private $TypeModel;

    public function __construct()
    {
        $this->TypeModel = $this->model('TypeModel');
    }


    public function index()
    {
        $results = $this->TypeModel->getType();

        var_dump($results);
        $data = [
            'title' => 'Welkom op het Type voertuig pagina',
        ];

        $this->view('Type/index', $data);
    }
}