<?php

class PremiumMember extends member
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
    private $_inDoor;
    private $_outDoor;

    /** Default constructor
     * @param $fName the first name
     * @param $lName the last name
     * @param $age the age
     * @param $gender the gender
     * @param $phone the phone number
     * @param $email the email address
     * @param $state the state
     * @param $seeking the seeking
     * @param $bio the bio
     * @param $inDoor the indoor
     * @param $outDoor the outdoor
     */
    public function __construct($fName, $lName, $age, $gender, $phone,
                                $email, $state, $seeking, $bio, $inDoor, $outDoor)
    {
        $this->_fName = $fName;
        $this->_lName = $lName;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_state = $state;
        $this->_seeking = $seeking;
        $this->_bio = $bio;
        $this->_inDoor = $inDoor;
        $this->_outDoor = $outDoor;
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

    /**
     * @return array indoor interests
     */
    public function getIndoor()
    {
        return $this->_inDoor;
    }

    /** Set the indoor interests
     *  @param array the indoor interests
     */
    public function setIndoor($indoor)
    {
        $this->_inDoor = $indoor;
    }

    /**
     * @return array outdoor interests
     */
    public function getOutdoor()
    {
        return $this->_outDoor;
    }

    /** Set the outdoor interests
     *  @param array the outdoor interests
     */
    public function setOutdoor($outdoor)
    {
        $this->_outDoor = $outdoor;
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
