<?php
include 'connect.php';

$answers = [3, 1, 2, 1, 2, 2, 2, 4, 3, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3853' ORDER BY id DESC LIMIT 1";

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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-3/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:3/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'Isoprene is a monomer of:',
        ['Starch', 'Cellulose', 'Natural rubber', 'Lignin'],
        'Natural rubber'
    ],
    [
        'Buna-S is a copolymer of:',
        ['Butadiene and Styrene', 'Butadiene and Acrylonitrile', 'Butadiene and Isoprene', 'Formaldehyde and Styrene'],
        'Butadiene and Styrene'
    ],
    [
        'Main constituent of natural gas is:',
        ['Ethane', 'Methane', 'Butane', 'Carbon Monoxide'],
        'Methane'
    ],
    [
        'Ozone Layer present is at:',
        ['Stratosphere', 'Ionosphere', 'Thermosphere', 'Atmosphere'],
        'Stratosphere'
    ],
    [
        'The amount of DO required to aerobically decompose biodegradable organic matter of a given volume of water is:',
        ['Biochemical Oxygen Demand', 'Biological Oxygen Demand', 'Chemical Oxygen Demand', 'Biomagnification'],
        'Biological Oxygen Demand'
    ],
    [
        'The nucleus consists of:',
        ['Proton and electron', 'Proton and Neutron', 'Proton and Deuterium', 'Proton and Photon'],
        'Proton and Neutron'
    ],
    [
        'The shape of P-orbital is:',
        ['spherical', 'Dumbbell', 'Double Dumbbell', 'Oval'],
        'Dumbbell'
    ],
    [
        'The maximum number of electrons that a f-orbital can accommodate is:',
        ['2', '6', '10', '14'],
        '14'
    ],
    [
        'In NaCl formation Sodium is donating........electrons:',
        ['0', '2', '1', '3'],
        '1'
    ],
    [
        'O₂ molecule contains:',
        ['Covalent bond', 'Ionic bond', 'Hydrogen bond', 'Metallic bond'],
        'Covalent bond'
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
    window.location = "che3.php";
}
</script>
