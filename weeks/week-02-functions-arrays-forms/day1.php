<?php

    $a = 3;
    $b = 4;

    $total = $a + $b;

    $multiplication = 4 * 4;
    $division = $b / $a;

    echo $total;
    echo "<br/>";
    echo $a - $b;
    echo "<br/>";
    echo $multiplication;
    echo "<br/>";
    echo $division;
    echo "<br/>";
    echo  99 % 2;
    echo "<br/>";
    
    if(1 == 1) echo "Yes is one";
    $condition = 3;

    if($condition == 5){
        echo "Yes it is true";
    }
    elseif($condition == 3){
        echo "Yes it is 3";
    }
    elseif($condition == 2){
        echo "Yes it is 2";
    }
    else{
        echo "No any condition is true";
    }

    // switch statemednt 
    echo "<br/>";
    $switch = 10;

    switch($switch){
        case 3:
            echo "yes it is 3";
            echo "<br/>";
            break;
        case 10:
            echo "yes it is 4";
            echo "<br/>";
            break;
        default:
            echo "No any condition is mached";
            echo "<br/>";
    }


    // loops 


    for($i = 0; $i < 10; $i++){
        echo $i;
        echo "<br/>";
    }

    // while loops

    $number = 0;
    while($number < 10){
        echo $number;
        echo "<br/>";
        $number++;
    }

?>