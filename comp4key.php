<?php
include 'connect.php';

$answers = [2, 2, 4, 1, 3, 4, 1, 2, 2, 1]; 

$sql = "SELECT * FROM data WHERE UID='31513164' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/COMP/Test-4/Key-paper</title>
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
    <center class="textcolor"><h1 >COMP TEST-4/5</h1><h1>KEY-PAPER</h1></center>
    <ol type="1">
        <?php 
     $questionsData = [
    ['The CMP instruction that compares the source and destination operands performs_____operation', ['Addition', 'Subtraction', 'Multiplication', 'Division']],
    ['A machine in which the least significant byte(LSB) is stored in the lowest location is___________', ['Big endian', 'Little endian', 'Bi endian', 'Both Big endian and little endian']],
    ['What is the maximum number of addresses needed in an instruction?', ['0', '1', '2', '3']],
    ['Using 2\'s complement notation, what is the result of 11000 + 11100', ['10100', '110100', '11100', '011100']],
    ['What is the order decided by a processor or the CPU of a controller to execute an instruction?', ['decode, fetch, execute', 'execute, fetch, decode', 'fetch, decode, execute', 'fetch, execute, decode']],
    ['The 8086 fetches instruction one after another from________of memory', ['INSTRUCTION POINTER', 'STACK SEGMENT', 'ADDRESS SEGMENT', 'CODE SEGMENT']],
    ['Which instruction is used to load the address of the operand into the provided register?', ['LEA', 'LDS', 'LES', 'LAHF']],
    ['Which instruction affects the program counter?', ['Call and Return', 'Call and Jump', 'Push and Pop', 'Return and Jump']],
    ['Which register pair is used to indicate memory?', ['B and C', 'H and L', 'D and E', 'W and Z']],
    ['The instruction that is used for reading an input port and writing an output port respectively are', ['IN, OUT', 'IN, MOV', 'MOV, IN', 'MOV, XCHG']]
];





        foreach ($questionsData as $index => $data) {
            echo "<li>{$data[0]}<ol type='A'>";
            foreach ($data[1] as $i => $answer) {
                $class = '';
                $selectedAnswer = $questions[$index];  
                $correctAnswer = $answers[$index];     

               
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
function back(){
window.location="comp4.php"
}
</script>
