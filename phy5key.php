<?php
include 'connect.php';

$answers = [4, 1, 3, 3, 4, 1, 4, 1, 4, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='168255' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/PHYSICS/Test-5/Key-paper</title>
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
        <h1>PHYSICS - TEST:5/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'A simple pendulum has a time period T in vacuum. Its time period when it is completely immersed in a liquid of density one-eighth of the density of material of the bob is:',
        ['√7/8 T', '√5/8 T', '√3/8 T', '√8/7 T'],
        '√7/8 T'
    ],
    [
        'A particle executes simple harmonic motion represented by displacement function as x(t) = A sin(ωt + Φ). If the position and velocity of the particle at t = 0 s are 2 cm and 2ω cm/s respectively, then its amplitude is x √2 cm where the value of x is:',
        ['2', '2√2', '4', '1'],
        '2'
    ],
    [
        'An observer standing between two parallel cliffs emits an intense sound note. If two successive echoes are heard after 5 s and 7 s, then distance between the cliffs is (velocity of sound is 340 m/s):',
        ['850 m', '1190 m', '2040 m', '340 m'],
        '1190 m'
    ],
    [
        'M grams of steam at 100°C is mixed with 200 g of ice at its melting point in a thermally insulated container. If it produced liquid water at 40°C [heat of vaporization of water is 540 cal/g and heat of fusion of ice is 80 cal/g], the value of M is:',
        ['20', '80', '40', '10'],
        '40'
    ],
    [
        'Which type of ideal gas will have the largest value for C_p - C_v:',
        ['Polyatomic', 'Diatomic', 'Monoatomic', 'The value will be same for all'],
        'Polyatomic'
    ],
    [
        'In thermodynamics, heat and work are:',
        ['Path functions', 'Intensive thermodynamic state variables', 'Extensive thermodynamic state variables', 'Point functions'],
        'Path functions'
    ],
    [
        'For an adiabatic expansion of an ideal gas, the fractional change in its pressure is equal to (where γ is the ratio of specific heats):',
        ['- γ v/dv', '- γ dv/v', '- 1/γ v/dv', '- 1/γ dv/v'],
        '- 1/γ dv/v'
    ],
    [
        'Which of the following processes must violate the first law of thermodynamics?',
        ['W>0, Q>0, and ΔE_int < 0', 'W>0, Q<0, and ΔE_int > 0', 'W<0, Q>0, and ΔE_int < 0', 'W>0, Q<0, and ΔE_int = 0'],
        'W>0, Q>0, and ΔE_int < 0'
    ],
    [
        'The critical angle for total internal reflection is maximum for:',
        ['Red light', 'Blue light', 'Ultraviolet rays', 'Infrared rays'],
        'Red light'
    ],
    [
        'Photon of frequency (f) has a momentum (p) associated with it. If c is the velocity of light, the momentum is:',
        ['hf/c', 'f/c', 'hfc', 'hf/c²'],
        'hf/c'
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
    window.location = "phy5.php";
}
</script>
