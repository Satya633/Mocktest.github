<?php
include 'connect.php';

$answers = [2, 3, 2, 3, 2, 1, 3, 4, 1, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='1012215' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/JAVA/Test-5/Key-paper</title>
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
        <h1>JAVA - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which method of string class in Java is used to convert the boolean into string?',
        ['Public static String valueOf(double I)', 'Public static String valueOf(Boolean I)', 'Public Boolean equals (Object anObject)', 'Public static String valueOf(Object obj)'],
        'Public static String valueOf(Boolean I)'
    ],
    [
        'Which method is called only once during the run time of your applet?',
        ['stop()', 'paint()', 'init()', 'destroy()'],
        'init()'
    ],
    [
        'Which of these exceptions will be thrown if we use null references for an arithmetic operation?',
        ['ArithmeticException', 'NullPointerException', 'IllegalAccessException', 'IllegalOperationException'],
        'NullPointerException'
    ],
    [
        'Which of this method is used to find out that a thread is still running or not?',
        ['run()', 'Alive()', 'isAlive()', 'checkRun()'],
        'isAlive()'
    ],
    [
        'Predict the output of the following Java program:<br><br> class test{<br> int i;<br> }<br> class Main{<br> public static void main(String args[]){<br> test t = new test();<br> System.out.println(t.i);<br> }<br> }<br>',
        ['Garbage value', '0', 'compile time error', 'run time error'],
        '0'
    ],
    [
        'Which of this method of thread class is used to suspend a thread for a period of time?',
        ['Sleep()', 'terminate()', 'suspend()', 'stop()'],
        'Sleep()'
    ],
    [
        'Which is used to store data and partial results, as well as to perform dynamic linking, return values for methods, and dispatch exceptions?',
        ['Window', 'Panel', 'Frame', 'Container'],
        'Frame'
    ],
    [
        'Which of these is a super class of wrappers Double & Integer?',
        ['Long', 'Digits', 'Float', 'Number'],
        'Number'
    ],
    [
        '___________ is a small program that is dynamically downloaded over the web',
        ['Applet', 'Dynamic Program', 'Code chef', 'Snippet'],
        'Applet'
    ],
    [
        'What will be the result of the following Java expression?<br> 4 * 2 - 5 > 4 && 3 < 5 - 3<br>',
        ['FALSE', 'TRUE', '0', '1'],
        'FALSE'
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
    window.location = "java5.php";
}
</script>
