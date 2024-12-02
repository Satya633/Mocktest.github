<?php
include 'connect.php';

$answers = [2, 4, 2, 2, 4, 1, 2, 3, 2, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3857' ORDER BY id DESC LIMIT 1";

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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-7/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:7/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'Hardness of water is conventionally expressed in terms of equivalent amount of:',
        ['MgCO₃', 'CaCO₃', 'Na₂CO₃', 'K₂CO₃'],
        'CaCO₃'
    ],
    [
        'Zero hardness of water is achieved by:',
        ['using lime soda process', 'excess lime treatment', 'using excess alum dosage', 'ion-exchange method'],
        'using lime soda process'
    ],
    [
        'What is the hardness of water in terms of CaCO₃ equivalent is carried with:',
        ['Evolution of oxygen', 'Absorption of oxygen', 'Evolution of hydrogen', 'Absorption of hydrogen'],
        'Evolution of hydrogen'
    ],
    [
        'Which of the following metal oxide film is protective from corrosion?',
        ['Porous', 'Non-Porous', 'Volatile', 'Unstable'],
        'Non-Porous'
    ],
    [
        'Which of the following is the thermosetting plastic?',
        ['PVC', 'Teflon', 'Polystyrene', 'Bakelite'],
        'Bakelite'
    ],
    [
        'Ebonite is:',
        ['Highly vulcanized rubber', 'PVC', 'Synthetic rubber', 'Polystyrene'],
        'Highly vulcanized rubber'
    ],
    [
        'Buna-S rubber is made up of the monomers of:',
        ['1,3 butadiene and acrylonitrile', '1,3 butadiene and styrene', '1,3 butadiene and formaldehyde', '1,3 butadiene and phenol'],
        '1,3 butadiene and styrene'
    ],
    [
        'Composition of water gas is:',
        ['CO+N₂', 'CO+CH₄', 'CO+H₂', 'CH₄+N₂'],
        'CO+H₂'
    ],
    [
        'Which of the following is not a green gas?',
        ['Hydrogen', 'Carbon monoxide', 'Methane', 'Nitrous oxide'],
        'Carbon monoxide'
    ],
    [
        'Photochemical smog is due to the presence of:',
        ['Oxide of carbon', 'Lead', 'Oxide of sulphur', 'Oxide of nitrogen'],
        'Oxide of nitrogen'
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
    window.location = "che7.php";
}
</script>
