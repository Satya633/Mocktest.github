<?php
include 'connect.php';

$answers = [2, 1, 1, 3, 4, 4, 1, 3, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='32' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C++/Test-2/Key-paper</title>
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
        <h1>OOPS THROUGH C++ - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'How can one implement the run-time polymorphism in the c++ programming language?',
        ['By using the Template', 'By using both the virtual functions and inheritance', 'By using the concepts of inheritance', 'By using only the virtual functions'],
        'By using both the virtual functions and inheritance'
    ],
    [
        'Which of the following refers to using the existing code instead of rewriting it?',
        ['Inheritance', 'Encapsulation', 'Abstraction', 'Polymorphism'],
        'Inheritance'
    ],
    [
        'If class C is derived from class B, which is derived from class A, all through public inheritance, then class C member function can access',
        ['Protected data in A and B', 'Protected and public data only in C and B', 'Private data in A and B', 'Protected and public data only in C'],
        'Protected data in A and B'
    ],
    [
        'Which is the correct statement about pure virtual functions?',
        ['They should be defined inside a base class', 'Pure keyword should be used to declare a pure virtual function', 'Pure virtual function is implemented in derived classes', 'Pure virtual function cannot be implemented in derived classes'],
        'Pure virtual function is implemented in derived classes'
    ],
    [
        'Which of the following operator cannot be used to overload when that function is declared as a friend function?',
        ['-=', '||', '==', '[]'],
        '[]'
    ],
    [
        'Which of the following gives the memory address of the first element in an array?',
        ['array[0];', 'array[1];', 'array(1);', 'array;'],
        'array;'
    ],
    [
        'What is a friend function in c++?',
        ['A function that can access all the private, protected and public members of a class', 'A function that is not allowed to access any member of any class', 'A function that is allowed to access public and protected members of a class', 'A function that is allowed to access public and protected members of a class'],
        'A function that can access all the private, protected and public members of a class'
    ],
    [
        'Which of the following cannot be used with the virtual keyword?',
        ['Class', 'Member functions', 'Constructors', 'Destructors'],
        'Constructors'
    ],
    [
        'What happens if a class does not have a name?',
        ['It will not have a constructor', 'It will not have a destructor', 'It is not allowed', 'It will neither have a constructor nor a destructor'],
        'It is not allowed'
    ],
    [
        'Which of the following is not a type of inheritance?',
        ['Multiple', 'Multilevel', 'Distributive', 'Hierarchical'],
        'Distributive'
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
    window.location = "c++2.php";
}
</script>
