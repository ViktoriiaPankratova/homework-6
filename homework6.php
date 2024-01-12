<?php
$a=2;
$b=4;

$closure=fn($c)=>$a*$b;
function myFunction(int $a, int $b, ?closure $c)
{
    $multiplication=$a*$b;
    if (is_callable($c)){
        $closure=fn($c)=>$multiplication;
        echo $closure;
    }
    return $multiplication;

}
$function='myFunction';
echo $function(2,4,null);

$anonymusFunction=function(int $closure){
    echo $closure.PHP_EOL;
};


