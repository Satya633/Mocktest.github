<?php
include 'connect.php';

$answers = [2, 3, 4, 3, 1, 2, 2, 3, 4, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='31' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C++/Test-1/Key-paper</title>
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
        <h1>OOPS THROUGH C++ - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Wrapping data and its related functionality into a single entity is known as',
        ['Abstraction', 'Encapsulation', 'Polymorphism', 'Modularity'],
        'Encapsulation'
    ],
    [
        'Which of the following explains polymorphism?',
        ['int func(int,int);float func1(float,float);', 'int func(int);int func(int);', 'int func(float);float func(int,int,char);', 'int func(int);float func(int);'],
        'int func(float);float func(int,int,char);'
    ],
    [
        'Which of the following feature of OOPs is not used in the following C++ code?</br>Class A{</br>int i;</br>public:</br>void print(){cout&lt;&lt;"hello"&lt;&lt;i;}</br>}</br>class B: public A{</br>int j;</br>public:</br>void assign(int a ){j=a;}</br>}',
        ['Abstraction', 'Encapsulation', 'Inheritance', 'Polymorphism'],
        'Polymorphism'
    ],
    [
        'In C++, Whenever a class contains two constructors, the constructors are',
        ['default constructors', 'destructors', 'Overloaded', 'Static'],
        'Overloaded'
    ],
    [
        'Which of the following is not a type of Constructor?',
        ['Friend Constructor', 'Copy Constructor', 'Default constructor', 'Parameterized Constructor'],
        'Friend Constructor'
    ],
    [
        'What is the output of the code below?</br>#include&lt;iostream&gt;</br>using namespace std;</br>class point{ </br>private:</br>int X;</br>int Y;</br>public:</br>Point(int i,int j);//constructor</br>};</br>Point::Point(int i=0,int j=0){</br>x=i;</br>y=j;</br>cout&lt;&lt;"Constructor called";</br>}</br>int main()</br>{</br>Point t1, *t2;</br>return 0;</br>}',
        ['Constructor called Constructor called', 'Constructor called', 'Garbage value', 'error'],
        'Constructor called'
    ],
    [
        'Which of the following is correct?',
        ['Base class pointer object cannot point to a derived class object', 'Derived class pointer object cannot point to a base class object', 'A derived class cannot have pointer objects', 'A base class cannot have pointer objects'],
        'Derived class pointer object cannot point to a base class object'
    ],
    [
        'Which of the following cannot be friend?',
        ['Function', 'Class', 'Object', 'Operator function'],
        'Object'
    ],
    [
        'How run-time polymorphisms are implemented in C++?',
        ['Using Inheritance', 'Using Virtual functions', 'Using Templates', 'Using Inheritance and Virtual functions'],
        'Using Inheritance and Virtual functions'
    ],
    [
        'Which of the following is an abstract data type?',
        ['int', 'string', 'class', 'float'],
        'class'
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
    window.location = "c++.php";
}
</script>
