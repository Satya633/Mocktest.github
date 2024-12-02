<?php
include 'connect.php';

$answers = [4, 4, 1, 3, 3, 4, 3, 1, 4, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='23202' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/WT/Test-2/Key-paper</title>
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
        <h1>WEB-TECHNOLOGIES - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'What will be the output of the following PHP code?</br>&lt;?php</br>
$color = "maroon" ;</br>
$var = $color[2];</br>
echo "$var";</br>
?&gt;</br>',
        ['A', 'Error', '$Var', 'r'],
        'r'
    ],
    [
        'Correct HTML tag for the largest heading is',
        ['&lt;head&gt;', '&lt;h6&gt;', '&lt;heading&gt;', '&lt;h1&gt;'],
        '&lt;h1&gt;'
    ],
    [
        'Which one of the following functions will convert a string to all uppercase letters?',
        ['strtoupper()', 'uppercase()', 'str_uppercase()', 'struppercase()'],
        'strtoupper()'
    ],
    [
        'Which attribute is used to extend the lifetime of a cookie?',
        ['higher-age', 'increase-age', 'max-age', 'lifetime'],
        'max-age'
    ],
    [
        'If you are using the DataSet and you have to display the data in sorted order what will you do?',
        ['Use sort method of DataTable', 'Use Sort Method of DataSet', 'Use Dataview object with each sort', 'Use datapaging and sort the data'],
        'Use Dataview object with each sort'
    ],
    [
        'What are the three primary kinds of parameters?',
        ['Input, Integer, String', 'Integer, String, DateTime', 'int, varchar, nvarchar', 'Input, Output, InputOutput'],
        'Input, Output, InputOutput'
    ],
    [
        'Which of the following is not the method of DataAdapter?',
        ['Fill', 'Schema', 'ReadData', 'Update'],
        'ReadData'
    ],
    [
        'Which of the following method of the command object is best suited when you have aggregate functions in a SELECT statement?',
        ['ExecuteScalar', 'ExecuteReader', 'ExecuteNonQuery', 'Execute'],
        'ExecuteScalar'
    ],
    [
        'ADO.NET provides the ability to create and process in-memory databases called?',
        ['Views', 'Relations', 'Tables', 'DataSets'],
        'DataSets'
    ],
    [
        '__________ element contains meta information about the document.',
        ['&lt;head&gt;', '&lt;html&gt;', '&lt;!Doctype html&gt;', '&lt;title&gt;'],
        '&lt;head&gt;'
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
    window.location = "wt2.php";
}
</script>
