<?php
include 'connect.php';

$answers = [1, 1, 4, 1, 3, 1, 4, 1, 2, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='168254' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/PHYSICS/Test-4/Key-paper</title>
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
        <h1>PHYSICS - TEST:4/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'A smooth block is released from rest on a 45° inclined plane and it slides a distance \'d\'. The time taken to slide is \'n\' times that on a smooth inclined plane. The coefficient of friction is:',
        ['μk = 1 - (1/n²)', 'μk = √1 - (1/n²)', 'μk = 1 / 1 - (n²)', 'μk = √1 / 1 - (n²)'],
        'μk = 1 - (1/n²)'
    ],
    [
        'A body is projected at an angle other than 90° with the horizontal with some velocity. If the time of ascent of the body is 1 second, then the maximum height it can reach is (take g = 10 m/s²):',
        ['5 m', '10 m', '2.5 m', '75 m'],
        '5 m'
    ],
    [
        'A bullet fired from a gun falls at a distance half of its maximum range. The angle of projection of the bullet is:',
        ['45°', '60°', '30°', '15°'],
        '45°'
    ],
    [
        'A body is thrown vertically upwards with a velocity. Select the incorrect statements from the following:',
        ['Both velocity and acceleration are zero at its highest point.', 'Velocity is maximum and acceleration is zero at the highest point.', 'Velocity is maximum and acceleration "g" downwards at its highest point.'],
        'I and II'
    ],
    [
        'A person standing on a tower of height 60 m throws an object upwards with velocity of 40 m/s at an angle 30° to the horizontal. Find the total time taken by the object to gain maximum height and fall on the ground (take g = 10 m/s²):',
        ['3 s', '20 s', '6 s', '16 s'],
        '6 s'
    ],
    [
        'A bucket full of water is drawn up by a person. In this case the work done by the gravitational force is:',
        ['Negative because the force and displacement are in opposite directions', 'Positive because the force and displacement are in the same directions', 'Negative because the force and displacement are in the same directions', 'Positive because the force and displacement are in opposite directions'],
        'Negative because the force and displacement are in opposite directions'
    ],
    [
        'When a long spring is stretched by x cm, its potential energy is U. If the spring is stretched by Nx cm, the potential energy stored in it will be:',
        ['U/N', 'NU', 'N²U', 'U/N²'],
        'N²U'
    ],
    [
        'Which of the following is a non-renewable source of energy?',
        ['Coal', 'Solar', 'Geothermal', 'Tidal'],
        'Coal'
    ],
    [
        'If a classroom has dimensions 20 x 15 x 5 m³ and reverberation time 1.5 sec, the total absorption of all surfaces and the average absorption coefficient will be:',
        ['0.7 and 69', '69 and 0.07', '6.9 and 0.7', '0.69 and 0.7'],
        '6.9 and 0.7'
    ],
    [
        'A source of sound of frequency 450 cycles/sec is stationary but an observer is moving towards the source with 34 m/sec speed. If the speed of sound is 340 m/sec, the apparent frequency will be:',
        ['410 cycles/sec', '500 cycles/sec', '550 cycles/sec', '495 cycles/sec'],
        '500 cycles/sec'
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
    window.location = "phy4.php";
}
</script>
