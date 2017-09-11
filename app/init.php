<?php

//require_once 'core/App.php';
//require_once 'models/Cat.php';



spl_autoload_register(function ($class_name) {
    include $class_name . '.php';


});

