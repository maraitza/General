<?php
namespace App\Http;

 Class Request {
     protected $segment = [];
     protected $controller;
     protected $method;

     public function __construct()
     {
        $this->$segment = explode('/',$_SERVER['REQUEST_URI']);
        var_dump($_SERVER['REQUEST_URI']);

     }




}
