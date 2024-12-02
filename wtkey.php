<?php
include 'connect.php';

$answers = [4, 4, 2, 2, 1, 1, 2, 2, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='23201' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/WT/Test-1/Key-paper</title>
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
        <h1>WEB-TECHNOLOGIES - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'Which method is used to create a hyperlink to "myexams.html"?',
        ['&lt;LINK SRC = "myexams.html"&gt;', '&lt;A SRC = "myexams.html"&gt;', '&lt;BODY LINK = "myexams.html"&gt;', '&lt;A HREF = "myexams.html"&gt;'],
        '&lt;A HREF = "myexams.html"&gt;'
    ],
    [
        'Which of the following is a valid IP address?',
        ['498.11.497.67', '192.168.321.10', '1.899.432.456', '192.168.36.115'],
        '192.168.36.115'
    ],
    [
        'What is the output of the following PHP code?<br>&lt;?php<br>$X = 10;<br>$y = 20;<br>if($X &gt; $y + $y != 3)<br>print "today";<br>else<br>print "tomorrow";<br>?&gt;',
        ['tomorrow', 'today', 'Error', 'No output'],
        'today'
    ],
    [
        'Which of the following protocols is used for e-mail services?',
        ['SMAP', 'SMTP', 'SMIP', 'SMOP'],
        'SMTP'
    ],
    [
        'Which of the following is not a web server?',
        ['Microsoft Bing', 'Apache Tomcat', 'Microsoft IIS', 'Oracle Web Tier'],
        'Microsoft Bing'
    ],
    [
        'Which one is the method of the Connection object in ADO.Net?',
        ['open()', 'new()', 'ConnectionOpen()', 'connectionStart()'],
        'open()'
    ],
    [
        'Which one of the following statements instantiates the <b>mysqli</b> class in PHP programming?',
        ['mysqli=new mysqli()', '$mysqli=new mysqli()', '$mysqli->new mysqli()', 'mysqli->new mysqli()'],
        '$mysqli=new mysqli()'
    ],
    [
        'Which of the following functions is used to erase all session variables stored in the current session?',
        ['session_destroy()', 'session_unset()', 'session_change()', 'session_remove()'],
        'session_unset()'
    ],
    [
        'How can you make a bulleted list with numbers?',
        ['&lt;dl&gt;', '&lt;ol&gt;', '&lt;list&gt;', '&lt;ul&gt;'],
        '&lt;ol&gt;'
    ],
    [
        'Which of the following statements is true?',
        ['Attribute names must be in uppercase', 'Attribute names must be quoted', 'Attribute names minimization is mandatory', 'Attribute names must not be quoted'],
        'Attribute names must be quoted'
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
    window.location = "wt.php";
}
</script>
