<?php
include 'connect.php';

$answers = [2, 2, 4, 2, 3, 3, 4, 4, 4, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='168257' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/PHYSICS/Test-7/Key-paper</title>
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
        <h1>PHYSICS - TEST:7/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'A pump can take out 7200 Kg of water per hour from a 100 m deep well. If the efficiency of the pump is 50%, then the power of the pump is (g= 10 m/s²):',
        ['2 KW', '4 KW', '7.2 KW', '3.6 KW'],
        '4 KW'
    ],
    [
        'When a force F = i + 2j + 3k acts on a body to move it from r₁ = i + j + k to r₂ = i - j + 2k, then the work done by the force is:',
        ['-3 J', '-1 J', '2 J', '3 J'],
        '-1 J'
    ],
    [
        'The K.E. of a body moving with a speed of 10 m/s is 30 J. If its speed becomes 30 m/s, then its K.E. will be:',
        ['10 J', '90 J', '180 J', '270 J'],
        '270 J'
    ],
    [
        'The maximum speed of a particle executing SHM is 1 m/s and maximum acceleration is 1.57 m/s². Its time period is:',
        ['Increase', 'Decrease', 'Remain same', 'Becomes erratic'],
        'Decrease'
    ],
    [
        'A light spring supports a 200 gm weight at its lower end, it oscillates with a period of 1 sec. How much weight must be removed from the lower end to reduce the period to 0.5 sec?',
        ['100 gm', '50 gm', '150 gm', '200 gm'],
        '150 gm'
    ],
    [
        'The velocity of sound in any medium depends upon:',
        ['Intensity and elasticity', 'Amplitude and density', 'Elasticity and density', 'Amplitude and elasticity'],
        'Elasticity and density'
    ],
    [
        'The beat frequency produced by the vibrations of x₁ = A sin(320πt) and x₂ = A sin(326πt) is:',
        ['6', '4', '2', '3'],
        '3'
    ],
    [
        'Boyle\'s law is stated by PV = C, C depends on:',
        ['Nature of gas', 'Atomic weight of gas', 'Temperature of gas', 'Quantity and temperature of gas'],
        'Quantity and temperature of gas'
    ],
    [
        'The equation of state for 5g of oxygen (O₂) at pressure P and temperature T, when occupying a volume V, will be (R is universal constant):',
        ['PV = 5RT', 'PV = 5/2 RT', 'PV = 5/16 RT', 'PV = 5/32 RT'],
        'PV = 5/32 RT'
    ],
    [
        'The volume of a gas at constant pressure of 10³ N/m² expands by 0.25 m³. The work done in this process is:',
        ['25 J', '50 J', '250 J', '5 J'],
        '250 J'
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
    window.location = "phy7.php";
}
</script>
