<?php
include 'connect.php';

$answers = [4, 3, 3, 1, 3, 4, 2, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1312081910' ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Default values
$questions = array_fill(0, 10, 0);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $questions = [
        $row["ques1"], $row["ques2"], $row["ques3"], $row["ques4"],
        $row["ques5"], $row["ques6"], $row["ques7"], $row["ques8"],
        $row["ques9"]
    ];
}
?>

<html>
<head>
    <title>GENERAL/MATHMATICS/Test-10/Key-paper</title>
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
        <h1>MATHMATICS- TEST:10/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'The integral of \( \int 2x \, dx \) is:',
        ['\( x^2 + C \)', '\( 2x^2 + C \)', '\( x^2 \)', '\( x^2 + C \)'],
        '\( x^2 + C \)'
    ],
    [
        'The value of \( \frac{d}{dx} (x^3 + 4x^2 + 2x) \) is:',
        ['\( 3x^2 + 8x + 2 \)', '\( 3x^2 + 4x \)', '\( 3x^2 + 8x + 2 \)', '\( 4x^2 + 2x \)'],
        '\( 3x^2 + 8x + 2 \)'
    ],
    [
        'The roots of the quadratic equation \( x^2 - 6x + 9 = 0 \) are:',
        ['3, 3', '2, 4', '3, 3', '1, 5'],
        '3, 3'
    ],
    [
        'The area of a right-angled triangle with perpendicular sides 3 and 4 is:',
        ['6', '6', '7', '5'],
        '6'
    ],
    [
        'The value of \( \log_{10} 100 \) is:',
        ['2', '1', '2', '0.5'],
        '2'
    ],
    [
        'The distance between the points \( (1, 2) \) and \( (4, 6) \) is:',
        ['4', '5', '6', '5'],
        '5'
    ],
    [
        'If \( y = \sin x \), then \( \frac{dy}{dx} \) is:',
        ['\( \cos x \)', '\( \cos x \)', '\( -\cos x \)', '\( -\sin x \)'],
        '\( \cos x \)'
    ],
    [
        'The expansion of \( (x + y)^3 \) is:',
        ['\( x^3 + 3x^2 y + 3xy^2 + y^3 \)', '\( x^3 + 3x^2 y + y^3 \)', '\( x^3 + 3x^2 y + 3xy^2 + y^3 \)', '\( x^3 + y^3 \)'],
        '\( x^3 + 3x^2 y + 3xy^2 + y^3 \)'
    ],
    [
        'The number of terms in the expansion of \( (x + y)^{10} \) is:',
        ['10', '1', '11', '12'],
        '11'
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
    window.location = "maths10.php";
}
</script>
