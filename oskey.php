<?php
include 'connect.php';

$answers = [3, 1, 3, 3, 2, 2, 1, 1, 3, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='15191' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/OS/Test-1/Key-paper</title>
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
        <h1>OPERATING SYSTEM - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Information about a process is maintained in a_________.', 
        ['Stack', 'Translation Look aside Buffer', 'Process Control Block', 'Program Control Block'], 
        'Process Control Block'
    ],
    [
        'Which of the following is crucial time while accessing data on the disk?', 
        ['Seek time', 'Rotational time', 'Transmission time', 'Waiting time'], 
        'Seek time'
    ],
    [
        'An optimal scheduling algorithm in terms of minimizing the average waiting time of a given set of process is ___________', 
        ['FCFS scheduling algorithm', 'Round robin scheduling algorithm', 'Shortest job-first scheduling algorithm', 'Priority scheduling algorithm'], 
        'Shortest job-first scheduling algorithm'
    ],
    [
        'Virtual memory is implemented using', 
        ['Segmentation', 'Swapping', 'Demand paging', 'Combining all physical memories'], 
        'Demand paging'
    ],
    [
        'Inter process communication can be done through______________.', 
        ['Mails', 'Message passing', 'System calls', 'Traps'], 
        'Message passing'
    ],
    [
        'The primary job of the operating system of a computer is to______________.', 
        ['Command Resources', 'Manage Resource', 'Provide Utilities', 'Be user friendly'], 
        'Manage Resource'
    ],
    [
        'Paging__________.', 
        ['Solves the memory fragmentation problem', 'Allows modular programming', 'Allows structured programming', 'Avoids deadlock'], 
        'Solves the memory fragmentation problem'
    ],
    [
        'Mutual exclusion', 
        ['denotes that one process is in critical reason when others are excluded', 'Prevents deadlock', 'Cannot be implemented using Semaphores', 'Is found only in the Windows NT operating system'], 
        'denotes that one process is in critical reason when others are excluded'
    ],
    [
        'Semaphore can be used for solving', 
        ['Wait & signal', 'Deadlock', 'Synchronization', 'Priority'], 
        'Synchronization'
    ],
    [
        'What is a shell?', 
        ['It is a hardware component', 'It is a command interpreter', 'It is a part in compiler', 'It is a tool in CPU scheduling'], 
        'It is a command interpreter'
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
    window.location = "os.php";
}
</script>
