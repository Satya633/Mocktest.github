<?php
include 'connect.php';

$answers = [1, 1, 2, 4, 4, 4, 2, 2, 4, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='35' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C++/Test-5/Key-paper</title>
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
        <h1>OOPS THROUGH C++ - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Reuse of an existing class can be done by using_____________.',
        ['Inheritance', 'Polymorphism', 'Abstraction', 'Data Binding'],
        'Inheritance'
    ],
    [
        'The manipulator &lt;&lt;endl has the effect of printing a __________ character.',
        ['\'\n\'', '\'\t\'', '\'\b\'', '\'\v\''],
        '\'\n\''
    ],
    [
        'When delete is used to deallocate memory for a C++ class object, the object\'s _______ is called before the object\'s memory is deallocated.',
        ['Destructor', 'Constructor', 'Base class', 'Child classes'],
        'Destructor'
    ],
    [
        'The loop statement terminated by a semicolon is __________.',
        ['for', 'while', 'do-while', 'switch'],
        'do-while'
    ],
    [
        'Using parentheses() with___________statements in C++ programming is optional.',
        ['exit', 'main', 'clrscr', 'return'],
        'return'
    ],
    [
        'Which of the following statements are true:'
        . '<br>Overloading operators are only for classes<br>'
        . 'Overloaded operators have different syntax from the original operator<br>'
        . 'Only existing operators can be overloaded',
        ['A & B', 'B & C', 'A & C', 'A, B & C'],
        'A, B & C'
    ],
    [
        'When a class is not used for creating objects, it is called as______ class.',
        ['Virtual', 'Base', 'Abstract', 'Friend'],
        'Abstract'
    ],
    [
        'The name of the array is itself a__________________. ',
        ['Object', 'Pointer', 'Variable', 'Reference'],
        'Pointer'
    ],
    [
        'The function that shifts the associated file\'s input file pointer is____________.',
        ['seekp()', 'seekg()', 'tellp()', 'tellg()'],
        'seekg()'
    ],
    [
        'The derived class without pure virtual function is called as___________.',
        ['Abstract class', 'Pure derived class', 'Container class', 'Concrete class'],
        'Concrete class'
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
    window.location = "c++5.php";
}
</script>
