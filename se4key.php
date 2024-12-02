<?php
include 'connect.php';

$answers = [1, 4, 3, 2, 1, 2, 2, 1, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1954' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/SE/Test-4/Key-paper</title>
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
        <h1>SOFTWARE ENGINEERING - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php
$questionsData = [
    [
        'What does UML stand for?', 
        ['Unified Modeling Language', 'Unified Modeling Language', 'Universal Modeling Language', 'Unified Markup Language'], 
        'Unified Modeling Language'
    ],
    [
        'What is a primary goal of software testing?', 
        ['To find bugs', 'To ensure performance', 'To meet user requirements', 'To ensure software quality'], 
        'To ensure software quality'
    ],
    [
        'What is a characteristic of Agile methodology?', 
        ['Sequential phases', 'Documentation-heavy', 'Iterative development', 'Fixed scope'], 
        'Iterative development'
    ],
    [
        'What is a requirement specification?', 
        ['A detailed description of the software', 'A document that describes the needs of the users', 'A coding guideline', 'A testing plan'], 
        'A document that describes the needs of the users'
    ],
    [
        'Which is NOT a type of cohesion?', 
        ['Temporal Cohesion', 'Functional Cohesion', 'Sequential Cohesion', 'Communicational Cohesion'], 
        'Temporal Cohesion'
    ],
    [
        'What is the primary focus of software engineering?', 
        ['Coding', 'Systematic development of software', 'User interface design', 'Project management'], 
        'Systematic development of software'
    ],
    [
        'What is the main purpose of a software prototype?', 
        ['To test the final product', 'To gather user feedback', 'To replace documentation', 'To define requirements'], 
        'To gather user feedback'
    ],
    [
        'Which is a software development model that allows for the evolution of the software?', 
        ['Incremental Model', 'Waterfall Model', 'V-Model', 'Spiral Model'], 
        'Incremental Model'
    ],
    [
        'What is meant by "technical debt"?', 
        ['Code that is hard to understand', 'Incomplete or suboptimal solutions', 'Outdated technology', 'Excessive documentation'], 
        'Incomplete or suboptimal solutions'
    ],
    [
        'Which model emphasizes customer collaboration?', 
        ['Waterfall Model', 'Agile Model', 'V-Model', 'Spiral Model'], 
        'Agile Model'
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
    window.location = "se4.php";
}
</script>
