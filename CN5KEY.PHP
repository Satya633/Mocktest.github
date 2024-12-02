<?php
include 'connect.php';

$answers = [3, 2, 4, 3, 3, 1, 3, 2, 3, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3145' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/CN/Test-5/Key-paper</title>
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
        <h1>COMPUTER NETWORKS - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
$questionsData = [
    [
        'Which address identifies a process on a host?',
        ['Physical', 'Logical', 'Port', 'MAC'],
        'Port'
    ],
    [
        'Which layer takes care of compression and encryption?',
        ['Application', 'Presentation', 'Session', 'Network'],
        'Presentation'
    ],
    [
        'In which topology the network consists of direct link between two computers?',
        ['Bus', 'Ring', 'Star', 'P2P'],
        'P2P'
    ],
    [
        'If n devices are connected by mesh topology that uses simplex connections, then how many cables or lines are required?',
        ['n', 'n-1', 'n(n-1)', 'n(n-1)/2'],
        'n(n-1)'
    ],
    [
        'Which topology has minimal traffic?',
        ['Mesh', 'Ring', 'Bus', 'Star'],
        'Mesh'
    ],
    [
        'Two hosts are 10,000 km apart and they are connected by single direct link of bandwidth 10^6 bits per second. What is the propagation time if the propagation speed along the link is 2 x 10^8 m/sec?',
        ['50 milli sec', '100 milli sec', '200 milli sec', '400 milli sec'],
        '50 milli sec'
    ],
    [
        'What is the class of the IP address 172.50.4.12?',
        ['Class D', 'Class C', 'Class B', 'Class A'],
        'Class B'
    ],
    [
        'The network address of 172.16.0.0/19 provides how many subnets and hosts?',
        ['7 subnets, each having 30 hosts', '8 subnets, having 8190 hosts', '8 subnets, each having 2046 hosts', '7 subnets, each having 2046 hosts'],
        '8 subnets, having 8190 hosts'
    ],
    [
        'Which protocol is used for sending emails and receiving emails respectively?',
        ['POP3, SMTP', 'IMAP, POP3', 'SMTP, POP3', 'IMAP, SMTP'],
        'SMTP, POP3'
    ],
    [
        'Consider the below 4 actions in a network. What is the order in which these actions should be executed for communication between a web browser and a web server?',
        ['4,2,1,3', '1,2,3,4', '4,1,2,3', '2,4,1,3'],
        '4,2,1,3'
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
    window.location = "CN5.php";
}
</script>
