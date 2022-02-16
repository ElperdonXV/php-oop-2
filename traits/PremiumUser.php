<?php 
    trait PremiumUser{
        protected $grade;
        protected $sale;
        public function __construct($grade, $sale)
        {
            try{
                $this->$grade = $grade;
                $this->$sale = $sale;
            }
            catch (TypeError $error){
                throw new Exception ($error->getMessage());
            }
        }

        
                /**
                 * Get the value of sale
                 */ 
                public function getSale()
                {
                                return $this->sale;
                }

                /**
                 * Set the value of sale
                 *
                 * @return  self
                 */ 
                public function setSale($sale)
                {
                                $this->sale = $sale;

                                return $this;
                }

        /**
         * Get the value of grade
         */ 
        public function getGrade()
        {
                return $this->grade;
        }

        /**
         * Set the value of grade
         *
         * @return  self
         */ 
        public function setGrade($grade)
        {
            if ($grade == "bronze") {
                        $this->grade = $grade;
                        $this->sale = 40;
                } else if ($grade == "silver") {
                        $this->grade = $grade;
                        $this->sale = 50;
                } else if ($grade == "gold") {
                        $this->grade = $grade;
                        $this->sale = 70;
                }
                return $this;
        }
    }
?>