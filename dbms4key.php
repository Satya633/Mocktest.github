<?php
include 'connect.php';

$answers = [3, 2, 2, 2, 1, 3, 1, 4, 4, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='4213194' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DBMS/Test-4/Key-paper</title>
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
        <h1>DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'What is the output of the SQL statement: SELECT SUBSTR(\'Hello World\',2,3) FROM DUAL;',
        ['el', 'e', 'ell', 'Hello'],
        'ell'
    ],
    [
        'Which of the following creates a virtual relation for storing the query?',
        ['Function', 'View', 'Procedure', 'Join'],
        'View'
    ],
    [
        'Wrapping data and its related functionality into a single entity is known as',
        ['Abstraction', 'Encapsulation', 'Polymorphism', 'Modularity'],
        'Encapsulation'
    ],
    [
        'In an E-R diagram, attributes are represented by',
        ['Rectangle', 'Ellipse', 'Square', 'Triangle'],
        'Ellipse'
    ],
    [
        'Which of the following operation is used if we are interested in only certain columns of a table?',
        ['PROJECTION', 'SELECTION', 'UNION', 'JOIN'],
        'PROJECTION'
    ],
    [
        'Which two files are used during the operation of the DBMS?',
        ['Query language and utilities', 'DML and query language', 'Data dictionary and transaction log', 'Data dictionary and query language'],
        'Data dictionary and transaction log'
    ],
    [
        'Consider the join of relation R with relation S. If R has m tuples and S has n tuples, then the maximum size of join would be:',
        ['Mn', 'm+n', '(m+n)/2', '2(m+n)'],
        'Mn'
    ],
    [
        'Tables in second normal form (2NF):',
        ['Eliminate all hidden dependencies', 'Eliminate the possibility of insertion anomalies', 'Have a composite key', 'Have all non-key fields depend on the whole primary key'],
        'Eliminate all hidden dependencies'
    ],
    [
        'Which of the normal forms is based on multivalued dependencies?',
        ['First', 'Second', 'Third', 'Fourth'],
        'Fourth'
    ],
    [
        'A data dictionary is a repository that manages __________',
        ['Memory', 'Metadata', 'Database schema', 'Data Validator'],
        'Metadata'
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
