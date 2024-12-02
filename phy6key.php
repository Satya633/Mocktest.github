<?php
include 'connect.php';

$answers = [2, 1, 3, 4, 1, 2, 1, 3, 4, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='168256' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/PHYSICS/Test-6/Key-paper</title>
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
        <h1>PHYSICS - TEST:6/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'N Kg⁻¹ is the unit of:',
        ['Velocity', 'Acceleration', 'Force', 'Momentum'],
        'Acceleration'
    ],
    [
        'A system has basic dimensions as density "D", velocity "V", and area "A". The dimensional representation of force in this system is:',
        ['A V² D', 'A V D²', 'A² V D', 'A⁰ V² D'],
        'A V² D'
    ],
    [
        'If the magnitude of vectors A, B, and C are 5, 4, and 3 units respectively and A = B + C, then the angle between vectors A and C is:',
        ['Cos⁻¹(4/5)', 'II', 'Cos⁻¹(3/5)', 'Sin⁻¹(3/4)'],
        'Cos⁻¹(3/5)'
    ],
    [
        'If the sum of two unit vectors is also a unit vector, then the magnitude of their difference is:',
        ['1', '1/2', '1/√2', '√3'],
        '√3'
    ],
    [
        'A particle starting from rest moves in a straight line with uniform acceleration a. The average velocity of the particle in the first "s" distance is:',
        ['√as/2', '√3as/2', '√2as', 'as'],
        '√as/2'
    ],
    [
        'A projectile is thrown with speed u making an angle θ with the horizontal at t = 0. It just crosses two points of equal height at times t = 1s and t = 3s respectively. The maximum height attained by the projectile is (take g = 10 m/s²):',
        ['10 m', '20 m', '15 m', '22 m'],
        '20 m'
    ],
    [
        'A body is falling from height "H" takes time "T" seconds to reach the ground. The time taken to cover the first half of the height is:',
        ['T/√2', '√2T', '√3T', 'T/√3'],
        'T/√2'
    ],
    [
        'A body sliding on ice with a velocity of 8 m/s comes to rest after traveling 40 m. The coefficient of friction between the body and ice is (g = 10 m/s²):',
        ['0.02', '0.05', '0.08', '0.2'],
        '0.08'
    ],
    [
        'If a body placed on a rough inclined plane of gradient 1 in 4 just begins to slide, then the coefficient of friction between the plane and body is:',
        ['2/√15', '1/√2', '1/√5', '1/√15'],
        '1/√15'
    ],
    [
        'A cube of 10 N weight rests on a rough inclined plane of slope 3 in 5. If the coefficient of friction between the plane and cube is 0.6, then the minimum force required to start the cube moving up the plane is:',
        ['2 N', '6 N', '10.8 N', '4.5 N'],
        '10.8 N'
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
    window.location = "phy6.php";
}
</script>
