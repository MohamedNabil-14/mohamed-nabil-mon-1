<?php

// answer of question 3 is

$num =5;

for ($i=1; $i <=$num ; $i++) { 

    for ($j=1; $j <=$i ; $j++) { 
        echo " * ";
    }
    echo "<br>";
}

for ($i=$num; $i >=1 ; $i--) { 

    for ($j=1; $j <=$i ; $j++) { 
        echo " * ";
    }
    echo "<br>";
}
?>