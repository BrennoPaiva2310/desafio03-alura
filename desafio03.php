<?php

$altura = 1.80;
$peso = 80;
$formula = $peso/$altura **2;


echo "Seu Imc é $formula".PHP_EOL;

if($formula < 18.5){
    echo "Esta abaixo do peso";
}
elseif($formula >= 18.5 && $formula <= 24.9){
    echo "Peso Ideal";
}
elseif($formula>= 25 && $formula<= 29.9){
    echo "Levemente acima do peso";
}
elseif($formula>= 30 && $formula<= 34.9){
    echo "Obesidade Grau 1";
}
elseif($formula>= 35 && $formula<= 39.9){
    echo "Obesidade grau 2";
}