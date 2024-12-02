<?php
include 'connect.php';

$answers = [2, 4, 3, 1, 1, 3, 2, 3, 3, 1]; 

$sql = "SELECT * FROM data WHERE UID='31513165' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/COMP/Test-5/Key-paper</title>
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
    <center class="textcolor"><h1 >COMP TEST-5/5</h1><h1>KEY-PAPER</h1></center>
    <ol type="1">
        <?php 
     $questionsData = [
    ['The 80286 is able to address the physical memory of', ['8 MB', '16 MB', '24 MB', '64 MB']],
    ['The 80286 is an upward object code compatible with 8086 or 8088 when operated in', ['Normal mode', 'Real address mode only', 'Virtual address mode only', 'Real and virtual address mode']],
    ['In 8086, the instruction, MOV AX,[BX] is an example of', ['Direct addressing mode', 'Register addressing mode', 'Register indirect addressing mode', 'Register relative addressing mode']],
    ['The status of the pending interrupts is checked at', ['The end of each instruction cycle', 'The beginning of every interrupt', 'The end of all the interrupts executed', 'The end of the main program']],
    ['The method for updating the main memory as soon as a word is removed from the cache is called', ['write-back', 'write-through', 'protected write', 'cache-write']],
    ['Zero address instructions format is used for', ['RISC architecture', 'CISC architecture', 'Stack-organized architecture', 'Von-Neuman architecture']],
    ['Cache memory works on the principle of', ['The locality of data', 'The locality of reference', 'The locality of memory', 'The locality of reference & memory']],
    ['Cycle stealing technique is used in', ['Interrupt based data transfer', 'Polled mode data transfer', 'DMA based data transfer', 'Data parallelism']],
    ['During DMA acknowledgement cycle, CPU relinquishes', ['Address bus only', 'Address bus & control bus', 'Data bus & address bus', 'Control bus & data bus']],
    ['In IEEE 32-bit representations, the mantissa of the fraction occupies___________bits', ['23', '24', '20', '16']]
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
window.location="comp5.php"
}
</script>
