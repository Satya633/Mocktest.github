<?php
include 'connect.php';

$answers = [1, 2, 2, 1, 3, 4, 4, 1, 3, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='31' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C/Test-1/Key-paper</title>
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
        <h1>C AND DATA STRUCTURES - TEST:1/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Evaluting expression consisting of operands and operators is an application of _____________ data structure.',
        ['Stack', 'Queue', 'Tree', 'Graph'],
        'Stack'
    ],
    [
        'Example of Non linear Data structure is ____________',
        ['Stack', 'Trees', 'Queue', 'Linked list'],
        'Trees'
    ],
    [
        'The best case time complexity of quick sort is ___________',
        ['O(log n)', 'O(n log n)', 'O(n²)', 'O(1)'],
        'O(n log n)'
    ],
    [
        'In ________ queue, the element can be inserted or removed from both the ends of the queue',
        ['Dequeue', 'Priority Queue', 'Circular Queue', 'Linear Queue'],
        'Dequeue'
    ],
    [
        'Implementation of Depth First search is done using _________',
        ['Circular queue', 'Linear queue', 'Stack', 'Double ended queue'],
        'Stack'
    ],
    [
        '________ tree traversal technique prints the elements of binary search tree in ascending order',
        ['Pre order', 'Post order', 'Inverse order', 'In order'],
        'In order'
    ],
    [
        'One of the applications of Queue is ___________',
        ['Evaluation post fix expression', 'Recursion', 'Post order implementation', 'Memory Management'],
        'Memory Management'
    ],
    [
        '________ sorting technique gives the best performance irrespective of data distribution.',
        ['Merge sort', 'Quick sort', 'Insertion sort', 'Bubble sort'],
        'Merge sort'
    ],
    [
        'Polynomial manipulations are one of the application of ___________ data structure',
        ['Stack', 'Tree', 'Linked list', 'Graph'],
        'Linked list'
    ],
    [
        '__________ data structure requires multiple runs of traversals',
        ['Linear', 'Array', 'Non Linear', 'Differential'],
        'Non Linear'
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
    window.location = "c1.php";
}
</script>
