<?php
namespace Application\controller;

use Application\model\TaskModel;
use Application\view\TaskView;

class TaskController
{

    private $model;
    private $view;
    public function __construct($model, $view)
    {
        if($model == null){
            $this->model = new TaskModel();
        } else{
            $this->model = $model;
        }
        
        if($view == null){
            $this->view = new TaskView();
        } else{
            $this->view = $view;
        }
       
    }
    
    public function getHomePage(){
        return $this->view->render($this->model);
    }
}

