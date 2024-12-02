<?php
include 'connect.php';

$answers = [1, 1, 2, 3, 4, 4, 1, 1, 3, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='4213195' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DBMS/Test-5/Key-paper</title>
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
        <h1>DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'In DBMS, values of one type can be converted to another domain using which of the following?',
        ['Cast', 'Drop type', 'Alter type', 'Convert'],
        'Cast'
    ],
    [
        'Which one of the following provides the ability to query information from the database and to insert tuples into, delete tuples from and modify tuples in the database?',
        ['DML', 'DDL', 'Query', 'Relational Schema'],
        'Query'
    ],
    [
        'Which of the following creates a virtual relation for storing the query?',
        ['Function', 'View', 'Procedure', 'Triggers'],
        'View'
    ],
    [
        'Data integrity constraints are used to:',
        ['Control who is allowed access to the data', 'Ensure that duplicate records are not entered into the table', 'Improve the quality of data entered for a specific property', 'Prevent users from changing the values stored in the table'],
        'Improve the quality of data entered for a specific property'
    ],
    [
        'Database ___________ is the logical design of the database and database ___________ is a snapshot of the data in the database at a given instant of time',
        ['Instance, schema', 'Relation, Schema', 'Relation, Domain', 'Schema, Instance'],
        'Schema, Instance'
    ],
    [
        'We indicate roles in E-R diagrams by labelling the lines that connect __________ to __________',
        ['Diamond, diamond', 'Rectangle, diamond', 'Rectangle, rectangle', 'Diamond, rectangle'],
        'Diamond, rectangle'
    ],
    [
        'If we want to retain all duplicates, we must write _____ in place of union.',
        ['Union all', 'Union some', 'Intersect all', 'Intersect some'],
        'Union all'
    ],
    [
        'Using which of the following can a user request information from a database?',
        ['Query', 'Relation', 'Structure', 'Compiler'],
        'Query'
    ],
    [
        '______________ is a set of one or more attributes taken collectively to uniquely identify a record.',
        ['Primary Key', 'Foreign Key', 'Super Key', 'Candidate Key'],
        'Super Key'
    ],
    [
        'Which forms have a relation that contains information about a single entity?',
        ['4NF', '2NF', '5NF', '3NF'],
        '4NF'
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
    window.location = "dbms4.php";
}
</script>
