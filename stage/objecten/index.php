<?php
/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 9-10-2017
 * Time: 15:25
 */
include 'Product.php';
include 'Catalogus.php';

 $test = new Product(3.50,'Broodje kip');
echo $test;
echo "<pre>";

$producten=[new Product(14.50,'ring'), new Product(6.50,'oplader'),
  new Product(35.50,'trui')
];

foreach ($producten as $product){
    echo  "$product <br />";
}


echo "<pre>";
foreach ($producten as $product)
{

    if($product->getPrijs() < 20){
        echo  "$product <br />";
    }
}

$pr1 =new Product(15.30,'fles');
$pr2 =new Product(25.50,'sleutel');
$pr3 =new Product(38.99,'glas');

$c1 = new Catalogus();

$c1->voegProductToe($pr3);
$c1->voegProductToe($pr2);
$c1->voegProductToe($pr1);
echo "<pre>";
foreach ( $c1->toonAlleProducten() as $producten)
{


    echo "$producten <br />";
}