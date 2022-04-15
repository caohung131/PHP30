<?php

    class SinhVien 
    {
        private  
            $Name, 
            $Gender,
            $birthDay,
            $homeTown;
        
        public
        //Get set
            //name
            function getName() 
            {
                return $this->Name;
            }

            function setName($name)
            {
                $this->Name = $name;
            }

            //gender
            function getGender() 
            {
                return $this->Gender;
            }

            function setGender($gender)
            {
                $this->Gender = $gender;
            }

            //birthday
            function getBirthDay() 
            {
                return $this->birthDay;
            }

            function setBirthDay($birthday)
            {
                $this->birthDay = $birthday;
            }

            //hometown
            function getHomeTown() 
            {
                return $this->homeTown;
            }

            function setHomeTown($hometown)
            {
                $this->homeTown = $hometown;
            }

        //contrustor
        public function __construct($name, $gadenr, $birtday, $hometown)
        {
            $this->Name = $name;
            $this->Gender = $gadenr;
            $this->birthDay = $birtday;
            $this->homeTown = $hometown;
        }
    }

    //created object to test
    $sinhVien = new SinhVien('Hưng','Nam', '12/2', 'Sủi');

    echo 'Tên đối tượng: ' . " ". $sinhVien->getName() . '<br/>';
    echo 'Giới tính đối tượng: ' . " ". $sinhVien->getGender() . '<br/>';
    echo 'Ngày sinh đối tượng: ' . " ". $sinhVien->getBirthDay() . '<br/>';
    echo 'Địa chỉ đối tượng: ' . " ". $sinhVien->getHomeTown() . '<br/>';

?>