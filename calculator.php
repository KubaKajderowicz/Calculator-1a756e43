<?php

echo "Welke operatie wil je uitvoeren? (+, -) \n";

$MathSymbol = readline();

$plus = "+";

$minus = "-";

if ($MathSymbol == $plus) {


    echo "Eerste getal: \n";

    $firstval = readline();

    echo "Tweede getal: \n";

    $secondval = readline();

    echo "Uw resultaat is: ";
    echo $firstval + $secondval;

    die();
} else if ($MathSymbol == $minus) {
    echo "Eerste getal: \n";

    $firstval = readline();

    echo "Tweede getal: \n";

    $secondval = readline();

    echo "Uw resultaat is: ";
    echo $firstval - $secondval;

    die();
}

echo "je hebt geen + of - gekozen";

