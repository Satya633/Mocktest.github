<?php
include 'connect.php';

$answers = [1, 2, 3, 4, 3, 1, 4, 1, 3, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3143' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/CN/Test-3/Key-paper</title>
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
        <h1>COMPUTER NETWORKS - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
$questionsData = [
    [
        'In ______ topology, every device has a dedicated point-to-point link to every other device.',
        ['Mesh', 'Star', 'Bus', 'Ring'],
        'Mesh'
    ],
    [
        'IP Address which is reserved for loopback testing is ___________',
        ['192.0.0.1', '127.0.0.1', '255.255.255.255', '10.255.255.255'],
        '127.0.0.1'
    ],
    [
        '________ Cable accepts and transports signals in the form of light.',
        ['Twisted pair', 'Coaxial', 'Optical fiber', 'Copper'],
        'Optical fiber'
    ],
    [
        'The size of the MAC Address and IPV4 addresses are ________ and __________ respectively.',
        ['64,32', '48,64', '64,48', '48,32'],
        '48,32'
    ],
    [
        'The first address of a block of classless addresses if one of the addresses is 12.2.2.127/28 is ___________',
        ['12.2.2.0', '12.2.2.96', '12.2.2.112', '12.2.2.28'],
        '12.2.2.112'
    ],
    [
        'In classful addressing, when a direct delivery is made, both the deliverer and receiver have the same __________.',
        ['netid', 'hostid', 'IP address', 'Next hop address'],
        'netid'
    ],
    [
        'The TELNET server uses _________ port and the TELNET client uses ___________ port.',
        ['an ephemeral; another ephemeral', 'a well-known; another well-known', 'an ephemeral; a well-known', 'a well-known; an ephemeral'],
        'a well-known; an ephemeral'
    ],
    [
        'The data connection can be opened _________, during an FTP session.',
        ['exactly once', 'exactly twice', 'as many times as necessary', 'None of the above is correct'],
        'as many times as necessary'
    ],
    [
        'HTTP uses the services of TCP on well-known port _______.',
        ['13', '21', '80', '88'],
        '80'
    ],
    [
        'SMTP is a _________ protocol.',
        ['Pull', 'Push', 'Pull and Push', 'Neither Pull nor Push'],
        'Push'
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
    window.location = "CN3.php";
}
</script>
