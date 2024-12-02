<?php
include 'connect.php';

$answers = [4, 3, 4, 3, 3, 2, 3, 1, 2, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='454' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DE/Test-4/Key-paper</title>
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
        <h1>DIGITAL ELECTRONICS - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Simplest Registers only consists of', 
        ['Counter', 'EPROM', 'latch', 'flip-flop'], 
        'flip-flop'
    ],
    [
        'Which of the following is a Universal gate?', 
        ['AND gate', 'OR gate', 'NAND gate', 'NOR gate'], 
        'NAND gate'
    ],
    [
        '(x\')\' is a', 
        ['complement', 'dual complement', 'reflection', 'duality'], 
        'duality'
    ],
    [
        'A Multiplexer is also called as a', 
        ['Coder', 'parallel adder', 'Data selector', 'NOR gate'], 
        'Data selector'
    ],
    [
        'A Binary variable can take the values', 
        ['0 only', '0 and -1', '0 and 1', '1 and 2'], 
        '0 and 1'
    ],
    [
        '(1010.011)<sub>2</sub> =', 
        ['(10.365)<sub>10</sub>', '(10.375)<sub>10</sub>', '(11.365)<sub>10</sub>', '(11.375)<sub>10</sub>'], 
        '(10.375)<sub>10</sub>'
    ],
    [
        'Each square in a Karnaugh map represents a', 
        ['Point', 'value', 'minterm', 'maxterm'], 
        'minterm'
    ],
    [
        'Circuit whose output depends on directly present input is called', 
        ['combinational circuit', 'sequential circuit', 'combinational sequence', 'series'], 
        'combinational circuit'
    ],
    [
        'The purpose of the microprocessor is to control______________', 
        ['Processing', 'Memory', 'Switches', 'Tasks'], 
        'Memory'
    ],
    [
        'The decimal equivalent of hex number 1A53 is', 
        ['6739', '6793', '6973', '6379'], 
        '6739'
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
    window.location = "de4.php";
}
</script>
