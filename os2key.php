<?php
include 'connect.php';

$answers = [1, 4, 1, 3, 3, 1, 2, 3, 3, 4]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='15192' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/OS/Test-2/Key-paper</title>
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
        <h1>OPERATING SYSTEM - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'A page fault occurs', 
        ['When the page is not in the memory', 'When the page is in the memory', 'When the process enters the blocked state', 'When the process is in the ready state'], 
        'When the page is not in the memory'
    ],
    [
        'A process said to be in _______state if it was waiting for an event that will never occur', 
        ['Safe', 'Unsafe', 'Starvation', 'Dead lock'], 
        'Dead lock'
    ],
    [
        '____________program loads the operating system and initializes all aspects of system.', 
        ['Boot strap loader', 'Init', 'Kernal', 'Micro kernal'], 
        'Kernal'
    ],
    [
        'Software may trigger an interrupt by executing a special operation called__________', 
        ['Event Handling', 'Interrupt Servicing', 'System call', 'Loader'], 
        'System call'
    ],
    [
        'Which is not the state of a process?', 
        ['Running', 'Waiting', 'Killed', 'Ready'], 
        'Killed'
    ],
    [
        '_____________time is the interval from the time of submission of a process to the time of completion', 
        ['Turn around', 'Waiting', 'Execution', 'Running'], 
        'Turn around'
    ],
    [
        '___________CPU scheduling algorithm suffers from starvation.', 
        ['FCFS', 'Priority', 'Time sharing', 'Round robin'], 
        'Priority'
    ],
    [
        'Operations of semaphore are ______________', 
        ['Add and sub', 'Push and Pull', 'Wait and signal', 'Hold and Wait'], 
        'Wait and signal'
    ],
    [
        'The purpose of bank\'s algorithm is_______________', 
        ['Deadlock Recovery', 'Deadlock Prevention', 'Deadlock Avoidance', 'No preemption'], 
        'Deadlock Avoidance'
    ],
    [
        'Which of the memory allocation scheme is faster?', 
        ['Best fit', 'Worst fit', 'Paging', 'First fit'], 
        'First fit'
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
    window.location = "os2.php";
}
</script>
