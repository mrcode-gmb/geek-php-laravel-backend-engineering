<?php 
    $colors = ["blue","red","green","yellow"];
    array_push($colors, "orange", "black", "white");
    echo count($colors);
    
    echo "<br/>";

    foreach($colors as $color){
        echo $color."<br/>";
    }

    echo "<br/>";
    array_pop($colors);
    sort($colors);
    print_r($colors);
    echo "<br/>";
    array_reverse($colors);
    print_r($colors);
    echo "<br/>";

    echo in_array("orange", $colors);
    if(in_array("black", $colors)){
        echo "yes is exist";
    }
    else{
        echo "no is not exist";
    }


    echo "<br/>";

    // echo $colors[0];
    print_r($colors);
    echo "<br/>";

    $student = [
        "name" => "Muhammad",
        "age" => 23,
        "email" => "abk@gmail.com",
        20 => "is 20",

    ];

    $multipleStudent = [
        [
            "name"=>"Aminu",
            "age" => 25,
            "school"=>"GSU",
        ],
        [
            "name"=>"Mrcode",
            "age"=> "22",
            "school"=> "BUK"
        ],
        [
            "name"=>"Abubakar",
            "age"=>"25",
            "school"=>"ABU",
        ]
    ];
    $studentColor = array_merge($student, $colors, $multipleStudent);
    echo"<br/>";
    echo $studentColor[1];
    echo"<br/>";
    print_r($studentColor);
    echo"<br/>";
    echo count($multipleStudent);
    echo"<br/>";
    echo $multipleStudent[2]['name'];
    echo $multipleStudent[0]['name'];
    echo"<br/>";
    print_r($multipleStudent[1]);
    echo "<br/>";
    
    foreach($multipleStudent as $singleStudent){
        echo "Hi,". $singleStudent['name']. ", Your age is " .$singleStudent['age']. "and you from ". $singleStudent['school'] ."<br/>";
    }
?>