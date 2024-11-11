<?php

function vat($amount=0)
{
    return $amount*(15/100);
}
 
echo vat(200);

?>