<?php
include 'connect.php';

$answers = [3, 3, 4, 3, 3, 4, 2, 1, 4, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3859' ORDER BY id DESC LIMIT 1";

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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-9/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:9/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       
$questionsData = [
    [
        'In the Daniell cell, which electrode acts as anode?',
        ['Cu', 'Hg', 'Zn', 'Pt'],
        'Zn'
    ],
    [
        'The molar conductance of HCl is more than that of NaCl because:',
        ['NaCl is more polar than KCl', 'NaCl is ionic while HCl is covalent', 'Ionic mobility of H⁺ is more than that of Na⁺', 'H⁺ get hydrated'],
        'Ionic mobility of H⁺ is more than that of Na⁺'
    ],
    [
        'The units for electrochemical equivalent are:',
        ['grams', 'grams ampere', 'Coloumb', 'Grams per coulomb'],
        'Grams per coulomb'
    ],
    [
        'Zeolite softening process removes:',
        ['Only permanent hardness of water', 'Only temporary hardness of water', 'Both temporary and permanent hardness of water', 'The dissolved gases in permanent hard water'],
        'Both temporary and permanent hardness of water'
    ],
    [
        'The permanent hardness of water is caused by the presence of:',
        ['Bicarbonates of Ca and Mg', 'Carbonates of Na and K', 'Chlorides and Sulphates of Ca and Mg', 'Phosphates of Na and K'],
        'Chlorides and Sulphates of Ca and Mg'
    ],
    [
        'The secondary treatment of water uses_____to consume wastes in water.',
        ['Filtration', 'Sedimentation', 'Chemicals', 'Microorganisms'],
        'Microorganisms'
    ],
    [
        'Difficult to monitor and very dangerous form of corrosion:',
        ['Galvanic', 'Pitting', 'Crevice', 'Stress'],
        'Pitting'
    ],
    [
        'When Pt and Co are electrically connected, which one gets corroded?',
        ['Co', 'Pt', 'None', 'Both'],
        'Co'
    ],
    [
        'What rubber was invented when Dr. Joseph C. Patrick tried to make antifreeze?',
        ['Methyl rubber', 'Chloroprene', 'Bruna N', 'Thiokol'],
        'Thiokol'
    ],
    [
        'The first plastic ever synthesized was called_________.',
        ['Bakelite', 'Nylon', 'Dacron', 'Cellulose'],
        'Bakelite'
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
    window.location = "che9.php";
}
</script>
