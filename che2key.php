<?php
include 'connect.php';

$answers = [2, 3, 4, 1, 2, 3, 1, 3, 4, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3852' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-2/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:2/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'Laws of electrolysis were given by:',
        ['Ostwaid', 'Faraday', 'Arrhenius', 'Volta'],
        'Faraday'
    ],
    [
        'Common electrolyte used in the salt bridge:',
        ['NaOH', 'NaCO₃', 'KCl', 'KOH'],
        'KCl'
    ],
    [
        'Standard Reduction potential of an element is equal to:',
        ['1 X its reduction potential', '-1 X its standard oxidation potential', '-1 X its reduce potential', '1 X its standard oxidation potential'],
        '1 X its standard oxidation potential'
    ],
    [
        'The standard emf for the cell reaction, Zn + Cu²⁺ → Cu + Zn²⁺ is 1.10 V at 25°C. The emf of the cell reaction when 0.1 M Cu²⁺ and 0.1 M Zn²⁺ solutions are used at 25°C is:',
        ['1.10V', '0.11V', '-1.10V', '-0.11V'],
        '0.11V'
    ],
    [
        'Which chemical is responsible for permanent hardness of water?',
        ['KCl', 'MgCl₂', 'NaCl', 'AgCl'],
        'MgCl₂'
    ],
    [
        'Permutit is chemically:',
        ['Sodium Silicate', 'Aluminium Silicate', 'Hydrated Sodium alimino silicate', 'Calcium silicate'],
        'Hydrated Sodium alimino silicate'
    ],
    [
        'The cation exchange resin possesses:',
        ['Acidic group', 'Basic group', 'Amphoteric group', 'Benzo group'],
        'Acidic group'
    ],
    [
        'Chemically the rust is:',
        ['Fe₂O₃', 'Fe₂O₃.FeO', 'Fe₂O₃.XH₂O', 'Fe₂O₃.NH₃'],
        'Fe₂O₃.XH₂O'
    ],
    [
        'Galvanizing is the process of coating iron with:',
        ['Mg', 'Cu', 'Au', 'Zn'],
        'Zn'
    ],
    [
        'Which of the following is not a thermoplastic:',
        ['Bakelite', 'Polystyrene', 'Polythene', 'Nylon'],
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
    window.location = "che2.php";
}
</script>
