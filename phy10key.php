<?php
include 'connect.php';

$answers = [4, 1, 3, 1, 2, 3, 1, 2, 4, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1682510' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/PHYSICS/Test-10/Key-paper</title>
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
        <h1>PHYSICS - TEST:10/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'Quality of sound is decided by:',
        ['loudness', 'intensity', 'number of overtones', 'frequency'],
        'number of overtones'
    ],
    [
        'Inaudibility limit is:',
        ['one hundredth of initial intensity', 'one tenth of initial intensity', 'one thousandth of initial intensity', 'one millionth of initial intensity'],
        'one millionth of initial intensity'
    ],
    [
        'A Carnot\'s engine operates with source at 127°C and sink at 27°C. If the source supplies 40 kJ of heat energy, the work done by the engine is:',
        ['30 kJ', '10 kJ', '4 kJ', '1 kJ'],
        '10 kJ'
    ],
    [
        'A monoatomic gas initially at 17°C is suddenly compressed to one-eighth of its original volume. The temperature after compression is:',
        ['1160K', '36.25K', '2320K', '887K'],
        '1160K'
    ],
    [
        'Two cylinders of volumes 20 cc and 30 cc have gases at pressures 40 cm and 50 cm of Hg under the same temperature. If they are connected by a very narrow pipe, the pressure in cm of Hg will be:',
        ['45', '50', '46', '15'],
        '46'
    ],
    [
        'In an adiabatic expansion, a gas does 25J of work, while in an adiabatic compression, 100J of work is done on a gas. The change of internal energy in the two processes respectively are:',
        ['25J and -100J', '-25J and 100J', '-25J and -100J', '25J and 100J'],
        '-25J and 100J'
    ],
    [
        'The volume of one mole of an ideal gas changes from V to 2V at a temperature of 300 K. If R is the universal gas constant, then the work done in this process is:',
        ['300Rln2', '600Rln2', '300ln2', '600ln2'],
        '300Rln2'
    ],
    [
        'The maximum kinetic energy of the photoelectrons emitted from a surface is dependent on the:',
        ['intensity of incident radiation', 'potential of the collector electrode', 'frequency of incident radiation', 'angle of incidence of radiation on the surface'],
        'frequency of incident radiation'
    ],
    [
        'In an optical fibre, the relation between the refractive index of the core (n1) and the refractive index of the cladding (n2) is:',
        ['n1 > n2', 'n1 < n2', 'n1 = n2', 'n1 << n2'],
        'n1 > n2'
    ],
    [
        'Three vectors A, B, and C satisfy the relation A·B = 0 and A·C = 0. The vector A is parallel to:',
        ['B', 'C', 'B·C', 'B × C'],
        'B × C'
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
    window.location = "phy10.php";
}
</script>
