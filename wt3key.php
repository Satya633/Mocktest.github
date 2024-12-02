<?php
include 'connect.php';

$answers = [3, 4, 2, 1, 1, 3, 2, 3, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='23203' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/WT/Test-3/Key-paper</title>
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
        <h1>WEB-TECHNOLOGIES - TEST:3/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        '_________ style sheet is used to define the style of many HTML pages.',
        ['Inline', 'Internal', 'External', 'None of the Above'],
        'External'
    ],
    [
        'Identify the type of error in the following PHP code: <br>&lt;?php<br>Function Sum(){<br>......;<br>}<br>sum1();<br>?&gt;',
        ['Parser Error', 'Notice Error', 'Warning Error', 'Fatal Error'],
        'Fatal Error'
    ],
    [
        'The output of the following code snippet is__________.<br>&lt;?php<br>$str="Welcome";<br>Echo substr($str,3,4);<br>?&gt;',
        ['lcom', 'come', 'lc', 'co'],
        'come'
    ],
    [
        'Which of the following statements is true?<br>A. Sessions are Secure<br>B. Cookies store large amount of data<br>C. Sessions store information in client machine',
        ['A only', 'B only', 'C only', 'A & B only'],
        'A only'
    ],
    [
        '&lt;? Php<br>$a = array(10,20,30);<br>Echo implode(\'@\',$a);<br>?&gt;<br>The output of the above program is____________',
        ['10@20@30', '@10', '10@', '10 20 30'],
        '10@20@30'
    ],
    [
        'Which among the following data providers is not supported by ADO.NET?',
        ['ODBC', 'MYSQL Server', 'MYAccess', 'OLEDB'],
        'MYAccess'
    ],
    [
        '____________ serve as a bridge between a Dataset and Data Source for retrieving stored data.',
        ['Data Manipulator', 'Data Adapter', 'Dataset Object', 'Data Reader'],
        'Data Adapter'
    ],
    [
        '___________ is a collection of DataColumn, DataRows, and Constraints.',
        ['Dataset', 'Data Relations', 'Data Table', 'Data adapter'],
        'Data Table'
    ],
    [
        '__________________ Method copies the structure of Dataset.',
        ['AcceptChanges()', 'clone()', 'copy()', 'Haschanges()'],
        'clone()'
    ],
    [
        'How can you open a link in a new browser window?',
        ['&lt;a href = "url" target = "new"&gt;', '&lt;a href = "url" target = "_blank"&gt;', '&lt;a href = "url" .new&gt;', '&lt;a href = "url" target = "open"&gt;'],
        '&lt;a href = "url" target = "_blank"&gt;'
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
    window.location = "wt3.php";
}
</script>
