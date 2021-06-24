<?php

namespace Controllers;

abstract class Controller
{

    protected $model;

    protected $modelName;

    public function __construct()
    {
        //on definit nouveau model en fonction du model en cours 
        $this->model = new $this->modelName();
    }
}
