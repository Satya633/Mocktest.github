<?php
include 'connect.php';

$answers = [3, 3, 3, 3, 3, 3, 3, 3, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='131208199' ORDER BY id DESC LIMIT 1";
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
    <title>GENERAL/MATHMATICS/Test-9/Key-paper</title>
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
        <h1>MATHMATICS- TEST:9/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'The value of \( \tan 45^\circ \) is:',
        ['1', '0', '1', '\( \infty \)'],
        '1'
    ],
    [
        'The solution of the equation \( x^2 + 3x + 2 = 0 \) is:',
        ['-1, -2', '1, 2', '-1, -2', '1, -2'],
        '-1, -2'
    ],
    [
        'The value of \( \log_{2} 8 \) is:',
        ['2', '3', '3', '1'],
        '3'
    ],
    [
        'The length of the diagonal of a rectangle with sides 3 and 4 is:',
        ['5', '7', '5', '6'],
        '5'
    ],
    [
        'The sum of the angles of a quadrilateral is:',
        ['180°', '360°', '360°', '270°'],
        '360°'
    ],
    [
        'The expansion of \( (x - 2)^2 \) is:',
        ['\( x^2 - 4x + 4 \)', '\( x^2 + 4x + 4 \)', '\( x^2 - 4x + 4 \)', '\( x^2 - 2x - 4 \)'],
        '\( x^2 - 4x + 4 \)'
    ],
    [
        'The value of \( \frac{d}{dx} \left( e^x \right) \) is:',
        ['\( e^x \)', '\( e^x + C \)', '\( e^x \)', '1'],
        '\( e^x \)'
    ],
    [
        'The ratio of the circumference to the diameter of a circle is:',
        ['\( \pi \)', '2', '\( \pi \)', '1'],
        '\( \pi \)'
    ],
    [
        'The solution to the system of equations \( 2x + y = 10 \) and \( x - y = 1 \) is:',
        ['\( x = 3, y = 4 \)', '\( x = 4, y = 3 \)', '\( x = 3, y = 4 \)', '\( x = 2, y = 5 \)'],
        '\( x = 3, y = 4 \)'
    ],
    [
        'The area of a right triangle with base \( b \) and height \( h \) is:',
        ['\( \frac{1}{2} b \cdot h \)', '\( b \cdot h \)', '\( \frac{1}{2} b \cdot h \)', '\( b^2 + h^2 \)'],
        '\( \frac{1}{2} b \cdot h \)'
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
    window.location = "maths9.php";
}
</script>
