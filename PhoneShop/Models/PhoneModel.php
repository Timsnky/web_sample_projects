<?php

require 'Entity/Phone.php';

class PhoneModel
{
    public $phones = array (
        array("img/phone1.jpg","Samsung","Al Amana", "50000"),
        array("img/phone2.jpg","Sony","Al Amana", "40000"),
        array("img/phone3.jpg","LG","Al Amana", "30000"),
        array("img/phone4.jpg","Huawei","Al Amana", "20000"),
        array("img/phone5.jpg","Nokia","Al Amana", "15000"),
        array("img/phone1.jpg","Samsung","Big Man", "51000"),
        array("img/phone2.jpg","Sony","Big Man", "46000"),
        array("img/phone3.jpg","LG","Big Mana", "33000"),
        array("img/phone4.jpg","Huawei","Big Man", "20000"),
        array("img/phone5.jpg","Nokia","Big Man", "12000"),
        array("img/phone1.jpg","Samsung","Genesis", "50000"),
        array("img/phone2.jpg","Sony","Genesis", "50000"),
        array("img/phone3.jpg","LG","Genesis", "50000"),
        array("img/phone4.jpg","Huawei","Genesis", "50000"),
        array("img/phone5.jpg","Nokia","Genesis", "50000"),
    );

    function getAllPhones() {
        $length = $this->getArrayLength();
        $filteredArray = array();
        for ($i = 0; $i < $length ; $i ++) {
            $phoneArray = array();
            array_push($phoneArray, $this->phones[$i][0]);
            array_push($phoneArray, $this->phones[$i][1]);
            array_push($phoneArray, $this->phones[$i][2]);
            array_push($phoneArray, $this->phones[$i][3]);
            array_push($filteredArray, $phoneArray);
        }
        return $filteredArray;
    }

    function getArrayLength(){
        return count($this->phones);
    }

    function filterPhones($filter) {
        $length = $this->getArrayLength();
        $filteredArray = array();

        for ($i = 0; $i < $length ; $i ++) {
            if($filter == $this->phones[$i][1]) {
                $phoneArray = array();
                array_push($phoneArray, $this->phones[$i][0]);
                array_push($phoneArray, $this->phones[$i][1]);
                array_push($phoneArray, $this->phones[$i][2]);
                array_push($phoneArray, $this->phones[$i][3]);
                array_push($filteredArray, $phoneArray);
            }
        }
        return $filteredArray;
    }
}

?>