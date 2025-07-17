<?php

$student =[
    ["name" =>"John Vincent Pangilinan","course" => "Bsit", "gwa" => 1.00],
    ["name" =>"Marjorie Sahagun","course" => "Bsit", "gwa" => 2.00],
    ["name" =>"Cristle Ortega","course" => "Bsit", "gwa" => 3.25]
];


foreach($student as $index => $profile){
    $name = $profile["name"];
    $course = $profile ["course"];
    $gwa =$profile["gwa"];

    echo "Student: " .($index +1) . "<br>";
    echo "Name: " .$name ."<br>";
    echo "Course: " .$course."<br>";
    echo "GWA: " .$gwa ."<br>";
    //Print first then execute the conditional logic
     if($gwa <= 1.50){
        echo "Congrats you are Dean's Lister";

    } elseif($gwa <=3 ){
        echo "Congrats you Passed!";

    } elseif($gwa >= 3.25){
        echo "Sorry You Failed Try again next semester.";
    }
echo ("<hr>");
}

?>