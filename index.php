<?php
/*
 * Michael Gulchuk
 * 4/27/2020
 * This file routes the page to home.html
 */
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer.php');

session_start();

// Instantiate the F3 Base class
$f3 = Base::instance();
$validator = new Validate();
$controller = new Controller($f3, $validator);

// Define a default route
$f3->route('GET /', function()
{
    $GLOBALS['controller']->home();
});

$f3->route('GET|POST /personal', function($f3)
{
    $GLOBALS['controller']->personal();
});

$f3->route('GET|POST /profile', function($f3)
{
    $GLOBALS['controller']->profile();
});

$f3->route('GET|POST /interests', function($f3)
{
    $GLOBALS['controller']->interests();
});

$f3->route('GET /summary', function()
{
    $GLOBALS['controller']->summary();
});

// Run fat free
$f3->run();