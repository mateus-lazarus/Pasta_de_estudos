<?php 

// for ($i = 0; $i <= $termo_limite; ++$i)

echo "hellou mundo";

$termo_limite = 3;

// echo $termo_limite;

$sum_of_all = 0 + 1;












for($i = 1; $i < $termo_limite + 1; ++$i) {

    $reset_term = 0;

    for($x = 1; $x < $i + 1; ++$x) {
        if ($i % $x == 0) {
            $reset_term = ++$reset_term;
        }
    }

    if ($reset_term == 2) {
        //echo  PHP_EOL . "Yay, é um número primo : $i" . PHP_EOL;
        $sum_of_all = $sum_of_all + $i;
    }

}

echo PHP_EOL . $sum_of_all







?>