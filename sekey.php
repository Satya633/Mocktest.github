<?php
include 'connect.php';

$answers = [2, 3, 3, 4, 4, 1, 1, 1, 2, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1951' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/SE/Test-1/Key-paper</title>
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
        <h1>SOFTWARE ENGINEERING - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        // Updated questions with the correct format
        $questionsData = [
            [
                'The attributes of good software among the following:', 
                ['a, b, c only', 'b, c, d only', 'a, b, d only', 'a, c, d only'], 
                'b, c, d only'
            ],
            [
                'What does SDLC stand for?', 
                ['System Design Life Cycle', 'Software Design Life Cycle', 'Software Development Life Cycle', 'System Development Life Cycle'], 
                'Software Development Life Cycle'
            ],
            [
                '_________ is a software development life cycle model that is chosen if the development team has less experience on similar projects.', 
                ['Iterative Enhancement Model', 'RAD', 'Spiral', 'Waterfall'], 
                'Spiral'
            ],
            [
                'Which one of the following is not a software process quality?', 
                ['Visibility', 'Timeliness', 'Productivity', 'Portability'], 
                'Portability'
            ],
            [
                'Which of the following documents contains the user system requirements?', 
                ['SRD', 'DDD', 'SDD', 'SRS'], 
                'SRS'
            ],
            [
                'Which of the following testing is also known as white-box testing?', 
                ['Structural testing', 'Error guessing technique', 'Design based testing', 'Integration testing'], 
                'Structural testing'
            ],
            [
                'Cyclomatic complexity is', 
                ['White-box testing', 'Black-box testing', 'Grey-box testing', 'Unit testing'], 
                'White-box testing'
            ],
            [
                'The spiral model was originally proposed by', 
                ['Barry Boehm', 'Pressman', 'Royce', 'Jalote'], 
                'Barry Boehm'
            ],
            [
                '__________ Phase chooses the data structure suitable for the application.', 
                ['Procedural Design', 'Data Design', 'Architectural Design', 'Module Design'], 
                'Data Design'
            ],
            [
                'Design Phase usually follows', 
                ['Top-Down', 'Bottom-Up', 'Random', 'End-End'], 
                'Top-Down'
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
    window.location = "se.php";
}
</script>
