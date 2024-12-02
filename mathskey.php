<?php
include 'connect.php';

$answers = [2, 3, 3, 2, 1, 3, 1, 2, 2, 2]; // Correct answers
$sql = "SELECT * FROM data WHERE UID='13120819' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/GENERAL/MATHMATICS/Test-1/Key-paper</title>
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
        <h1>MATHMATICS- TEST:1/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'If tan θ + cot θ = 2, then what is the value of tan^100 θ + cot^100 θ?',
        ['1', '3', '2', 'None of the above'],
        '3'
    ],
    [
        'If the value of α + β = 90°, and α : β = 2 : 1, then what is the ratio of cos α to cos β?',
        ['1 : 3', '√3 : 1', '1 : √3', 'None of the above'],
        '1 : √3'
    ],
    [
        'If θ is an acute angle, and 7sin²θ + 3cos²θ = 4, then what is the value of tan θ?',
        ['1', '√3', '1/√3', 'None of the above'],
        '1/√3'
    ],
    [
        'If tan θ - cot θ = 0, what will be the value of sin θ + cos θ?',
        ['1', '√2', '1/√2', 'None of the above'],
        '√2'
    ],
    [
        'If θ is an acute angle, and 4cos²θ - 1 = 0, then what is the value of tan (θ - 15°)?',
        ['1', '√2', '1/√3', 'None of the above'],
        '1'
    ],
    [
        'If θ + φ = π/2, and sin θ = 1/2, what will be the value of sin φ?',
        ['1', '√2', '√3/2', '2/√3'],
        '√3/2'
    ],
    [
        'What is the value of tan θ / (1 - cot θ) + cot θ / (1 - tan θ)?',
        ['tan θ + cot θ + 1', 'tan θ - cot θ - 1', 'tan θ - cot θ + 1', 'None of the above'],
        'tan θ + cot θ + 1'
    ],
    [
        'What will be the value of (√3 tan θ + 1), if r sin θ = 1, and r cos θ = √3?',
        ['2', '1', '0', 'None of the above'],
        '1'
    ],
    [
        'What is the value of tan 3θ, if tan 7θ · tan 2θ = 1?',
        ['√3', '1/√3', '-1/√3', 'None of the above'],
        '1/√3'
    ],
    [
        'Formula of 2cosA·sinB:',
        ['cos(A-B) + cos(A+B)', 'sin(A+B) + sin(A-B)', 'sin(A-B) + sin(A+B)', 'cos(A-B) - cos(A+B)'],
        'sin(A+B) + sin(A-B)'
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
    window.location = "maths.php";
}
</script>
