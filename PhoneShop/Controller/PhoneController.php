<?php

require 'Models/PhoneModel.php';

class PhoneController
{
    function getPhones($filter) {
        $model = new PhoneModel();
        if ($filter == "All") {
            return $this->addTable($model->getAllPhones());
        }
        else {
            return $this->addTable($model->filterPhones($filter));
        }
    }


    function addTable($phones) {
        $rows = "";

        foreach ($phones as $key => $phone) {
            $rows = $rows . "
                    <tr>
                        <td><img src=$phone->phoneImage></td>
                        <td>$phone->phoneName</td>
                        <td>$phone->phoneShop</td>
                        <td>$phone->phonePrice</td>
                     </tr>
                ";
        }
        return $rows;
    }
}

?>