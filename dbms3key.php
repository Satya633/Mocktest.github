<?php
include 'connect.php';

$answers = [1, 3, 4, 3, 1, 2, 3, 2, 1, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='4213193' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DBMS/Test-3/Key-paper</title>
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
        <h1>DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        '__________ is used to remove a relation from an SQL.',
        ['Drop', 'Collapse', 'Delete', 'Remove'],
        'Drop'
    ],
    [
        '_________ concept indicates giving multiple forms to an entity.',
        ['Encapsulation', 'Abstraction', 'Polymorphism', 'Inheritance'],
        'Polymorphism'
    ],
    [
        'Acquiring the properties of one entity to another entity is called____________',
        ['Encapsulation', 'Abstraction', 'Polymorphism', 'Inheritance'],
        'Inheritance'
    ],
    [
        'Consider a relation R(A,B,C,D,E,F) with the functional Dependencies F={ {A,C}→{D,E},{A,D,F}→{B,C}}. Which among the following is a trivial FD from F⁺ which is the closure of F?',
        ['{A,C}→{D,E}', '{A,C}→{C,E}', '{A,D}→{D}', '{A,D,F}→{B}'],
        '{A,D,F}→{B}'
    ],
    [
        'Which of the following conditions is satisfied in a 2NF table?',
        ['Eliminate all partial dependencies', 'Eliminate the possibility of insertion anomalies', 'Have a composite key', 'Have all non-key fields depend on the whole primary key'],
        'Eliminate all partial dependencies'
    ],
    [
        'The process of properly defining tables to provide flexibility, minimized redundancy, and data integrity is called__________',
        ['Database Design', 'Data Normalization', 'Data Rationalize', 'Data Standardization'],
        'Data Normalization'
    ],
    [
        'Which SQL query can be used to find out the number of values in a column?',
        ['TOTAL', 'SUM', 'COUNT', 'ADD'],
        'COUNT'
    ],
    [
        'A relationship between two tables can be created using which of the following?',
        ['Primary Key', 'Foreign Key', 'Candidate Key', 'Relation Key'],
        'Foreign Key'
    ],
    [
        'A many-to-many relationship between two entities usually results in how many tables?',
        ['3', '2', '1', '4'],
        '3'
    ],
    [
        'What does the Atomicity property signify?',
        ['A transaction always takes place', 'The entire transaction takes place at once or doesn\'t happen at all', 'Only insertion takes place in a table', 'Once a transaction takes place, it\'s permanent'],
        'The entire transaction takes place at once or doesn\'t happen at all'
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
    window.location = "dbms3.php";
}
</script>
