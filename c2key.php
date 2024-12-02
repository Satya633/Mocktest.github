<?php
include 'connect.php';

$answers = [3, 1, 2, 2, 1, 1, 3, 4, 3, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='32' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/C/Test-2/Key-paper</title>
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
        <h1>C AND DATA STRUCTURES - TEST:2/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
    [
        'Which of the following is not a derived data type in C?',
        ['Structure', 'Pointer', 'Enumeration', 'Array'],
        'Enumeration'
    ],
    [
        'The declaration shown below refers to </br> struct list { </br> int info; </br> struct list *prev, *next; </br> };',
        ['Doubley linked list', 'Circular linked list with head', 'Single linked list', 'Circular queue'],
        'Doubley linked list'
    ],
    [
        'The total number of elements in the array A[3][4][2] is',
        ['9', '24', '12', '36'],
        '24'
    ],
    [
        'To construct a unique binary search tree, which tree traversals are required?',
        ['only post order', 'post order and inorder', 'preorder and post order', 'only preorder'],
        'post order and inorder'
    ],
    [
        'What is the infix expression for the following prefix expression? -^AB+CD',
        ['(A^B)-(C+D)', '(A^B)+(C-D)', '(A-B)^(C+D)', '(A+B)^(C-D)'],
        '(A^B)-(C+D)'
    ],
    [
        'The number of swappings needed to sort the numbers {7,20,6,9,30,18,4,12} into ascending order using Bubble sort',
        ['14', '12', '13', '11'],
        '14'
    ],
    [
        'To implement the recursive technique for Quick sort method, which basic data structure is required?',
        ['Queue', 'Tree', 'Stack', 'Linked list'],
        'Stack'
    ],
    [
        'What will be the output of the following code? </br> #include"stdio.h" </br> #include"string.h" </br> void main() { </br> int register a; </br> scanf("%d",&a); </br> printf("%d",&a); </br> getch(); </br> }',
        ['25', 'Address', '0', 'Compilation Error'],
        'Compilation Error'
    ],
    [
        'Which of the following sorting technique is slowest?',
        ['Heap sort', 'Merge sort', 'Bubble sort', 'Shell sort'],
        'Bubble sort'
    ],
    [
        'Which of the Following sorting algorithms is best if a list is already sorted?',
        ['Heap sort', 'Insertion sort', 'Quick sort', 'Selection sort'],
        'Insertion sort'
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
    window.location = "c2.php";
}
</script>
