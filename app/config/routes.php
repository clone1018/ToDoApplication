<?php

return array(

    'GET /' => 'HomeController@index',
    'GET /todo' => 'ToDoController@index',
    'GET /todo/[i:id]' => 'TodoController@show',
    
    'POST /todo' => 'ToDoController@create',

);