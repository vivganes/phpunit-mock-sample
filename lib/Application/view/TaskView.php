<?php
namespace Application\view;

class TaskView
{
    public function render($model){
        return "<b>".$model->get()."</b>";
    }
}

