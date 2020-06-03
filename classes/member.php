<?php

class Member
{
    //Declare instance variables
    private $_fName;
    private $_lName;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;

    /** Default constructor
     * @param $fName string first name
     * @param $lName string last name
     * @param $age int age
     * @param $gender string gender
     * @param $phone int phone number
     * @param $email string email address
     * @param $state string state
     * @param $seeking string seeking
     * @param $bio string bio
     */
    public function __construct($fName = "Bob",
                                $lName = "smith",
                                $age = 18,
                                $gender = "male",
                                $phone = 1234567890,
                                $email = "bobsmith@gmail.com",
                                $state = "washington",
                                $seeking = "female",
                                $bio = "hi guys")
    {
        $this->setFname($fName);
        $this->setLname($lName);
        $this->setAge($age);
        $this->setGender($gender);
        $this->setPhone($phone);
        $this->setEmail($email);
        $this->setState($state);
        $this->setSeeking($seeking);
        $this->setBio($bio);
    }


    /**
     * @return string first name
     */
    public function getFName()
    {
        return $this->_fName;
    }

    /** Set the first name
     *  @param string the first name
     */
    public function setFname($fName)
    {
        $this->_fName = $fName;
    }

    /**
     * @return string last name
     */
    public function getLName()
    {
        return $this->_lName;
    }

    /** Set the last name
     *  @param string the last name
     */
    public function setLname($lName)
    {
        $this->_lName = $lName;
    }

    /**
     * @return int age
     */
    public function getAge()
    {
        return $this->_age;
    }

    /** Set the age
     *  @param int the age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return int phone number
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /** Set the phone number
     *  @param int the phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return string gender
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /** Set the gender
     *  @param string gender name
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return string email
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /** Set the email
     *  @param string email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return string state
     */
    public function getState()
    {
        return $this->_state;
    }

    /** Set the state
     *  @param string state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return string seeking
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /** Set the seeking
     *  @param string seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * @return string bio
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /** Set the bio
     *  @param string the bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }


    /** toString() returns a String representation
     *  of an member object
     *  @return string
     */
    public function toString()
    {
        return $this->_fName . " " . $this->_lName . " " . $this->_age . " " . $this->_gender . " " . $this->_phone;
    }
}
