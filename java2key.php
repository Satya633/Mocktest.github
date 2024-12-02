<?php
include 'connect.php';

$answers = [1, 4, 3, 4, 3, 1, 1, 4, 4, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1012212' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/JAVA/Test-2/Key-paper</title>
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
        <h1>JAVA - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which of the following option leads to the portability and security of Java?',
        ['Bytecode is executed by JVM', 'The applet makes the java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects'],
        'Bytecode is executed by JVM'
    ],
    [
        'Evaluate the following Java expression, if x=3, y=5, and z=10: ++z + y - y + z + x++',
        ['20', '23', '24', '25'],
        '25'
    ],
    [
        'When we create a string using a new operator in Java, in which memory is this string stored?',
        ['Stack', 'String memory', 'Heap memory', 'Random storage space'],
        'Heap memory'
    ],
    [
        'Which of the following modifiers can be used for a variable so that it can be accessed by any thread or a part of a program?',
        ['global', 'transient', 'default', 'volatile'],
        'volatile'
    ],
    [
        'Which of these methods can be used to make the main thread to be executed last among all the threads?',
        ['stop()', 'sleep()', 'join()', 'call()'],
        'sleep()'
    ],
    [
        'Which method can be defined only once in a program?',
        ['main method', 'finalize method', 'static method', 'private method'],
        'main method'
    ],
    [
        'Which of these packages contains the exception stack overflow in Java?',
        ['java.lang', 'java.util', 'java.io', 'java.system'],
        'java.lang'
    ],
    [
        'Which of these keywords can be used to prevent method overriding?',
        ['Static', 'Constant', 'Protected', 'Final'],
        'Final'
    ],
    [
        'Which of these keywords must be used to inherit a class?',
        ['Super', 'This', 'Extent', 'Extends'],
        'Extends'
    ],
    [
        'Which component is used to compile, debug, and execute the Java program?',
        ['JVM', 'JDK', 'JRE', 'JIT'],
        'JDK'
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
    window.location = "java2.php";
}
</script>
