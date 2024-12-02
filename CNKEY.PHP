<?php
include 'connect.php';

$answers = [4, 2, 4, 2, 2, 2, 4, 1, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3141' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/CN/Test-1/Key-paper</title>
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
        <h1>COMPUTER NETWORKS - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
$questionsData = [
    [
        'PING stands for',
        ['Packet internal gateway', 'Packet internet gateway', 'Peer interval gateway', 'packet internet groper'],
        'Packet internet gateway'
    ],
    [
        'Which of the following is the process of managing data transfer between components within the network?',
        ['Data control', 'Flow control', 'Hop count', 'Error control'],
        'Error control'
    ],
    [
        'Which of the following layer is not present in TCP/IP?',
        ['Internet Layer', 'Network Layer', 'Transport Layer', 'Physical Layer'],
        'Physical Layer'
    ],
    [
        'Number of networks ID in class A networks are',
        ['116', '126', '156', '176'],
        '126'
    ],
    [
        'The IPv4 172.16.255.10 belongs to',
        ['Class A network', 'Class B network', 'Class C network', 'Class D network'],
        'Class B network'
    ],
    [
        'Checksum field takes care of only',
        ['Connection Oriented', 'Connection less', 'Framing', 'Acknowledgement'],
        'Connection Oriented'
    ],
    [
        'Which of the following is not the application of TCP?',
        ['WWW', 'E-mail', 'FTP', 'DNS'],
        'DNS'
    ],
    [
        'TCP is',
        ['Connection oriented', 'Connection Less', 'Not use check sum', 'Not reliable in delivering the messages'],
        'Connection oriented'
    ],
    [
        'The Length of the internet protocol is',
        ['8 bits', '16 bits', '32 bits', '64 bits'],
        '32 bits'
    ],
    [
        'IEEE 802.3 is',
        ['Token bus', 'Token Ring', 'Ethernet', 'Hub'],
        'Ethernet'
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
    window.location = "cn.php";
}
</script>
