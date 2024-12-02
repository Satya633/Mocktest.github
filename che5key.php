<?php
include 'connect.php';

$answers = [3, 3, 2, 2, 4, 2, 2, 3, 1, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3855' ORDER BY id DESC LIMIT 1";

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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-5/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:5/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'Pauli\'s Exclusion principle states that two electrons in the same orbital have:',
        ['same spins', 'different spins', 'opposite spins', 'vertical spins'],
        'opposite spins'
    ],
    [
        'Orbits in which electrons move according to Bohr are:',
        ['elliptical', 'cylindrical', 'circular', 'oval'],
        'circular'
    ],
    [
        'Phosphorus has an atomic number of 15. A stable phosphorus atom has an electronic configuration of:',
        ['1s²2s²2p⁶3p⁵', '1s²2s²2p⁶3s²3p³', '1s²2s²2p⁶3s²3p¹4s²', '1s²1p⁶1d⁷'],
        '1s²2s²2p⁶3s²3p³'
    ],
    [
        'NaCl is classified as having what kind of bonds in the solid phase?',
        ['H₂Covalent', 'Ionic', 'Polar', 'vander Waals'],
        'Ionic'
    ],
    [
        'The bond formed due to sharing of electrons is:',
        ['Ionic bond', 'Metallic bond', 'Polar bond', 'Covalent bond'],
        'Covalent bond'
    ],
    [
        'The normality of the solution obtained by dissolving 5.3 grams of Na₂CO₃ in 1 litre solution is:',
        ['1N', '0.1N', '0.05N', '0.5N'],
        '0.1N'
    ],
    [
        'The following solution has the same molarity and normality:',
        ['Na₂CO₃', 'NaCl', 'H₂SO₄', 'K₂Cr₂O₇'],
        'NaCl'
    ],
    [
        '5 moles of a solute is dissolved in 10 litres of solution. What is its molarity?',
        ['5 M', '2 M', '0.5 M', '0.2 M'],
        '0.5 M'
    ],
    [
        'The process in which acids (H⁺) and bases (OH⁻) react to form salts and water is called:',
        ['Neutralization', 'Halogenation', 'Hydrogenation', 'Hydrolysis'],
        'Neutralization'
    ],
    [
        'A substance that donates a pair of electrons to form a coordinate covalent bond is called:',
        ['Lewis acid', 'Lewis base', 'Bronsted-Lowry acid', 'Bronsted-Lowry base'],
        'Lewis base'
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
    window.location = "che5.php";
}
</script>
