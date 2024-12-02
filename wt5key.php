<?php
include 'connect.php';

$answers = [1, 2, 4, 3, 3, 4, 2, 2, 4, 1]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='23205' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/WT/Test-5/Key-paper</title>
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
        <h1>WEB-TECHNOLOGIES - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'What does "error 404" or "Not Found" error while accessing a URL mean?',
        ['The server could not find the requested URL', 'The requested HTML file is not available', 'The path to the interpreter of the script is not valid', 'The requested HTML file does not have sufficient permissions'],
        'The server could not find the requested URL'
    ],
    [
        'Which of the following methods acts as a constructor function in a PHP class?',
        ['class_name()', '__construct()', 'constructor', 'constructor()'],
        '__construct()'
    ],
    [
        'Which of the following functions returns the number of characters in a string variable?',
        ['count($variable)', 'strcount($variable)', 'len($variable)', 'strlen($variable)'],
        'strlen($variable)'
    ],
    [
        'What will be the output of the following PHP code?<br>&lt;?php<br>function hi()<br>{<br>echo "Hello World";<br>}<br>$function_holder="hi";<br>$function_holder();<br>?&gt;',
        ['Error', 'No output', 'Hello World', 'hi'],
        'Hello World'
    ],
    [
        'In PHP, which of the following functions is used to sort an array in descending order?',
        ['sort()', 'asort()', 'rsort()', 'dsort()'],
        'rsort()'
    ],
    [
        'What will be the output of the following PHP code?<br>&lt;?php<br>function a()<br>{<br>function b()<br>{<br>echo \'BB\';<br>}<br>echo \'AA\';<br>}<br>a();<br>b();<br>?&gt;',
        ['AA', 'BBAA', 'AABB', 'Error'],
        'AABB'
    ],
    [
        'A function in PHP which starts with ____ (double underscore) is known as ____________?',
        ['User-Defined Function', 'Magic Function', 'Built-in Function', 'Default Function'],
        'Magic Function'
    ],
    [
        '_______ object is used to fill a DataSet/Data Table with query results in ADO.NET?',
        ['DataSet', 'DataAdapter', 'DataTable', 'DataReader'],
        'DataAdapter'
    ],
    [
        '__________ method is used to change the data in the database such as update, delete, or insert statements?',
        ['ExecuteReader()', 'ExecuteScalar()', 'ExecuteXML()', 'ExecuteNonQuery()'],
        'ExecuteNonQuery()'
    ],
    [
        'How to create a hyperlink in HTML?',
        ['&lt;a href="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;', '&lt;a url="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;', '&lt;a link="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;', '&lt;a&gt;www.XYZ.com&lt;/a&gt;'],
        '&lt;a href="www.XYZ.com"&gt;XYZ.com&lt;/a&gt;'
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
    window.location = "wt5.php";
}
</script>
