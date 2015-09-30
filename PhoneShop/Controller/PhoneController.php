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
        $length = count($phones);

        for($i = 0; $i < $length; $i ++) {
            $phone = array();
            $phone = $phones[$i];
            $rows = $rows . "
                    <tr>
                        <td><img src=$phone[0]></td>
                        <td>$phone[1]</td>
                        <td>$phone[2]</td>
                        <td>$phone[3]</td>
                     </tr>
                ";
        }

        return $rows;
    }
}

?>