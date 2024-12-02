<?php
include 'connect.php';

$answers = [3, 2, 1, 2, 4, 2, 4, 2, 1, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1953' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/SE/Test-3/Key-paper</title>
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
        <h1>SOFTWARE ENGINEERING - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
            [
                'What is the major drawback of the Spiral Model?', 
                ['Higher amount of risk analysis', 'Strong approval and documentation control', 'Doesn\'t work well for smaller projects', 'Additional functionalities are added later on'], 
                'Doesn\'t work well for smaller projects'
            ],
            [
                'In Software Engineering, "Are we building the product right?" statement refers to', 
                ['Validation', 'Verification', 'Confirmation', 'Justification'], 
                'Verification'
            ],
            [
                'Software Design objective should be', 
                ['Maximum module cohesion and minimize module coupling', 'Minimize module cohesion and maximum module coupling', 'Maximize module cohesion and maximum module coupling', 'Minimize module cohesion and minimize module coupling'], 
                'Maximum module cohesion and minimize module coupling'
            ],
            [
                'In Capability Maturity Model, which one of the following is not a maturity level?', 
                ['Initial', 'Measurable', 'Repeatable', 'Optimized'], 
                'Measurable'
            ],
            [
                'Alpha and Beta testing refers to', 
                ['White Box Testing', 'Black Box Testing', 'System Testing', 'Acceptance Testing'], 
                'Acceptance Testing'
            ],
            [
                'Modules A and B operate on the same input and output then the cohesion', 
                ['Linear Cohesion', 'Communicational Cohesion', 'Temporal Cohesion', 'Random Cohesion'], 
                'Communicational Cohesion'
            ],
            [
                'Regression Testing is mainly associated with', 
                ['Functional Testing', 'Development Testing', 'Dataflow Testing', 'Maintenance Testing'], 
                'Functional Testing'
            ],
            [
                'Basic Path testing is related to', 
                ['System Testing', 'White Box Testing', 'Black Box Testing', 'Unit Testing'], 
                'White Box Testing'
            ],
            [
                'Design Phase usually follows', 
                ['Top-Down', 'Bottom-Up', 'Random', 'End-End'], 
                'Top-Down'
            ],
            [
                'Which of the following is a software process model?', 
                ['Waterfall Model', 'V-Model', 'Incremental Model', 'All of the above'], 
                'Waterfall Model'
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
    window.location = "se3.php";
}
</script>
