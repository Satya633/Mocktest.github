<?php
include 'connect.php';

$answers = [2, 4, 2, 1, 1, 1, 2, 2, 1, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='168258' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/PHYSICS/Test-8/Key-paper</title>
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
        <h1>PHYSICS - TEST:8/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'For an adiabatic expansion of a perfect gas, the value of ΔP/p is equal to:',
        ['ΔV/V', 'γ ΔV/V', '-γ ΔV/V', 'γ - ΔV/V'],
        'γ ΔV/V'
    ],
    [
        'First law of Thermodynamics is a special case of:',
        ['Boyle\'s law', 'Charles law', 'Law of conservation of mass', 'Law of conservation of energy'],
        'Law of conservation of energy'
    ],
    [
        'If the critical angle of total internal reflection from a medium to vacuum is 30°, the velocity of light in the medium is:',
        ['3 x 10⁸ m/s', '1.5 x 10⁸ m/s', '√3 x 10⁸ m/s', '2 x 10⁸ m/s'],
        '1.5 x 10⁸ m/s'
    ],
    [
        'Light rays of wavelength 4.36 x 10⁻⁷ m incident on a metal surface with work function 1.24 eV. The stopping potential required to stop the emission of photoelectrons is:',
        ['1.6 eV', '1.24 eV', '3.2 eV', '4.8 eV'],
        '1.6 eV'
    ],
    [
        'Young\'s modulus of steel is 2 x 10¹¹ N/m². Its value in dyne/cm² is:',
        ['2 x 10¹²', '2 x 10¹⁰', '2 x 10⁸', '2 x 10⁻¹¹'],
        '2 x 10¹²'
    ],
    [
        'Dimension of velocity gradient is:',
        ['[M⁰L⁰T⁻¹]', '[ML⁻¹T⁻¹]', '[M⁰LT⁻¹]', '[ML⁰T⁻¹]'],
        '[ML⁻¹T⁻¹]'
    ],
    [
        'Unit vector parallel to the resultant of vectors A = 4i - 3j and B = 8i + 8j will be:',
        ['24i + 5j/13', '12i + 5j/13', '6i + 5j/13', '12i + 5j/13'],
        '12i + 5j/13'
    ],
    [
        'The resultant of two forces 3P and 2P is R. If the first force is doubled, then the resultant is also doubled. The angle between the two forces is:',
        ['60°', '120°', '30°', '135°'],
        '120°'
    ],
    [
        'A particle is projected vertically upward with a speed of 40 m/s. The velocity of the particle 2 seconds before it reaches the maximum height is (take g = 10 m/s²):',
        ['20 m/s²', '4.2 m/s²', '9.8 m/s²', '10 m/s²'],
        '20 m/s²'
    ],
    [
        'A car is moving with constant acceleration and covered the distance between two points 60 m apart in 6 s. Its speed as it passes the second point is 15 m/s. The acceleration is:',
        ['1/3 m/s²', '2/3 m/s²', '3/5 m/s²', '5/3 m/s²'],
        '5/3 m/s²'
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
    window.location = "phy8.php";
}
</script>
