<?php
include 'connect.php';

$answers = [2, 4, 1, 3, 3, 1, 3, 2, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='15195' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/OS/Test-5/Key-paper</title>
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
        <h1>OPERATING SYSTEM - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which is not an OS service?',
        ['Program execution', 'Networking', 'Error detection', 'Security'],
        'Networking'
    ],
    [
        'Round robin scheduling falls under the category of_________',
        ['Dead Lock', 'Demand Paging', 'Non-preemptive scheduling', 'Preemptive scheduling'],
        'Preemptive scheduling'
    ],
    [
        'Which one of the following is the Dead Lock Avoidance algorithm?',
        ['Banker\'s algorithm', 'Round Robin algorithm', 'Elevator algorithm', 'Karn\'s algorithm'],
        'Banker\'s algorithm'
    ],
    [
        'The aim of creating Page Replacement algorithm is to____________',
        ['Replaces pages faster', 'Increase the page fault rate', 'Decrease the page fault rate', 'To allocate multiple pages to process'],
        'Decrease the page fault rate'
    ],
    [
        'What are the two methods of the LRU page replacement policy that can be implemented in hardware?',
        ['Counters', 'RAM registers', 'Stack and counters', 'Registers'],
        'Stack and counters'
    ],
    [
        'Virtual memory is normally implemented by_____________',
        ['Demand Paging', 'Buses', 'Virtualization', 'paging'],
        'Demand Paging'
    ],
    [
        'Process is________________',
        ['Program in high level language kept on disk', 'Contents of main memory', 'A program in execution', 'a job in secondary memory'],
        'A program in execution'
    ],
    [
        'With paging there is no_____________ fragmentation',
        ['Internal', 'External', 'Demand', 'Segmentation'],
        'External'
    ],
    [
        'In page memory systems, if the page size is increased, then the internal fragmentation generally____________',
        ['Becomes less', 'Becomes more', 'Remains constant', 'Remains equal'],
        'Becomes more'
    ],
    [
        'Memory management techniques in which system stores & retrieves data from secondary storage for use in main memory is called____________',
        ['Fragmentation', 'Paging', 'Mapping', 'Relocating'],
        'Paging'
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
    window.location = "os5.php";
}
</script>
