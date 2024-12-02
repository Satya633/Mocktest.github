<?php
include 'connect.php';

$answers = [1, 1, 3, 2, 4, 1, 1, 2, 2, 1]; // Correct answers

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
    <title>ECET-MOCKTEST/CORE/C/Test-5/Key-paper</title>
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
        <h1>C AND DATA STRUCTURES - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'How many times the following code prints the string "hello".</br>for(i=1;i<=1000;i++);</br>printf("hello");</br>',
        ['1', '1000', '0', 'Syntax error'],
        '0'
    ],
    [
        'What is the following program doing?</br>#include&lt;stdio.h&gt;</br>int main()</br>{</br>int a;</br>a=1,2,3;</br>printf("%d",a);</br>return 0;</br>}',
        ['1', '3', 'Compile Error', 'Run time Error'],
        'Compile Error'
    ],
    [
        'What will be the output of the C program?</br>#include&lt;stdio.h&gt;</br>int main()</br>{</br>char *ptr;</br>char string[]="learn C from 2braces.com";</br>ptr=string;</br>ptr+=6;</br>printf("%s",ptr);</br>return 0;</br>}',
        ['Compilation Error', 'Runtime Error', 'from 2braces.com', 'C from 2braces.com'],
        'from 2braces.com'
    ],
    [
        'Which of the following mode argument is used to truncate in files?',
        ['a', 'w', 'f', 't'],
        'w'
    ],
    [
        'Find the post-order by using the given pre-order and in-order.</br>Inorder Traversal in[] = {4,2,5,1,3,6}</br>Preorder Traversal pre[] = {1,2,4,5,3,6}</br>',
        ['Post-Order post={4,2,5,6,3,1}', 'Post-Order post={2,6,3,4,5,1}', 'Post-Order post={4,5,2,6,1,3}', 'Post-Order post={4,5,2,6,3,1}'],
        'Post-Order post={4,5,2,6,3,1}'
    ],
    [
        'A text file is the one in which the data is stored in',
        ['ASCII code', 'Octal code', 'Binary code', 'Text code'],
        'ASCII code'
    ],
    [
        'Memory efficient Doubly linked list is also called as________',
        ['XOR linked list', 'Circular single linked list', 'NOR linked list', 'single linked list'],
        'XOR linked list'
    ],
    [
        'Which of the following function sets first n characters of a string to a given character___',
        ['strinit()', 'strnset()', 'strset()', 'streset()'],
        'strnset()'
    ],
    [
        'The time complexity of a quick sort algorithm which makes use of median found by an O(n) algorithm as pivot element is________',
        ['O(n^2)', 'O(nlogn)', 'O(nloglogn)', 'O(n)'],
        'O(nlogn)'
    ],
    [
        'What is the corresponding postfix expression for the given infix expression a+b*(c^d-e)^(f+g*h)-i',
        ['abc^de-fg+*^*+i-', 'abcde^-fg*+*^h*+i-', 'abcd^e-fgh*+^*+i-', 'ab^-dc*+ef^gh*+i-'],
        'abcd^e-fgh*+^*+i-'
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
    window.location = "c5.php";
}
</script>
