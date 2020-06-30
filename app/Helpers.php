<?php

function getPrice($price)
{
   $price = floatVal($price);
   return number_format($price,0,'',' ') .' FCFA';
}