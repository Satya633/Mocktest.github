<?php
include 'connect.php';

$answers = [3, 3, 3, 3, 3, 3, 3, 3, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='131208198' ORDER BY id DESC LIMIT 1";
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
    <title>GENERAL/MATHMATICS/Test-8/Key-paper</title>
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
        <h1>MATHMATICS- TEST:8/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'The slope of the tangent to the curve \( y = x^2 \) at \( x = 2 \) is:',
        ['2', '4', '4', '1'],
        '4'
    ],
    [
        'The derivative of \( f(x) = 3x^2 + 5x + 2 \) is:',
        ['\( 6x + 5 \)', '\( 6x + 2 \)', '\( 6x + 5 \)', '\( 3x + 5 \)'],
        '\( 6x + 5 \)'
    ],
    [
        'The integral of \( \cos x \) is:',
        ['\( \sin x \)', '\( -\sin x \)', '\( \sin x \)', '\( -\cos x \)'],
        '\( \sin x \)'
    ],
    [
        'The sum of the angles of a triangle is:',
        ['180°', '360°', '180°', '90°'],
        '180°'
    ],
    [
        'The quadratic equation \( x^2 - 4x + 3 = 0 \) has the roots:',
        ['1, 3', '2, 3', '1, 3', '1, 4'],
        '1, 3'
    ],
    [
        'The value of \( \log_{10} 100 \) is:',
        ['1', '2', '2', '10'],
        '2'
    ],
    [
        'The area of a circle with radius \( r \) is given by:',
        ['\( \pi r^2 \)', '\( 2\pi r \)', '\( \pi r^2 \)', '\( \pi r \)'],
        '\( \pi r^2 \)'
    ],
    [
        'The distance between the points \( (2, 3) \) and \( (5, 7) \) is:',
        ['4', '5', '5', '3'],
        '5'
    ],
    [
        'The solution to the system of equations \( x + y = 5 \) and \( 2x - y = 3 \) is:',
        ['\( x = 2, y = 3 \)', '\( x = 3, y = 2 \)', '\( x = 2, y = 3 \)', '\( x = 1, y = 4 \)'],
        '\( x = 2, y = 3 \)'
    ],
    [
        'The value of \( \frac{d}{dx} (x^3) \) is:',
        ['\( 3x^2 \)', '\( 2x^3 \)', '\( 3x^2 \)', '\( x^2 \)'],
        '\( 3x^2 \)'
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
    window.location = "maths8.php";
}
</script>
