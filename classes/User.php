<?php
require_once __DIR__ .'/CreditCard.php';
class User{
    protected $name;
    protected $surname;
    protected $username;
    protected $password;
    protected $creditcard;
    protected $age;

    public function __construct ($name, $surname, $username, $password, $creditcard){
    $this->name = $name;
    $this->surname = $surname;
    $this->username = $username;
    $this->password = $password;
    $this->setCreditCard($creditcard);
}
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

 /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }


 /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
    


    /**
     * Get the value of creditcard
     */ 
    public function getCreditcard()
    {
        return $this->creditcard;
    }

    /**
     * Set the value of creditcard
     *
     * @return  self
     */ 
    public function setCreditcard(CreditCard $creditcard)
    {
        $this->creditcard = $creditcard;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}

?>