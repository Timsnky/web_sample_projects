<?php


class Phone
{
    public $phoneImage;
    public $phoneName;
    public $phoneShop;
    public $phonePrice;

    function __construct($image, $name, $shop, $price) {
        $this->phoneImage = $image;
        $this->phoneName = $name;
        $this->phoneShop = $shop;
        $this->phonePrice = $price;
    }
}
?>