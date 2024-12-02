<?php
include 'connect.php';

$answers = [2, 4, 3, 2, 4, 1, 2, 2, 1, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3858' ORDER BY id DESC LIMIT 1";

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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-8/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:8/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'How many electrons in an atom may have the quantum numbers, n=4, m=-1/2?',
        ['1', '2', '16', '32'],
        '16'
    ],
    [
        'Balmer series of Hydrogen atom corresponds to which spectral region?',
        ['X-ray region', 'Ultraviolet region', 'Infrated region', 'visible region'],
        'visible region'
    ],
    [
        'The electronic configuration of the Cu atom violates which principle?',
        ['Hund\'s rule', 'Pauli Exclusion Principle', 'Aufbau Principle', 'Heisenberg\'s Uncertainty Principle'],
        'Aufbau Principle'
    ],
    [
        'As compared to covalent compounds, ionic compounds generally have:',
        ['low melting points and low boiling points', 'high melting points and high boiling points', 'low melting points and high boiling points', 'high melting points and low boiling points'],
        'high melting points and high boiling points'
    ],
    [
        'The octet rule is not valid for the molecule:',
        ['CO₂', 'H₂O', 'O₂', 'CO'],
        'CO'
    ],
    [
        'Two solutions of a substance (non-electrolyte) are mixed in the following manner, 480 ml of 1.5 M first solution and 600 ml of second solution. What is the molarity of the final mixture?',
        ['1.20 M', '1.50 M', '2.70 M', '1.344 M'],
        '1.344 M'
    ],
    [
        'The equivalent mass of H₃PO₄ in the following equation (let M be the mass of H₃PO₄):<br> H₃PO₄ + Ca(OH)₂ → CaHPO₄ + 2H₂O',
        ['M', 'M/2', 'M/3', '2M'],
        'M/2'
    ],
    [
        'The normality of 4%(mass/volume) NaOH solution is:',
        ['0.1 N', '1.0 N', '0.5 N', '0.01 N'],
        '0.5 N'
    ],
    [
        'Which of the following cannot function as both Bronsted acid and base?',
        ['HCl', 'NH₃', 'HSO₄', 'HCO₃'],
        'HCl'
    ],
    [
        'Hydrogen gas is not liberated when the following metal is added to dil. HCl.',
        ['Mg', 'Zn', 'Ag', 'Cu'],
        'Ag'
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
    window.location = "che8.php";
}
</script>
