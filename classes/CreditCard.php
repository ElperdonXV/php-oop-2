<?php
require_once __DIR__ .'/User.php';
 class CreditCard{
     protected $name;
     protected $surname;
     protected $cardnumber;
     protected $expiration;
     protected $cvv;
    
    
     public function __construct($name, $surname, $cardnumber, $expiration, $cvv){
         try {
            $this->name = $name;
            $this->surname = $surname;
            $this->cardnumber = $cardnumber;
            $this->expiration = $expiration;
            $this->cvv = $cvv;
         } catch (TypeError $error) {
            throw new Exception ($error->getMessage());
         }
    }

    

     /**
      * Get the value of name
      */ 
     public function getName()
     {
          return $this->name;
     }

     /**
      * Set the value of name
      *
      * @return  self
      */ 
     public function setName($name)
     {
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
      * Get the value of cardnumber
      */ 
     public function getCardnumber()
     {
          return $this->cardnumber;
     }

     /**
      * Set the value of cardnumber
      *
      * @return  self
      */ 
     public function setCardnumber($cardnumber)
     {
          $this->cardnumber = $cardnumber;

          return $this;
     }

     /**
      * Get the value of expiration
      */ 
     public function getExpiration()
     {
          return $this->expiration;
     }

     /**
      * Set the value of expiration
      *
      * @return  self
      */ 
     public function setExpiration($expiration)
     {
          $this->expiration = $expiration;

          return $this;
     }

     /**
      * Get the value of cvv
      */ 
     public function getCvv()
     {
          return $this->cvv;
     }

     /**
      * Set the value of cvv
      *
      * @return  self
      */ 
     public function setCvv($cvv)
     {
          $this->cvv = $cvv;

          return $this;
     }
 }
?>