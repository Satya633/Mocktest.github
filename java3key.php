<?php
include 'connect.php';

$answers = [4, 2, 2, 4, 4, 3, 2, 2, 2, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1012213' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/JAVA/Test-3/Key-paper</title>
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
        <h1>JAVA - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which of the following are not keywords in Java?',
        ['Int', 'Static', 'Final', 'Virtual'],
        'Virtual'
    ],
    [
        '_________ keyword signifies the property that the value of the variable cannot be changed',
        ['static', 'final', 'public', 'volatile'],
        'final'
    ],
    [
        'Which of the following does not have a superclass?',
        ['System', 'Object', 'Integer', 'Exception'],
        'Object'
    ],
    [
        '____________ event will be notified when the scroll bar is manipulated',
        ['Action event', 'Item event', 'Window event', 'Adjustment event'],
        'Adjustment event'
    ],
    [
        'Scanner class is available in ____________ package',
        ['java.io', 'java.net', 'java.lang', 'java.util'],
        'java.util'
    ],
    [
        '_________ method is used to initialize a thread execution',
        ['Resume', 'Run', 'Start', 'Init'],
        'Start'
    ],
    [
        'Which one of the following is not an access modifier in Java?',
        ['Protected', 'Void', 'Public', 'Private'],
        'Void'
    ],
    [
        '___________ method compares the string objects in Java',
        ['compare', 'Compare To', 'equalsTo', 'Similar'],
        'Compare To'
    ],
    [
        'Which of the following is serializable?',
        ['Interface', 'Class', 'Object', 'Exception'],
        'Interface'
    ],
    [
        'What is the environment variable that contains a list of directories where Java looks for classes referenced in a program?',
        ['Path class', 'Search path', 'Path dir', 'Class path'],
        'Class path'
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
    window.location = "java3.php";
}
</script>
