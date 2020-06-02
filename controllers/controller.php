<?php

/**
 * Class Controller
 */
class Controller
{
    private $_f3; //router
    private $_validator; //validation object

    /**
     * Controller constructor.
     * @param $f3
     * @param $validator
     */
    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    /**
     * Display the default route
     */
    public function home()
    {
        //echo '<h1>Welcome to my dating website</h1>';
        $view = new Template();
        echo $view -> render("views/home.html");
    }

    /**
     * Process the personal route
     */
    public function personal()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);
            //array(5) { ["firstName"]=> string(7) "Michael" ["lastName"]=> string(7) "Gulchuk"
            // ["age"]=> string(2) "23" ["gender"]=> string(4) "male" ["phone"]=> string(9) "345678976" }

            if (!$this->_validator->validName($_POST['firstName'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["first"]', "Invalid first name");
            }

            if (!$this->_validator->validName($_POST['lastName'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["last"]', "Invalid last name");
            }

            if(!$this->_validator->validAge($_POST['age'])){
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["age"]', "Invalid age");
            }

            if(!$this->_validator->validPhone($_POST['phone'])){
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["num"]', "Invalid phone number");
            }

            if (empty($this->_f3->get('errors'))){
                //Store the data in the session array
                $_SESSION['firstName'] = $_POST['firstName'];
                $_SESSION['lastName'] = $_POST['lastName'];
                $_SESSION['age'] = $_POST['age'];
                $_SESSION['phone'] = $_POST['phone'];
                $_SESSION['gender'] = $_POST['gender'];

                $this->_f3->reroute('profile');
            }
        }
        $this->_f3->set('first', $_POST['firstName']);
        $this->_f3->set('last', $_POST['lastName']);
        $this->_f3->set('age', $_POST['age']);
        $this->_f3->set('num', $_POST['phone']);

        $view = new Template();
        echo $view -> render("views/personalInformation.html");
    }

    /**
     * Display the profile route
     */
    public function profile()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);
            //array(4) { ["email"]=> string(28) "mgulchuk@mail.greenriver.edu"
            // ["state"]=> string(10) "Washington" ["seeking"]=> string(4) "male" ["bio"]=> string(7) "hi guys" }

            if (!$this->_validator->validEmail($_POST['email'])) {

                //Set an error variable in the F3 hive
                $this->_f3->set('errors["email"]', "Invalid email");
            }

            if (empty($this->_f3->get('errors'))){
                // store the data in the session array
                $_SESSION['state'] = $_POST['state'];
                $_SESSION['seeking'] = $_POST['seeking'];
                $_SESSION['bio'] = $_POST['bio'];
                $_SESSION['email'] = $_POST['email'];

                $this->_f3->reroute('interests');
            }


            $this->_f3->set('email', $_POST['email']);

        }

        $view = new Template();
        echo $view -> render("views/profile.html");
    }

    /**
     * Display the interests route
     */
    public function interests()
    {
        $indoor = getIndoor();
        $outdoor = getOutdoor();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_SESSION['interest'] = ($_POST['interest']);
            $_SESSION['interests'] = ($_POST['interests']);

            $this->_f3->reroute('summary');
        }

        $this->_f3->set('indoor', $indoor);
        $this->_f3->set('in', $_POST['interest']);
        $this->_f3->set('outdoor', $outdoor);
        $this->_f3->set('out', $_POST['interests']);

        $view = new Template();
        echo $view -> render("views/interests.html");
    }

    /**
     *
     */
    public function summary()
    {
        $view = new Template();
        echo $view -> render("views/summary.html");

        session_destroy();
    }

}