<?php

/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 9-10-2017
 * Time: 20:08
 */
//include 'Product.php';
class Catalogus
{
    private $producten=[];
    private $test="test";

    public function voegProductToe($product){
        $this->producten[]=$product;
    }


public function toonAlleProducten(){

    return $this->producten;

}
}