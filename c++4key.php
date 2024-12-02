<?php
include 'connect.php';

$answers = [1, 1, 2, 4, 4, 4, 2, 2, 4, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='34' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C++/Test-4/Key-paper</title>
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
        <h1>OOPS THROUGH C++ - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which type of constructor doesn\'t take any arguments?',
        ['Default', 'Parameterized', 'Copy constructor', 'Nonargumented'],
        'Default'
    ],
    [
        'Which of the following gets called when an object is being created?',
        ['Constructor', 'Virtual function', 'Destructors', 'Main'],
        'Constructor'
    ],
    [
        'Find the wrong statement about Abstract class in C++',
        ['We can\'t create its object', 'We can\'t create pointers to an abstract class', 'It contains at least one pure virtual function', 'We can create references to an abstract class'],
        'We can\'t create pointers to an abstract class'
    ],
    [
        'In case of inheritance in C++, where both base and derived class are having constructors, when an object of derived class is created then__________',
        ['Constructor of Derived class will be invoked first', 'Constructor of Base class will be invoked first', 'Constructor of Derived class will be executed first followed by Base class', 'Constructor of Base class will be executed first followed by Derived class'],
        'Constructor of Base class will be executed first followed by Derived class'
    ],
    [
        'What is the implicit pointer that is passed as the first argument for a non-static member function in C++?',
        ['\'self\' pointer', 'std::auto_ptr pointer', '\'Myself\' pointer', '\'this\' pointer'],
        '\'this\' pointer'
    ],
    [
        'Which of the following operator can be overloaded in C++?',
        ['?', '::', '.', '=='],
        '=='
    ],
    [
        'What is the output of the following program?'
        . '<br><br>'
        . '#include <iostream.h><br>'
        . 'using namespace std;<br>'
        . 'void main()<br>'
        . '{<br>'
        . 'char *s = "C++";<br>'
        . 'cout << s << " ";<br>'
        . 's++;<br>'
        . 'cout << s << " ";<br>'
        . '}<br><br>',
        ['C++C++', 'C++ ++', '++ ++', 'Compile error'],
        'C++ ++'
    ],
    [
        '__________ is used to write a single character to output file in C++',
        ['cin()', 'put()', 'get()', 'getW()'],
        'put()'
    ],
    [
        'In C++, dynamic memory allocation is done using ________ operator',
        ['calloc()', 'malloc()', 'allocate()', 'new'],
        'new'
    ],
    [
        'Which function is used to perform some action when the object is to be destroyed?',
        ['finalize()', 'delete()', 'main()', 'remove()'],
        'finalize()'
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
    window.location = "c++4.php";
}
</script>
