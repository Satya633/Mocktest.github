<?php
include 'connect.php';

$answers = [1, 3, 1, 4, 2, 3, 2, 1, 1, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1012211' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/JAVA/Test-1/Key-paper</title>
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
        <h1>JAVA - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'What is the output of the following code?'
        . '<br>public class Solution{<br>public static void main(String[] args){<br>byte X=127;<br>X++;<br>X++;<br>System.out.print(X);<br>}<br>}',
        ['-127', '2', '127', '129'],
        '-127'
    ],
    [
        'Which of the following is a correct way to declare arrays in java?',
        ['int[10] a = new int[];', 'int[] a = new int(10);', 'int [] a = new int[10];', 'int a[] = new int{10};'],
        'int [] a = new int[10];'
    ],
    [
        'When an array is passed to a method in Java, what does the method receive?',
        ['A reference to the array', 'The length of the array', 'A copy of the array', 'A copy of the first element of the array'],
        'A reference to the array'
    ],
    [
        'What is the output of the following code?'
        . '<br>public class Solution{<br>public static void main(String[] args){<br>short X=10;<br>X=X*5;<br>System.out.print(X);<br>}<br>}',
        ['50', '0', 'Exception', 'Compile error'],
        'Compile error'
    ],
    [
        'Identify the keyword among the following that makes a variable belong to a class, rather than being defined for each instance of the class',
        ['private', 'static', 'volatile', 'final'],
        'static'
    ],
    [
        'Identify what can directly access and change the value of the variable X.<br>'
        . 'Package com.mypackage;<br>Public class Solution{<br>Private int X = 100;<br>}',
        ['Any class', 'Any child class of Solution class', 'Any method of Solution class', 'Any class in the package com.mypackage'],
        'Any method of Solution class'
    ],
    [
        'Where is the toString() method defined?',
        ['java.lang.String', 'java.lang.Object', 'java.util', 'java.lang.util'],
        'java.lang.Object'
    ],
    [
        'Identify the output of the following program.<br>'
        . 'String str="abcde";<br>System.out.println(str.substring(1,3));',
        ['bc', 'abc', 'cd', 'bcd'],
        'bc'
    ],
    [
        'When is finalize() invoked in Java?',
        ['Just before an object is garbage collected', 'Just before an object goes out of scope', 'Just before a variable goes out of scope', 'Just before the program completes the execution'],
        'Just before an object is garbage collected'
    ],
    [
        'What is the output of the below code?<br>'
        . 'public class ThreadTest extends Thread{<br>public void run(){<br>System.out.println("In Run");<br>yield();<br>System.out.println("Leaving run");<br>}<br>public static void main(String[] argv)<br>{<br>(new ThreadTest()).start();<br>}<br>}',
        ['Compilation error in main()', 'Compilation error in run()', 'In run', 'In run  & Leaving Run'],
        'In run  & Leaving Run'
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
    window.location = "java.php";
}
</script>
