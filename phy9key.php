<?php
include 'connect.php';

$answers = [2, 4, 4, 3, 1, 2, 3, 4, 3, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='168259' ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Default values
$questions = array_fill(0, 10, 0);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $questions = [
        $row["ques1"], $row["ques2"], $row["ques3"], $row["ques4"],
        $row["ques5"], $row["ques6"], $row["ques7"], $row["ques8"],
        $row["ques9"], $row["ques0"]
    ];
}
?>

<html>
<head>
    <title>ECET-MOCKTEST/PHYSICS/Test-9/Key-paper</title>
    <link rel="stylesheet" href="satya.css"/>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <style>
        .s { width: 400px; height: 40px; margin-bottom: 10px; }
        .correct { border: 5px solid green; border-radius: 10px; }
        .incorrect { border: 5px solid red; border-radius: 10px; }
        .true-answer { border: 5px solid green; border-radius: 10px; }
    </style>
</head>
<body>
    <center class="textcolor">
        <h1>PHYSICS - TEST:9/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'A stone is thrown vertically upwards. When the stone is at half of its maximum height, its speed is 10 m/s. Then the maximum height attained by the stone is (g = 10 m/s²):',
        ['25 m', '10 m', '15 m', '20 m'],
        '10 m'
    ],
    [
        'Identify the correct option:',
        ['Static friction depends on the area of contact', 'Kinetic friction depends on the area of contact', 'Coefficient of static friction does not depend on the area of the surface in contact', 'Coefficient of kinetic friction is less than the coefficient of static friction'],
        'Coefficient of kinetic friction is less than the coefficient of static friction'
    ],
    [
        'The coefficient of friction between the tyres and the road is 0.25. The maximum speed with which a car can be driven round a curve of radius 40 m without skidding is (assume g = 10 m/s²):',
        ['40 m/s', '20 m/s', '15 m/s', '10 m/s'],
        '10 m/s'
    ],
    [
        'During projectile motion, if the maximum height is equal to the horizontal range, then the angle of projection with the horizontal is:',
        ['tan⁻¹(1)', 'tan⁻¹(2)', 'tan⁻¹(4)', 'tan⁻¹(3)'],
        'tan⁻¹(4)'
    ],
    [
        'The potential energy of a certain spring when stretched through a distance S is 10 joules. The amount of work (in joules) that must be done on this spring to stretch it through an additional distance S will be:',
        ['30', '40', '10', '20'],
        '30'
    ],
    [
        'A machine gun fires six bullets per second into a target. The mass of each bullet is 3 g and the speed is 500 m/s. The power delivered to the bullets is:',
        ['1.5 kW', '2.25 kW', '0.75 kW', '375 kW'],
        '2.25 kW'
    ],
    [
        'Which of the following is the cheapest renewable energy?',
        ['Solar energy', 'Wind energy', 'Hydel energy', 'Nuclear energy'],
        'Hydel energy'
    ],
    [
        'The maximum velocity of a particle executing simple harmonic motion with an amplitude of 7 mm is 4.4 m/s. The time period of oscillation is:',
        ['100 s', '10 s', '0.1 s', '0.01 s'],
        '0.01 s'
    ],
    [
        'Two waves of lengths 50 cm and 51 cm produced 12 beats per second. The velocity of sound is:',
        ['340 m/s', '331 m/s', '306 m/s', '360 m/s'],
        '306 m/s'
    ],
    [
        'The apparent frequency of the whistle of an engine changes in the ratio 9:8 as the engine passes a stationary observer. If the velocity of sound is 340 m/s, then the velocity of the engine is:',
        ['40 m/s', '20 m/s', '340 m/s', '180 m/s'],
        '20 m/s'
    ]
];



        foreach ($questionsData as $index => $data) {
            echo "<li>{$data[0]}<br><ol type='A'>";
            foreach ($data[1] as $i => $answer) {
                $class = '';
                $selectedAnswer = $questions[$index];  
                $correctAnswer = array_search($data[2], $data[1]) + 1; // Find the index of the correct answer

                if ($selectedAnswer == ($i + 1)) {
                    if ($selectedAnswer == $correctAnswer) {
                        $class = 'correct'; 
                    } else {
                        $class = 'incorrect'; 
                    }
                } else {
                    if ($i + 1 == $correctAnswer) {
                        $class = 'true-answer'; 
                    }
                }

                echo "<div class='s $class'><input type='radio' disabled checked> $answer</div>";
            }
            echo "</ol></li><br>";
        }
        ?>
    </ol>

    <center><button class="satya" onclick="back()"><< BACK</button></center>
</body>
</html>

<script>
function back() {
    window.location = "phy9.php";
}
</script>
