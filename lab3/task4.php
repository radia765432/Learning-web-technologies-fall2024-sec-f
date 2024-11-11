<?php
function num($a=0,$b=0,$c=0)
{
    if($a>$b && $a>$c)
    {
        echo $a;
    }
    else if($b>$a && $b>$c)
    {
        echo $b;

    }
    else{
        echo $c;
    }

}
echo num(5,10,2);

?>