<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-Free framework (f3)
$f3 = Base::instance();  //instance method

//Define a default route-invoking route method
$f3->route('GET /', function($f3) {
    //echo "Week 5";

    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('password01')); //sha1 is encryption
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 67);
    $f3->set('fruits', array('apple', 'orange', 'banana'));
    $f3->set('veggies', array('carrot', 'cucumber', 'asparagus'));
    //display a view page
    $view = new Template();// template is a class from fat-free
    echo $view->render('views/info.html');
});

//run Fat-Free
$f3->run();