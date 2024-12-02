<?php
include 'connect.php';

$answers = [4, 4, 3, 3, 4, 4, 3, 4, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='131208195' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/GENERAL/MATHMATICS/Test-5/Key-paper</title>
    <link rel="stylesheet" href="satya.css"/>
    <link rel="icon" href="logo.png" type="image/x-icon">
<script type="text/javascript" async
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>
    <style>
        .s { width: 400px; height: 40px; margin-bottom: 10px; }
        .correct { border: 5px solid green; border-radius: 10px; }
        .incorrect { border: 5px solid red; border-radius: 10px; }
        .true-answer { border: 5px solid green; border-radius: 10px; }
    </style>
</head>
<body>
    <center class="textcolor">
        <h1>MATHMATICS- TEST:5/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'If \( a = 3 \) and \( b = 4 \), find the value of \( \sqrt{a^2 + b^2} \).',
        ['5', '4', '3', '5'],
        '5'
    ],
    [
        'Find the value of \( \tan(45^\circ) \).',
        ['0', '1', '∞', '1'],
        '1'
    ],
    [
        'Find the value of the sum of the infinite geometric series: \( 5 + 5/2 + 5/4 + 5/8 + \ldots \).',
        ['5', '10', '10', '15'],
        '10'
    ],
    [
        'Find the derivative of \( f(x) = x^2 + 3x \).',
        ['\( 2x + 3 \)', '\( 2x \)', '\( 2x + 3 \)', '\( 3x + 2 \)'],
        '\( 2x + 3 \)'
    ],
    [
        'Find the sum of the first 20 odd numbers.',
        ['100', '200', '250', '400'],
        '400'
    ],
    [
        'If the roots of the quadratic equation \( ax^2 + bx + c = 0 \) are \( \alpha \) and \( \beta \), then the sum of the roots is given by:',
        ['\( -b/a \)', '\( b/a \)', '\( c/a \)', '\( -b/a \)'],
        '\( -b/a \)'
    ],
    [
        'What is the limit of \( 1/x \) as \( x \to \infty \)?',
        ['0', '1', '0', '∞'],
        '0'
    ],
    [
        'What is the solution of the equation \( x^2 = 25 \)?',
        ['\( x = 5 \)', '\( x = -5 \)', '\( x = 5 \text{ or } x = -5 \)', '\( x = 5 \text{ or } x = -5 \)'],
        '\( x = 5 \text{ or } x = -5 \)'
    ],
    [
        'Find the derivative of \( f(x) = 3x^3 - 2x^2 + x \).',
        ['\( 9x^2 - 4x + 1 \)', '\( 9x^2 - 4x \)', '\( 9x^2 - 4x + 1 \)', '\( 9x^2 - 2x \)'],
        '\( 9x^2 - 4x + 1 \)'
    ],
    [
        'Find the value of \( \tan(30^\circ) \).',
        ['\( 1/\sqrt{3} \)', '\( \sqrt{3} \)', '\( 1/\sqrt{3} \)', '2'],
        '\( 1/\sqrt{3} \)'
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
    window.location = "maths5.php";
}
</script>
