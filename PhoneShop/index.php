<?php

require 'Controller/PhoneController.php';

$phoneController = new PhoneController();

if (isset($_POST["phone"])) {
    $phone = $_POST["phone"];
    $content = $phoneController->getPhones($phone);
}else {
    $content = $phoneController->getPhones("All");
}

include 'Template.php';
?>




