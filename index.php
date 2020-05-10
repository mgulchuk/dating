<?php
/*
 * Michael Gulchuk
 * 4/27/2020
 * This file routes the page to home.html
 */
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// Require the autoload file
require_once('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function()
{
    //echo '<h1>Welcome to my dating website</h1>';
    $view = new Template();
    echo $view -> render("views/home.html");
});

$f3->route('GET|POST /personal', function($f3)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // redirect to summary page
        $f3->reroute('profile');
        session_destroy();
    }
    $view = new Template();
    echo $view -> render("views/personalInformation.html");
});

$f3->route('GET|POST /profile', function($f3)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // redirect to summary page
        $f3->reroute('profile');
        session_destroy();
    }
    $view = new Template();
    echo $view -> render("views/profile.html");
});

$f3->route('GET|POST /interests', function()
{
    $view = new Template();
    echo $view -> render("views/interests.html");
});

// Run fat free
$f3->run();