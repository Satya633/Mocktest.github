<?php
include 'connect.php';

$answers = [1, 3, 3, 1, 1, 2, 4, 3, 2, 2]; // Correct answers

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
    <title>ECET-MOCKTEST/CORE/C/Test-4/Key-paper</title>
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
        <h1>C AND DATA STRUCTURES - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'Which sorting algorithm has the worst-case time complexity of O(n^2) while other cases time complexity are much better than the worst case?',
        ['Quick sort', 'Merge sort', 'Insertion sort', 'Selection sort'],
        'Insertion sort'
    ],
    [
        'What is the following program doing?</br>main()</br>{</br>int d=1;</br>do</br>printf("%d\n",d++)</br>while(d<=9);</br>}',
        ['Adding 9 integers', 'Adding integers from 1 to 9', 'Displaying integers from 1 to 9', 'Adding integers from 1 to 10'],
        'Displaying integers from 1 to 9'
    ],
    [
        'The output of the following statements is</br>char ch[6] = {\'E\',\'n\',\'d\',\'\\0\',\'p\'};</br>printf("%s",ch);',
        ['Endp', 'End0', 'End', 'Error'],
        'End'
    ],
    [
        'What is the output of the following program?</br>main()</br>{</br>int i = 4, z = 12;</br>if(i = 5 || z > 50)</br>printf("Hello");</br>else</br>printf("Hi")</br>}',
        ['Hello', 'Hi', 'Syntax error', 'HelloHi'],
        'Hello'
    ],
    [
        'An infix expression can be converted to a postfix expression using a ___________',
        ['stack', 'queue', 'dequeue', 'tree'],
        'stack'
    ],
    [
        'A sorted file contains 16 items. Using binary search, the maximum number of comparisons to search for an item in this file is',
        ['15', '4', '8', '1'],
        '4'
    ],
    [
        'If the In-order and pre-order traversal of a binary tree are D,B,F,E,G,H,A,C and A,B,D,E,F,G,H,C respectively, then the post-order traversal of that tree is',
        ['D,F,G,A,B,C,H,E', 'F,H,D,G,E,B,C,A', 'C,G,H,F,E,D,B,A', 'D,F,H,G,E,B,C,A'],
        'D,F,H,G,E,B,C,A'
    ],
    [
        'How many distinct binary search trees can be formed which contain the integers 1,2,3?',
        ['3', '4', '5', '6'],
        '5'
    ],
    [
        'The number of comparisons required to sort 5 numbers in ascending order using bubble sort is',
        ['5', '10', '6', '7'],
        '10'
    ],
    [
        'Which sorting algorithm is the best if the list is already in order?',
        ['Quick sort', 'Insertion sort', 'Merge sort', 'Heap sort'],
        'Insertion sort'
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
    window.location = "c4.php";
}
</script>
