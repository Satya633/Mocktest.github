<?php
include 'connect.php';

$answers = [3, 2, 3, 3, 3, 3, 3, 3, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='131208197' ORDER BY id DESC LIMIT 1";
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
    <title>GENERAL/MATHMATICS/Test-7/Key-paper</title>
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
        <h1>MATHMATICS- TEST:7/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
      $questionsData = [
    [
        'The volume of a sphere with radius \( r \) is given by:',
        ['\( \frac{4}{3} \pi r^2 \)', '\( \frac{4}{3} \pi r^3 \)', '\( \frac{4}{3} \pi r^3 \)', '\( \pi r^3 \)'],
        '\( \frac{4}{3} \pi r^3 \)'
    ],
    [
        'What is the solution to the quadratic equation \( x^2 - 7x + 10 = 0 \)?',
        ['2, 5', '2, 5', '3, 7', '0, 10'],
        '2, 5'
    ],
    [
        'The slope of a line passing through \( (2,3) \) and \( (5,7) \) is:',
        ['1', '1.5', '1.33', '2'],
        '1.33'
    ],
    [
        'The sum of the first \( n \) terms of an arithmetic progression is:',
        ['\( n/2 [a + l] \)', '\( n [a + l]/2 \)', '\( n/2 [a + l] \)', '\( [a + l]/n \)'],
        '\( n/2 [a + l] \)'
    ],
    [
        'What is the solution for \( 2^x = 16 \)?',
        ['2', '3', '4', '5'],
        '4'
    ],
    [
        'If the matrix \( A = \begin{bmatrix} 1 & 2 \\ 3 & 4 \end{bmatrix} \), then \( \text{det}(A) \) is:',
        ['10', '-2', '-2', '6'],
        '-2'
    ],
    [
        'The value of \( \int_0^\pi \sin x \, dx \) is:',
        ['0', '1', '2', '\( \pi \)'],
        '2'
    ],
    [
        'The roots of the equation \( x^2 - 4x + 4 = 0 \) are:',
        ['2, 2', '4, 0', '2, 2', '2, -2'],
        '2, 2'
    ],
    [
        'The derivative of \( f(x) = x^2 \) is:',
        ['\( x^2 \)', '\( 2x \)', '\( 2x \)', '\( x \)'],
        '\( 2x \)'
    ],
    [
        'If \( \log_b (xy) = \log_b x + \log_b y \), this property is called:',
        ['Additive Property', 'Product Property', 'Product Property', 'Quotient Property'],
        'Product Property'
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
    window.location = "maths7.php";
}
</script>
