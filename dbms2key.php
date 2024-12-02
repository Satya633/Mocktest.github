<?php
include 'connect.php';

$answers = [4, 2, 1, 1, 1, 1, 3, 3, 4, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='4213192' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DBMS/Test-2/Key-paper</title>
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
        <h1>DATA BASE MANAGEMENT SYSTEM(DBMS) - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'The programming language that has the ability to create new data types is called',
        ['Overloaded', 'Encapsulated', 'Reprehensible', 'Extensible'],
        'Extensible'
    ],
    [
        'RDBMS stores data in ___________ format.',
        ['File', 'Table', 'Matrix', 'Tuples'],
        'File'
    ],
    [
        'Which of the following query lists the "number of students in each district is"',
        ['SELECT COUNT(Student ID),District FROM Students GROUP BY District', 
         'SELECT COUNT(Student ID),District FROM Students ORDER BY District', 
         'SELECT Student ID,District FROM Students GROUP BY District', 
         'SELECT COUNT(Student ID),District FROM Students'],
        'SELECT COUNT(Student ID),District FROM Students GROUP BY District'
    ],
    [
        '_______ Key is used to link two tables together.',
        ['Foreign', 'Primary', 'Secondary', 'Join'],
        'Foreign'
    ],
    [
        '_________ is used to organize tables in a manner that reduces redundancy.',
        ['Normalization', 'Join', 'Delete', 'Update Normalization'],
        'Normalization'
    ],
    [
        '________ key can contain unique and not null values in relational database',
        ['Primary', 'Check', 'Unique', 'Integrity'],
        'Primary'
    ],
    [
        '____________ Language changes the structure of the table through create, alter, drop operations.',
        ['Data Control', 'Data Manipulation', 'Data Definition', 'Data Query'],
        'Data Definition'
    ],
    [
        '_________ is not a scalar data type in PL/SQL.',
        ['VARCHAR2', 'DATE', 'RECORD', 'NUMBER'],
        'RECORD'
    ],
    [
        'What is the maximum number of triggers you can apply on a single table?',
        ['5', '8', '10', '12'],
        '12'
    ],
    [
        '_________ database stores data in documents',
        ['PostgreSQL', 'SQL', 'NoSQL', 'PL/SQL'],
        'NoSQL'
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
    window.location = "dbms2.php";
}
</script>
