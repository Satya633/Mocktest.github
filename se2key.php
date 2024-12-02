<?php
include 'connect.php';

$answers = [2, 3, 3, 3, 2, 2, 2, 2, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1952' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/SE/Test-2/Key-paper</title>
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
        <h1>SOFTWARE ENGINEERING - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
            [
                'Which of the following is a non-functional requirement?', 
                ['Usability', 'Performance', 'Functionality', 'Reliability'], 
                'Performance'
            ],
            [
                'Which of the following is NOT a software development phase?', 
                ['Implementation', 'Maintenance', 'Design Review', 'Testing'], 
                'Design Review'
            ],
            [
                'Which type of testing checks system interactions?', 
                ['Unit Testing', 'Functional Testing', 'Integration Testing', 'Regression Testing'], 
                'Integration Testing'
            ],
            [
                'What is a feature of the Waterfall Model?', 
                ['Iterative process', 'Phased approach', 'Linear sequence', 'Customer involvement'], 
                'Linear sequence'
            ],
            [
                'Which testing method is used to check individual components?', 
                ['Integration Testing', 'Unit Testing', 'System Testing', 'Acceptance Testing'], 
                'Unit Testing'
            ],
            [
                'What is a use case?', 
                ['A type of testing', 'A description of a system’s behavior', 'A software prototype', 'A project management tool'], 
                'A description of a system’s behavior'
            ],
            [
                'What does the acronym SDLC stand for?', 
                ['System Development Life Cycle', 'Software Development Life Cycle', 'System Design Life Cycle', 'Software Design Life Code'], 
                'Software Development Life Cycle'
            ],
            [
                'What is the main purpose of requirements gathering?', 
                ['To write code', 'To understand user needs', 'To test software', 'To manage the team'], 
                'To understand user needs'
            ],
            [
                'Which of the following is a type of black box testing?', 
                ['White Box Testing', 'Functional Testing', 'Unit Testing', 'Integration Testing'], 
                'Functional Testing'
            ],
            [
                'What is the purpose of a code review?', 
                ['To write documentation', 'To improve code quality', 'To fix bugs', 'To speed up development'], 
                'To improve code quality'
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
    window.location = "se2.php";
}
</script>
