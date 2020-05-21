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
require_once('model/validate.php');
require_once('model/data-layer.php');

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
    //var_dump($_POST);
    //array(5) { ["firstName"]=> string(7) "Michael" ["lastName"]=> string(7) "Gulchuk"
    // ["age"]=> string(2) "23" ["gender"]=> string(4) "male" ["phone"]=> string(9) "345678976" }

    if (!validName($_POST['firstName'])) {

        //Set an error variable in the F3 hive
        $f3->set('errors["first"]', "Invalid first name");
    }

    if (!validName($_POST['lastName'])) {

        //Set an error variable in the F3 hive
        $f3->set('errors["last"]', "Invalid last name");
    }

    if(!validAge($_POST['age'])){
        //Set an error variable in the F3 hive
        $f3->set('errors["age"]', "Invalid age");
    }

    if(!validPhone($_POST['phone'])){
        //Set an error variable in the F3 hive
        $f3->set('errors["num"]', "Invalid phone number");
    }

    if (empty($f3->get('errors'))){
        //Store the data in the session array
        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['gender'] = $_POST['gender'];

        $f3->reroute('profile');
    }
}
    $f3->set('first', $_POST['firstName']);
    $f3->set('last', $_POST['lastName']);
    $f3->set('age', $_POST['age']);
    $f3->set('num', $_POST['phone']);

    $view = new Template();
    echo $view -> render("views/personalInformation.html");
});

$f3->route('GET|POST /profile', function($f3)
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_POST);
        //array(4) { ["email"]=> string(28) "mgulchuk@mail.greenriver.edu"
        // ["state"]=> string(10) "Washington" ["seeking"]=> string(4) "male" ["bio"]=> string(7) "hi guys" }

        if (!validEmail($_POST['email'])) {

            //Set an error variable in the F3 hive
            $f3->set('errors["email"]', "Invalid email");
        }

        if (empty($f3->get('errors'))){
            // store the data in the session array
            $_SESSION['state'] = $_POST['state'];
            $_SESSION['seeking'] = $_POST['seeking'];
            $_SESSION['bio'] = $_POST['bio'];
            $_SESSION['email'] = $_POST['email'];

            $f3->reroute('interests');
        }


        $f3->set('email', $_POST['email']);

    }

    $view = new Template();
    echo $view -> render("views/profile.html");
});

$f3->route('GET|POST /interests', function($f3)
{
    $indoor = getIndoor();
    $outdoor = getOutdoor();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //var_dump($_POST);
        //array(1) { ["interest"]=> array(7) { [0]=> string(2) "tv" [1]=> string(7) "puzzles"
        // [2]=> string(6) "movies" [3]=> string(7) "reading" [4]=> string(6) "biking"
        // [5]=> string(8) "climbing" [6]=> string(8) "swimming" } }

        if (!validOutdoor($_POST['interests'])) {

            //Set an error variable in the F3 hive
            $f3->set('errors["interests"]', "choose at least one outdoor");
        }
        if (!validIndoor($_POST['interest'])) {

            //Set an error variable in the F3 hive
            $f3->set('errors["interest"]', "choose at least one indoor");
        }

        if (empty($f3->get('errors'))) {
            // store the data in the session array
            $_SESSION['interests'] = $_POST['interests'];
            $_SESSION['interest'] = $_POST['interest'];

            $f3->reroute('summary');
            session_destroy();
        }
    }

    $f3->set('indoor', $indoor);
    $f3->set('in', $_POST['interest']);
    $f3->set('outdoor', $outdoor);
    $f3->set('out', $_POST['interests']);

    $view = new Template();
    echo $view -> render("views/interests.html");
});

$f3->route('GET /summary', function()
{
    $view = new Template();
    echo $view -> render("views/summary.html");
});

// Run fat free
$f3->run();