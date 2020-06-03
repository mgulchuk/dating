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
    public function __construct($fName = "Bob",
                                $lName = "smith",
                                $age = 18,
                                $gender = "male",
                                $phone = 1234567890,
                                $email = "bobsmith@gmail.com",
                                $state = "washington",
                                $seeking = "female",
                                $bio = "hi guys",
                                $inDoor = "",
                                $outDoor = "")
    {
        parent::__construct($fName, $lName, $age, $gender, $phone,
            $email, $state, $seeking, $bio);
        $this->setIndoor($inDoor);
        $this->setOutdoor($outDoor);
    }

    /**
     * @return the first name
     */
    public function getFName()
    {
        return $this->_fName;
    }

    /** Set the first name
     *  @param the the first name
     */
    public function setFname($fName)
    {
        $this->_fName = $fName;
    }

    /**
     * @return the last name
     */
    public function getLName()
    {
        return $this->_lName;
    }

    /** Set the last name
     *  @param the the last name
     */
    public function setLname($lName)
    {
        $this->_lName = $lName;
    }

    /**
     * @return the age
     */
    public function getAge()
    {
        return $this->_age;
    }

    /** Set the age
     *  @param the the age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    /**
     * @return the phone number
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /** Set the phone number
     *  @param the the phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @return the gender
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /** Set the gender
     *  @param the gender name
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return the email
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /** Set the email
     *  @param the email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return the state
     */
    public function getState()
    {
        return $this->_state;
    }

    /** Set the state
     *  @param the state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return the seeking
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /** Set the seeking
     *  @param the seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /**
     * @return the bio
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /** Set the bio
     *  @param the the bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    /**
     * @return the indoor interests
     */
    public function getIndoor()
    {
        return $this->_inDoor;
    }

    /** Set the indoor interests
     *  @param the indoor interests
     */
    public function setIndoor($indoor)
    {
        $this->_inDoor = $indoor;
    }

    /**
     * @return the outdoor interests
     */
    public function getOutdoor()
    {
        return $this->_outDoor;
    }

    /** Set the outdoor interests
     *  @param the outdoor interests
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
