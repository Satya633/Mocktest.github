<?php
include 'connect.php';

$answers = [4, 3, 1, 2, 2, 4, 3, 3, 1, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='453' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DE/Test-3/Key-paper</title>
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
        <h1>DIGITAL ELECTRONICS - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'When will a JK flip-flop toggle the input?', 
        ['J = 0, K = 0', 'J = 0, K = 1', 'J = 1, K = 0', 'J = 1, K = 1'], 
        'J = 1, K = 1'
    ],
    [
        'If the total number of transistors fabricated on a single chip is in the range of 300 to 3000, which integrated circuit do you prefer?', 
        ['VLSI', 'SSI', 'LSI', 'MSI'], 
        'LSI'
    ],
    [
        'The binary equivalent of 0.6875 is _________', 
        ['0.1011', '0.0101', '0.1001', '0.0011'], 
        '0.1011'
    ],
    [
        'Which is the DeMorgan\'s gate equivalent to OR?', 
        ['Negative NOR', 'NEGATIVE NAND', 'NEGATIVE AND', 'NEGATIVE OR'], 
        'NEGATIVE NAND'
    ],
    [
        'How many flip-flops are required for the mod-16 counter?', 
        ['5', '4', '6', '3'], 
        '4'
    ],
    [
        'EPROM contents can be erased by exposing them to', 
        ['Burst of microwaves', 'Intense heat radiations', 'Infrared rays', 'Ultraviolet rays'], 
        'Ultraviolet rays'
    ],
    [
        'The digital logic family which has minimum power dissipation is', 
        ['TTL', 'DTL', 'CMOS', 'RTL'], 
        'CMOS'
    ],
    [
        'If the input to a T-flip flop is a 100 Hz signal, the final output of two T-flip-flops in cascade is', 
        ['1000 Hz', '50 Hz', '25 Hz', '200 Hz'], 
        '25 Hz'
    ],
    [
        'The device which changes from serial data to parallel data is', 
        ['DEMULTIPLEXER', 'MULTIPLEXER', 'COUNTER', 'FLIP-FLOP'], 
        'DEMULTIPLEXER'
    ],
    [
        'When simplified with Boolean Algebra, (x + y)(x + z) simplifies to', 
        ['x(1 + yz)', 'x + yz', 'x + x(y + z)', 'x'], 
        'x + yz'
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
    window.location = "de3.php";
}
</script>
