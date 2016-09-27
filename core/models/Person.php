<?php


namespace Davidmgilo\Phplearning;

class Person
{
    protected $name;

    protected $middlename;

    protected $lastname;

    /**
     * Person constructor.
     * @param $name
     * @param $middlename
     * @param $lastname
     */
    public function __construct($name, $middlename, $lastname)
    {
        $this->name = $name;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }

    /**
     * @param mixed $middlename
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }



}