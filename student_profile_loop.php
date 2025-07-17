<?php
$student = [
    ["name" => "John Vincent Pangilinan", "age" => 22, "course" => "BSIT", "city" => "Binan", "gwa" => "1.21", "graduating" => true],
    ["name" => "Marjorie Sahagun", "age" => 25, "course" => "BSIT", "city" => "Carmona", "gwa" => "1.41", "graduating" => true],
    ["name" => "Cristle Ortega", "age" => 24, "course" => "BSIT", "city" => "Binan", "gwa" => "1.71", "graduating" => true]
];

// foreach($student as $key => $value){
//     echo ucwords($key) . ": $value <br>";
// }

// foreach($student as $key => $value){
//     if ($key === "graduating"){
//         $value = $value ? "Yes" : "No";
//         echo ucwords($key) . ":" .$value ."<br>";
//     }
// }

foreach ($student as $index => $profile) {
    echo "<strong>Student " . ($index + 1) . "</strong><br>";

    foreach ($profile as $key => $value) {
        if ($key === "graduating") {
            $value = $value ? "Yes" : "No";
        }
        echo ucfirst($key) . ": " . $value . "<br>";
    }

    echo "<hr>";
}
?>
