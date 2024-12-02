<?php
include 'connect.php';

$answers = [2, 3, 1, 2, 2, 2, 4, 3, 2, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='15193' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/OS/Test-3/Key-paper</title>
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
        <h1>OPERATING SYSTEM - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'The Basic Input Output System(BIOS) resides in', 
        ['RAM', 'ROM', 'The CPU', 'Memory Cache'], 
        'ROM'
    ],
    [
        'The Banker's algorithm is used', 
        ['to rectify deadlock', 'to detect deadlock', 'to prevent deadlock', 'to solve deadlock'], 
        'to solve deadlock'
    ],
    [
        'First-in-First-Out(FIFO) scheduling is', 
        ['Non-Preemptive Scheduling', 'Preemptive Scheduling', 'Fair Share Scheduling', 'Deadline Scheduling'], 
        'Non-Preemptive Scheduling'
    ],
    [
        'The interval from the time of submission of a process to the time of completion is termed as______________', 
        ['Waiting time', 'turnaround time', 'response time', 'throughput'], 
        'turnaround time'
    ],
    [
        'What is a process control block?', 
        ['Process type variable', 'A Data Structure to store information of a process', 'A secondary storage section', 'A block in memory'], 
        'A Data Structure to store information of a process'
    ],
    [
        'A computer system has 6 tape drivers, with \'n\' processes competing for them. Each process may need 3 tape drivers. The maximum value of \'n\' for which the system is guaranteed to be deadlock free', 
        ['1', '2', '3', '4'], 
        '2'
    ],
    [
        'The address of a page table in memory is pointed by______', 
        ['stack pointer', 'page register', 'program counter', 'page table base register'], 
        'page table base register'
    ],
    [
        'Consider a computer with 8M bytes of main memory and a 128K bytes cache. The cache block size is 4K bytes. It uses a direct mapping scheme for cache management. How many different main memory blocks can map onto a given physical cache block?', 
        ['2048', '8', '64', '256'], 
        '64'
    ],
    [
        'A multilevel page table is preferred in comparison to a single level page table for translating virtual address to physical address because_________', 
        ['it reduces the memory access time to read or write a memory location', 'it helps to reduce the size of the page table needed to implement the virtual address space of a process', 'it is required by the translation lookaside buffer', 'it helps to reduce the number of page faults in page replacement algorithms'], 
        'it helps to reduce the size of the page table needed to implement the virtual address space of a process'
    ],
    [
        'The time taken to move the disk arm to the desired cylinder is called the___________', 
        ['positioning time', 'random access time', 'seek time', 'rotational latency'], 
        'seek time'
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
    window.location = "os3.php";
}
</script>
