<?php
include 'connect.php';

$answers = [2, 3, 4, 4, 1, 4, 2, 4, 2, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='451' ORDER BY id DESC LIMIT 1";
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
        <h1>DIGITAL ELECTRONICS - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'The table containing present state of output, next state of the output, and the inputs is called', 
        ['Truth table', 'State table', 'Excitation table', 'Transition table'], 
        'Excitation table'
    ],
    [
        'A sequential circuit with 10 states will have', 
        ['0 Flip-flops', '10 Flip-flops', '4 Flip-flops', '5 Flip-flops'], 
        '4 Flip-flops'
    ],
    [
        'A binary number can be multiplied by 2 or divided by 2 with the help of', 
        ['AND gate', 'Sequential circuit', 'Shift register', 'Any combinational circuit'], 
        'Shift register'
    ],
    [
        'A five-bit binary counter uses flip-flops with a propagation delay time of 10ns each. The maximum possible time required for a change of state will be', 
        ['10ns', '0.5ns', '2ns', '50ns'], 
        '50ns'
    ],
    [
        'The Boolean expression (A+C)(AB\' + AC)(A\'C\' + B\') can be simplified to', 
        ['AB\'', 'AB + A\'C', 'A\'B + BC', 'AB + BC'], 
        'AB\''
    ],
    [
        'The 2\'s complement representation of the decimal value -15 is', 
        ['01111', '11111', '11110', '10001'], 
        '10001'
    ],
    [
        'Let * be defined as x * y = x\' + y. Let z = x * y. Then the value of z * x is', 
        ['x\' + y', 'x', '0', '1'], 
        'x'
    ],
    [
        'An SR latch is made by cross-coupling two NAND gates. If S = R = 0, then it will result in', 
        ['Q = 0, Q\' = 1', 'Q = 1, Q\' = 0', 'Q = 1, Q\' = 1', 'Indeterminate state'], 
        'Indeterminate state'
    ],
    [
        'Assume that all the numbers are requested in 2\'s complement. Then, which of the following is divisible by 11111011?', 
        ['11100100', '11100111', '11010111', '11011011'], 
        '11100111'
    ],
    [
        'If (73)<sub>x</sub> = (54)<sub>y</sub> in a number system, then the possible values of x and y are', 
        ['8, 11', '8, 16', '10, 12', '9, 13'], 
        '8, 11'
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
    window.location = "de.php";
}
</script>
