<?php

function area($length=0, $width=0)
{
    return $length*$width;
    

}
function perimeter($length=0,$width=0)
{
return 2*($length+$width);
}
echo area(10,20);
echo "<br>";
echo perimeter(10,20);

?>