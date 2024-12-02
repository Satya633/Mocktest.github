<?php
include 'connect.php';

$answers = [3, 4, 3, 3, 4, 3, 4, 3, 3, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='131208193' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/GENERAL/MATHMATICS/Test-3/Key-paper</title>
    <link rel="stylesheet" href="satya.css"/>
    <link rel="icon" href="logo.png" type="image/x-icon">
<script type="text/javascript" async
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
  </script>
    <style>
        .s { width: 400px; height: 40px; margin-bottom: 10px; }
        .correct { border: 5px solid green; border-radius: 10px; }
        .incorrect { border: 5px solid red; border-radius: 10px; }
        .true-answer { border: 5px solid green; border-radius: 10px; }
    </style>
</head>
<body>
    <center class="textcolor">
        <h1>MATHMATICS- TEST:3/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'If the roots of the quadratic equation \( x^2 - 5x + 6 = 0 \) are \( \alpha \) and \( \beta \), then find the value of \( \alpha + \beta \).',
        ['5', '-5', '5', 'None of the above'],
        '5'
    ],
    [
        'Find the value of \( \sin^2 30^\circ + \cos^2 30^\circ \).',
        ['0', '1', '0.5', '1'],
        '1'
    ],
    [
        'Find the value of the determinant of the matrix: \n| 2  4 |\n| 1  3 |.',
        ['4', '5', '2', 'None of the above'],
        '2'
    ],
    [
        'If the sum of the first 10 terms of an arithmetic progression is 150, and the first term is 10, what is the common difference?',
        ['10', '5', '8', '12'],
        '8'
    ],
    [
        'If \( f(x) = 3x^2 - 2x \), find the value of \( f(2) \).',
        ['12', '8', '10', '10'],
        '10'
    ],
    [
        'What is the solution to the equation \( \log(x) = 1 \)?',
        ['x = 10', 'x = 1', 'x = 10', 'None of the above'],
        'x = 10'
    ],
    [
        'Find the value of the integral \( \int(x^2 - 4x + 3)dx \).',
        ['\( x^3/3 - 2x^2 + 3x + C \)', '\( x^3 - 2x^2 + C \)', '\( x^2 - 4x + C \)', '\( x^3/3 - 2x^2 + 3x + C \)'],
        '\( x^3/3 - 2x^2 + 3x + C \)'
    ],
    [
        'What is the general solution of the differential equation \( \frac{dy}{dx} = 6x \)?',
        ['\( y = 3x^2 + C \)', '\( y = 6x + C \)', '\( y = 3x^2 + C \)', 'None of the above'],
        '\( y = 3x^2 + C \)'
    ],
    [
        'Find the value of the determinant of the matrix: \n| 1  2  3 |\n| 4  5  6 |\n| 7  8  9 |.',
        ['0', '1', '0', 'None of the above'],
        '0'
    ],
    [
        'Find the value of \( \sin 45^\circ + \cos 45^\circ \).',
        ['\( \sqrt{2} \)', '\( \sqrt{3} \)', '1', '\( \sqrt{2} \)'],
        '\( \sqrt{2} \)'
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
    window.location = "maths3.php";
}
</script>
