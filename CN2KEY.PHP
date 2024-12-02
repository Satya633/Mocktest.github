<?php
include 'connect.php';

$answers = [3, 1, 1, 3, 4, 1, 2, 1, 3, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3142' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/CN/Test-2/Key-paper</title>
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
        <h1>COMPUTER NETWORKS - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
$questionsData = [
    [
        'Among the following layers which layer is responsible for token management?',
        ['Physical', 'Application', 'Session', 'Network'],
        'Application'
    ],
    [
        'In TCP/IP, The protocol SMTP is used in which layer?',
        ['Apllication', 'Host-Network', 'Transport', 'Asssociation'],
        'Apllication'
    ],
    [
        'Sending a message to a particular group can be named as',
        ['Multicasting', 'Broadcasting', 'point-point', 'Unicast'],
        'Multicasting'
    ],
    [
        'Among the following Topologies which topology is the reliable one?',
        ['Star', 'Ring', 'Mesh', 'Bus'],
        'Mesh'
    ],
    [
        'Which of the following cables work based on Light?',
        ['co_axial', 'copper', 'twisted pair', 'optical'],
        'optical'
    ],
    [
        'Among the following devices which is used for signal strengths?',
        ['Repeaters', 'Hubs', 'Switches', 'bridges'],
        'Repeaters'
    ],
    [
        'In which of the following networks token bus will be used?',
        ['point_point', 'Broadcast', 'Unicast', 'Multicast'],
        'Broadcast'
    ],
    [
        'When an email is sent from SMTP protocol, which port will receive at the destination?',
        ['25', '31', '45', '86'],
        '25'
    ],
    [
        'The IP address 192.168.2.42 belongs to which of the following?',
        ['class A', 'class B', 'class C', 'class D'],
        'class C'
    ],
    [
        'When searching a website, which of the following protocol is helpful?',
        ['SMTP', 'HTTP', 'FTP', 'TELNET'],
        'HTTP'
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
    window.location = "CN2.php";
}
</script>
