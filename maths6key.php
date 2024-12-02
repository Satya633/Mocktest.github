<?php
include 'connect.php';

$answers = [2, 2, 3, 3, 1, 3, 3, 3, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='131208196' ORDER BY id DESC LIMIT 1";
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
    <title>GENERAL/MATHMATICS/Test-6/Key-paper</title>
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
        <h1>MATHMATICS- TEST:6/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'If \( x^2 - 5x + 6 = 0 \), what are the roots of the equation?',
        ['1, 5', '2, 3', '3, 5', '0, 6'],
        '2, 3'
    ],
    [
        'The derivative of \( y = x^2 + 3x + 4 \) with respect to \( x \) is:',
        ['\( 2x + 3 \)', '\( 2x + 3 \)', '\( x + 4 \)', '\( 3x + 4 \)'],
        '\( 2x + 3 \)'
    ],
    [
        'What is the value of \( \int x \, dx \)?',
        ['\( x^2 + C \)', '\( \frac{x^2}{2} \)', '\( \frac{x^2}{2} + C \)', '\( \frac{x}{2} + C \)'],
        '\( \frac{x^2}{2} + C \)'
    ],
    [
        'What is the sum of the series \( 1 + 2 + 3 + \dots + n \)?',
        ['\( n(n+1) \)', '\( n(n-1)/2 \)', '\( n(n+1)/2 \)', '\( n^2 \)'],
        '\( n(n+1)/2 \)'
    ],
    [
        'The value of \( \sin 45^\circ \) is:',
        ['\( \frac{\sqrt{2}}{2} \)', '\( \frac{1}{2} \)', '1', '\( \sqrt{2} \)'],
        '\( \frac{\sqrt{2}}{2} \)'
    ],
    [
        'What is the value of \( (a+b)^2 - (a-b)^2 \)?',
        ['\( 2ab \)', '\( 4ab \)', '\( 4ab \)', 'ab'],
        '\( 4ab \)'
    ],
    [
        'If \( \tan \theta = 1 \), then \( \theta \) is:',
        ['\( 30^\circ \)', '\( 45^\circ \)', '\( 45^\circ \)', '\( 60^\circ \)'],
        '\( 45^\circ \)'
    ],
    [
        'Evaluate \( \lim_{x \to 0} \frac{\sin x}{x} \):',
        ['0', '1', '1', '\( \infty \)'],
        '1'
    ],
    [
        'The area of a triangle with sides \( a = 3, b = 4, c = 5 \) is:',
        ['6', '7', '6', '5'],
        '6'
    ],
    [
        'If \( \cos^2 \theta + \sin^2 \theta = 1 \), what is \( \cos^2 30^\circ \)?',
        ['\( \frac{1}{2} \)', '\( \frac{3}{4} \)', '\( \frac{3}{4} \)', '\( \frac{2}{3} \)'],
        '\( \frac{3}{4} \)'
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
    window.location = "maths6.php";
}
</script>
