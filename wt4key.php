<?php
include 'connect.php';

$answers = [2, 2, 2, 4, 4, 3, 1, 3, 4, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='23204' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/WT/Test-4/Key-paper</title>
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
        <h1>WEB-TECHNOLOGIES - TEST:4/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'If you want to merge two or more rows in a table, which attribute can you use?',
        ['Rowmerge', 'Rowspan', 'Colmerge', 'Colspan'],
        'Rowspan'
    ],
    [
        'When form data contains sensitive or personal information, which method is more preferable?',
        ['Get method', 'Post method', 'Host method', 'Put method'],
        'Post method'
    ],
    [
        'HTML documents are transmitted from web servers to the web browsers using_____________?',
        ['FTP', 'HTTP', 'XML', 'JSP'],
        'HTTP'
    ],
    [
        'Which built-in function will add a value to the end of an array in PHP?',
        ['Array_unshift()', 'Into_array()', 'Inend_array()', 'Array_push()'],
        'Array_push()'
    ],
    [
        'What will be the output of the following PHP code?<br>&lt;php<br>$number=array("4","hello",2);<br>echo(array_sum($number));<br>?&gt;',
        ['4hello2', '4', '2', '6'],
        '6'
    ],
    [
        'Which of the following is used to access MySQL database in PHP?',
        ['mysqlconnect() function', 'mysql-connect()', 'mysql_connect() function', 'sql_connect() function'],
        'mysql_connect() function'
    ],
    [
        'Which of the following is used in PHP to store data in a session?',
        ['$_SESSION', 'SYS_SESSION', '$SESSION', '$_SESSIONS'],
        '$_SESSION'
    ],
    [
        '___________ Object is used to fill a Dataset/Data Table with query results in ADO.NET.',
        ['Data Reader', 'DataSet', 'DataAdapter', 'DataTables'],
        'DataAdapter'
    ],
    [
        'ADO.NET Data Adapter provides the communication between_________?',
        ['Data object and DataSet', 'Data object and data source', 'Dataset and Database', 'Dataset and data Sources'],
        'Dataset and data Sources'
    ],
    [
        '__________ is used to store the data within the documents on the server.',
        ['XML', 'HTML', 'DHTML', 'CGI'],
        'XML'
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
    window.location = "wt4.php";
}
</script>
