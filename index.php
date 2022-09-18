<?php

$price = 1000;

$sell_price = 750;

$discount = ((($price - $sell_price)*100)/$price);
// 25% discount
echo $discount;


//==============================

$price = 100;
$discount = 20; // %
$persent = ($price * $discount)/100;

echo $persent; // 20%
