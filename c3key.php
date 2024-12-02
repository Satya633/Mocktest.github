<?php
include 'connect.php';

$answers = [2, 3, 1, 3, 4, 1, 2, 3, 1, 1]; // Correct answers

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
    <title>ECET-MOCKTEST/CORE/C/Test-3/Key-paper</title>
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
        <h1>C AND DATA STRUCTURES - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Where is the return address from an interrupt-service routine stored?',
        ['Heap', 'Stack', 'Queue', 'Program counter'],
        'Stack'
    ],
    [
        'What is the output of the C program?</br>#include<stdio.h></br>int main()</br>{</br>printf("main");</br>main();</br>return 0;</br>}',
        ['Compile error', 'main', 'mainmainmainmainmainmain.......(prints until stack overflow)', 'Runtime error'],
        'mainmainmainmainmainmain.......(prints until stack overflow)'
    ],
    [
        'What is the output of the C program?</br>#include<stdio.h></br>int main()</br>{</br>int v=5;</br>v=!v>6;</br>}',
        ['0', '1', '5', '6'],
        '0'
    ],
    [
        'Linked lists are not suitable for the implementation of',
        ['Insertion sort', 'Radix sort', 'Binary search', 'Polynomial manipulation'],
        'Binary search'
    ],
    [
        'Let A be an Array. How do you access the 3rd element using pointers?',
        ['*A+2', '*(*A+2)', '&(A+2)', '*(A+2)'],
        '*(A+2)'
    ],
    [
        'What is the disadvantage of array data structures?',
        ['Static memory allocation', 'Dynamic memory allocation', 'Accessing elements in constant time', 'Index starting at 0'],
        'Static memory allocation'
    ],
    [
        'When a pop() operation is called on an empty queue, what is the condition called?',
        ['Overflow', 'Underflow', 'Syntax error', 'Garbage value'],
        'Underflow'
    ],
    [
        'What is a complete binary tree?',
        ['Each node has exactly zero or two children', 'A tree in which all nodes have degree 2', 'A binary tree, which is completely filled with the possible exception of the bottom level, which is filled from left to right', 'A binary tree, which is completely filled with the possible exception of the bottom level, which is filled from right to left'],
        'A binary tree, which is completely filled with the possible exception of the bottom level, which is filled from left to right'
    ],
    [
        'If the height of a tree with a single node is considered as 1, what is the maximum number of nodes in a binary tree of height 5?',
        ['31', '7', '13', '15'],
        '31'
    ],
    [
        'What is the drawback of a Linked list?',
        ['Random access is not possible in a linked list', 'Memory is not wasted as no pre-allocation is done', 'Insertion operation complexity', 'Deletion operation complexity'],
        'Random access is not possible in a linked list'
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
    window.location = "c3.php";
}
</script>
