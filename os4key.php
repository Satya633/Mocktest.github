<?php
include 'connect.php';

$answers = [2, 1, 3, 2, 3, 1, 3, 1, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='15194' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/OS/Test-4/Key-paper</title>
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
        <h1>OPERATING SYSTEM - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'In the _____ algorithm, the disk arm starts at one end of the disk and moves toward the other end, servicing requests till the other end of the disk. At the other end, the direction is reversed and servicing continues.',
        ['LOOK', 'SCAN', 'C-SCAN', 'C-LOOK'],
        'SCAN'
    ],
    [
        'An SJF algorithm is simply a priority algorithm where the priority is________',
        ['the predicted next CPU burst', 'the inverse of the predicted next CPU burst', 'the current CPU burst', 'anything the user wants'],
        'the predicted next CPU burst'
    ],
    [
        'The list of processes waiting at an I/O device are in_____________',
        ['Ready queue', 'Job queue', 'Device queue', 'Waiting queue'],
        'Device queue'
    ],
    [
        'Consider the 3 processes shown in the table:<br><table border="1"><tr><th>Process</th><th>Arrival time</th><th>Time units required</th></tr><tr><td>P1</td><td>0</td><td>5</td></tr><tr><td>P2</td><td>1</td><td>7</td></tr><tr><td>P3</td><td>5</td><td>4</td></tr></table><br>The completion order of the 3 processes under the policies FCFS and Round Robin scheduling with CPU quantum of 2 time units is_____________',
        ['FCFS:P1,P2,P3 RR:P1,P2,P3', 'FCFS:P1,P2,P3 RR:P1,P3,P2', 'FCFS:P1,P3,P2 RR:P1,P2,P3', 'FCFS:P1,P3,P2 RR:P1,P3,P2'],
        'FCFS:P1,P2,P3 RR:P1,P3,P2'
    ],
    [
        'There are 200 tracks on a disk platter and the pending requests have come in the order: 36,69,167,76,42,51,126,12, and 199. Assume the arm is located at the 100<sup>th</sup> track and moving towards track 200. If the sequence of access scheduling policy is used?',
        ['SCAN', 'Shortest Seek Time First', 'C-SCAN', 'FCFS'],
        'C-SCAN'
    ],
    [
        'When the time slice of Round Robin scheduling is large, its behaviour is similar to______',
        ['FCFS', 'Shortest job first', 'Priority scheduling', 'Shortest remaining time first'],
        'FCFS'
    ],
    [
        'If a resource pre-emption is used to eliminate deadlock, the process holding it so far has to be',
        ['Aborted', 'Queued', 'Rolled back', 'Terminated'],
        'Rolled back'
    ],
    [
        'How to avoid starvation of processes?',
        ['Include aging in the priority scheme', 'Include the number of resources in resource pre-emption', 'Randomly select processes for resource allocation', 'Randomly select processes for CPU allocation'],
        'Include aging in the priority scheme'
    ],
    [
        'A virtual memory system has an address space of 8 k words, a memory space of 4 k words, and page and block sizes of 1 k words. Find the number of page faults using LRU policy, for following page references',
        ['5', '7', '9', '10'],
        '9'
    ],
    [
        'Which is true with reference to Working Set model for page replacement?',
        ['It refers to static page replacement algorithm', 'It refers to local page replacement algorithm', 'It dynamically provides frames for the process as per its needs', 'It increases thrashing'],
        'It dynamically provides frames for the process as per its needs'
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
    window.location = "os4.php";
}
</script>
