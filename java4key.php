<?php
include 'connect.php';

$answers = [4, 1, 3, 2, 4, 3, 1, 2, 4, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1012214' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/JAVA/Test-4/Key-paper</title>
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
        <h1>JAVA - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'The final block is executed in Java',
        ['Only when a checked exception is thrown', 'Only when an unchecked exception is thrown', 'Only when an exception is thrown', 'Irrespective of whether an exception is thrown or not'],
        'Irrespective of whether an exception is thrown or not'
    ],
    [
        'The number of bytes needed to store a number which is a data type double is',
        ['8', '4', '2', '1'],
        '8'
    ],
    [
        'Which component is used to compile, debug and execute the Java programs?',
        ['JRE', 'JIT', 'JDK', 'JVM'],
        'JDK'
    ],
    [
        'What is truncation in Java?',
        ['Floating-point value assigned to a floating type', 'Floating-point value assigned to an integer type', 'Integer value assigned to floating type', 'Integer value assigned to integer type'],
        'Floating-point value assigned to an integer type'
    ],
    [
        'What of these are selection statements in Java?',
        ['break', 'continue', 'for()', 'if()'],
        'if()'
    ],
    [
        'Which of these packages contain the exception stack overflow in Java?',
        ['java.io', 'java.system', 'java.lang', 'java.util'],
        'java.lang'
    ],
    [
        'Which one of the following options leads to the portability and security of Java?',
        ['Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects'],
        'Bytecode is executed by JVM'
    ],
    [
        'What is the return type of the hashCode() method in the Object class?',
        ['Object', 'int', 'long', 'void'],
        'int'
    ],
    [
        'Evaluate the following Java expression, if x=3, y=5 and z=10: ++z+y-y+z+x++',
        ['24', '23', '20', '25'],
        '25'
    ],
    [
        'Which of these classes is the superclass of every class in Java?',
        ['String class', 'Object class', 'Abstract class', 'Array List class'],
        'Object class'
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
    window.location = "java4.php";
}
</script>
