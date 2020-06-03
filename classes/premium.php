<?php

class PremiumMember extends Member
{
    //Declare instance variables
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

}
