<?php
$a=20;
$b=12;

if ($a>$b){
    echo "[a es mayor que b \n]";
}
else{
    echo "[b es mayor o igual que a \n]";
}

$a=20;
$b=32;

if ($a>$b):
    echo "[a es mayor que b \n]";
else:
    echo "[b es mayor o igual que a \n]";
endif;

$a=20;
$b=20;

if ($a>$b):
    echo "[a es mayor que b \n]";
elseif($a>$b):
    echo "[b es mayor que a \n]";
else:
    echo "[a es igual que b\n]";
endif;


?>