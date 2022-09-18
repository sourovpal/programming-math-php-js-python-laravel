<?php

$price = 1000;

$sell_price = 750;

$discount = ((($price - $sell_price)*100)/$price);
// 25% discount
echo $discount;
