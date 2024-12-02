<?php
include 'connect.php';

$answers = [4, 4, 2, 1, 1, 4, 2, 3, 1, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='33' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C++/Test-3/Key-paper</title>
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
        <h1>OOPS THROUGH C++ - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which of the following method is invoked by garbage collector implicitly?',
        ['Destructor', 'Constructor', 'Finally', 'Finalize'],
        'Destructor'
    ],
    [
        'The programming language that has the ability to create new data types is called __________.',
        ['Overloaded', 'Encapsulated', 'Reprehensible', 'Extensible'],
        'Extensible'
    ],
    [
        'Which of the following statements is correct about the formal parameters in C++?',
        ['Parameters with which functions are called', 'Parameters which are used in the definition of the function', 'Variables other than passed parameters in function', 'Variables that are never used in the function'],
        'Parameters which are used in the definition of the function'
    ],
    [
        'Inheritance in C++ has default access specifier as',
        ['Private', 'Public', 'Protected', 'Default'],
        'Private'
    ],
    [
        'What function initializes variables in a class?',
        ['Constructor', 'Destructor', 'Static', 'Friend'],
        'Constructor'
    ],
    [
        'Which of the following statements is correct about virtual inheritance?',
        ['It is a technique to ensure that a private member of a base class can be accessed', 'It is a technique to optimize the multiple inheritance', 'It is a technique to avoid the multiple inheritances of the class', 'It is a C++ technique to avoid multiple copies of the base class into the derived or child classes'],
        'It is a C++ technique to avoid multiple copies of the base class into the derived or child classes'
    ],
    [
        'Which of the following is not true about polymorphism?',
        ['Helps in redefining the same functionality', 'Increase overhead of function definition always', 'It is a feature of OOP', 'Ease in readability of program'],
        'Increase overhead of function definition always'
    ],
    [
        'The object of the class can be created in any function when a constructor is defined with this access specifier',
        ['Any access specifier', 'Private', 'Public', 'Protected'],
        'Public'
    ],
    [
        'Which feature of the OOP reduces the use of the nested classes?',
        ['Inheritance', 'Binding', 'Abstraction', 'Encapsulation'],
        'Inheritance'
    ],
    [
        'Which feature of OOP is exhibited by the function overriding?',
        ['Polymorphism', 'Encapsulation', 'Abstraction', 'Inheritance'],
        'Polymorphism'
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
    window.location = "c++3.php";
}
</script>
