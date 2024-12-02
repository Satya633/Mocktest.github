<?php
include 'connect.php';

$answers = [2, 1, 2, 1, 4, 2, 1, 1, 2, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='4213191' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DBMS/Test-1/Key-paper</title>
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
        <h1>DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'The database environment has all of the following components except',
        ['Users', 'Separate files', 'Database', 'Database administration'],
        'Separate files'
    ],
    [
        'Normalization of database is used to',
        ['Eliminate redundancy', 'Improve security', 'Improve efficiency', 'Minimize errors'],
        'Eliminate redundancy'
    ],
    [
        'E-R modelling technique is a',
        ['Bottom up approach', 'Top down approach', 'Left Right approach', 'Right Left approach'],
        'Top down approach'
    ],
    [
        'Which SQL keyword is used to sort the result?',
        ['ORDER BY', 'SORT-ORDER', 'SORT', 'ORDER'],
        'ORDER BY'
    ],
    [
        'Which normal form is adequate for normal relational database design',
        ['1NF', '5NF', '4NF', '3NF'],
        '3NF'
    ],
    [
        'Which of the following is not a characteristics of a relational database model?',
        ['Table', 'Treelike structure', 'Complex Logical relationships', 'Records'],
        'Treelike structure'
    ],
    [
        'Data items grouped together for storage purpose are called a',
        ['Record', 'Title list', 'List', 'String'],
        'Record'
    ],
    [
        'The entity relationship model comes under',
        ['Object based logical model', 'Record based logical model', 'Physical data model', 'Grid based logical model'],
        'Object based logical model'
    ],
    [
        'A command that lets you change one or more fields in a record is',
        ['INSERT', 'MODIFY', 'LOOK UP', 'CHANGE'],
        'MODIFY'
    ],
    [
        'A file manipulation command that extracts some of the records from a file is called',
        ['SELECT', 'PROJECT', 'JOIN', 'INDEX'],
        'SELECT'
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
    window.location = "dbms.php";
}
</script>
