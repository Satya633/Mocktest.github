<?php
include 'connect.php';

$answers = [3, 1, 3, 1, 2, 1, 2, 2, 1, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3851' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-1/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:1/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'The splitting of spectral lines in a strong magnetic field is called:',
        ['Stark Effect', 'Pauli Exclusion Principle', 'Zeeman Effect', 'Aufbau Effect'],
        'Zeeman Effect'
    ],
    [
        'Bohr\'s model can explain:',
        ['The spectrum of hydrogen atom only', 'The spectrum of hydrogen molecule', 'The solar spectrum', 'Spectrum of an atom or ion containing one electron only'],
        'The spectrum of hydrogen atom only'
    ],
    [
        'The maximum number of electrons that a d-orbital can accommodate is:',
        ['2', '6', '10', '14'],
        '10'
    ],
    [
        'N₂ molecule contains:',
        ['Covalent bond', 'Ionic bond', 'Hydrogen bond', 'Metallic bond'],
        'Covalent bond'
    ],
    [
        'One mole of any of the particle contains:',
        ['6.023X 10⁻²³', '6.022X 10²³', '60.23X 10²³', '6.022X 10²⁵'],
        '6.022X 10²³'
    ],
    [
        'The normality of the solution obtained by dissolving 4 gm of NaOH in 1 litre is:',
        ['1N', '0.1N', '0.5N', '0.02N'],
        '0.1N'
    ],
    [
        'Molecular weight of H₂SO₄ is:',
        ['92', '96', '98', '99'],
        '98'
    ],
    [
        'A Lewis acid is a substance which:',
        ['Accept protons', 'Accept a lone pair of electrons', 'Donate protons', 'Donate a lone pair of electrons'],
        'Accept a lone pair of electrons'
    ],
    [
        'pH of a solution is 9.5, the solution is:',
        ['Basic', 'Acidic', 'Neutral', 'Amphoteric'],
        'Basic'
    ],
    [
        'Magnesium atomic number is 12, which of the following is the electronic configuration:',
        ['1S²2S¹2P⁶3S²', '1S²2S²2P⁵3S²', '1S²2S²2P⁶3S²', '1S²2S²2P⁶3S¹3d¹'],
        '1S²2S²2P⁶3S²'
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
    window.location = "chemistry.php";
}
</script>
