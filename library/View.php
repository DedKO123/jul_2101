<?php


class View
{
    public $layout='main';
    public $page='index';

    public function render(){
        include_once 'library'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$this->layout.'.php';
    }
}