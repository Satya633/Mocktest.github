<?php
include 'connect.php';

$answers = [3, 1, 1, 1, 1, 4, 1, 4, 2, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='452' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DE/Test-2/Key-paper</title>
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
        <h1>DIGITAL ELECTRONICS - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        '__________ Number of states a ring counter with 5 flip-flops will have?', 
        ['10', '15', '5', '32'], 
        '5'
    ],
    [
        'n-bit 2\'s complement number system range for integers is', 
        ['-2<sup>n-1</sup> to (2<sup>n-1</sup> - 1)', '-(2<sup>n-1</sup> - 1) to (2<sup>n-1</sup> - 1)', '-(2<sup>n-1</sup>) to (2<sup>n-1</sup>)', '-(2<sup>n-1</sup> + 1) to (2<sup>n-1</sup> - 1)'], 
        '-2<sup>n-1</sup> to (2<sup>n-1</sup> - 1)'
    ],
    [
        'Which of the following are universal gates?', 
        ['NAND, NOR', 'X-OR, X-NOR', 'NAND, X-OR', 'AND, OR'], 
        'NAND, NOR'
    ],
    [
        'The fastest logic family gate is', 
        ['ECL', 'CMOS', 'TTL', 'ETL'], 
        'ECL'
    ],
    [
        'How many 4 X 1 multiplexers are required to design an 8 X 1 multiplexer?', 
        ['2', '3', '5', '8'], 
        '2'
    ],
    [
        'Which Flip-Flop is free from the race-around problem?', 
        ['RS Flip-Flop', 'SR Flip-Flop', 'JK Flip-Flop', 'Master Slave JK Flip-Flop'], 
        'Master Slave JK Flip-Flop'
    ],
    [
        '(1E.42)<sub>16</sub> = (?)<sub>8</sub>', 
        ['36.204', '36.202', '74.204', '74.202'], 
        '36.204'
    ],
    [
        'Which logic gates among the below options can be used to create any Boolean function economically?', 
        ['XOR, NAND, OR', 'OR, NOT, XOR', 'NOR, NAND, XOR', 'NOR, NAND'], 
        'NOR, NAND'
    ],
    [
        '101001 - 010110 = ?', 
        ['100110', '010011', '010010', '011001'], 
        '010011'
    ],
    [
        'The 2\'s complement of the number 1101101 is', 
        ['0010011', '0110010', '0111110', '0101110'], 
        '0010011'
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
    window.location = "de2.php";
}
</script>
