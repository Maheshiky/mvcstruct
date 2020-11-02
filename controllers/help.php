<?php

class Help extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index($arg=false)
    {
        $this->view->data = '<br>You can get data from the model using <b>$this->model->index()</b>';
        
        $this->view->render('help');
        
    }
}