<?php


class HomeController extends Frame\Controller\View {

    public $composer = 'Frame\\Controller\\Composers\\Twig';
    
    public function index() {
        $todos = Todo::all();
        
        return $this->make('home', compact('todos'));
    }

}