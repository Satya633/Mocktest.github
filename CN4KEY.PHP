<?php
include 'connect.php';

$answers = [1, 2, 1, 2, 1, 1, 2, 1, 3, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3144' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/CN/Test-4/Key-paper</title>
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
        <h1>COMPUTER NETWORKS - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
$questionsData = [
    [
        'In the layer hierarchy as the data packet moves from the upper to the lower layers, headers are__________',
        ['Added', 'Removed', 'Rearranged', 'Modified'],
        'Added'
    ],
    [
        'Three or more devices share a link in ______________ connection.',
        ['Unipoint', 'Multipoint', 'Point to Point', 'Simplex'],
        'Multipoint'
    ],
    [
        'How many layers are present in the Internet protocol stack (TCP/IP model)?',
        ['5', '7', '6', '10'],
        '5'
    ],
    [
        'Delimiting and synchronization of data exchange is provided by___________',
        ['Application Layer', 'Session Layer', 'Transport Layer', 'Link Layer'],
        'Session Layer'
    ],
    [
        '________ allows you to connect and login to a remote computer',
        ['Telnet', 'FTP', 'HTTP', 'SMTP'],
        'Telnet'
    ],
    [
        'Which network topology requires a central controller or hub?',
        ['Star', 'Mesh', 'Ring', 'Bus'],
        'Star'
    ],
    [
        'In TDM, slots are further divided into __________',
        ['Seconds', 'Frames', 'Packets', 'Bits'],
        'Frames'
    ],
    [
        'Automatic repeat request error management mechanism is provided by _________',
        ['Logical link control sublayer', 'Media access control sublayer', 'Network interface control sublayer', 'Application access control sublayer'],
        'Logical link control sublayer'
    ],
    [
        'In classful addressing a large part of available address are _____________',
        ['Organized', 'Blocked', 'Wasted', 'Communicated'],
        'Wasted'
    ],
    [
        'The time taken by a packet to travel from client to server and then back to the Client is called ________',
        ['STT', 'RTT', 'PTT', 'FTP'],
        'RTT'
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
    window.location = "CN4.php";
}
</script>
