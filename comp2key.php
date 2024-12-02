<?php
include 'connect.php';

$answers = [2, 1, 1, 4, 2, 4, 4, 3, 3, 1]; 

$sql = "SELECT * FROM data WHERE UID='31513162' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/COMP/Test-2/Key-paper</title>
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
    <center class="textcolor"><h1 >COMP TEST-2/5</h1><h1>KEY-PAPER</h1></center>
    <ol type="1">
        <?php 
      $questionsData = [
    ['In ______ subnet each packet is routed independently to reach the destination address', ['Circuit', 'Datagram', 'Virtual Circuit', 'Static']],
    ['____________File lock is a reader lock in which several processes can acquire the lock concurrently', ['shared', 'mandatory', 'exclusive', 'Access rights']],
    ['Cache memory acts between', ['CPU and RAM', 'RAM and ROM', 'CPU and HARD DISK', 'RAM and HARD DISK']],
    ['An n-bit microprocessor has', ['n-bit program counter', 'n-bit address register', 'n-bit ALU', 'n-bit instruction register']],
    ['In 8086, the overflow flag is set when', ['The sum is more than 16 bit', 'Signed numbers go out of their range after an arithmetic operation', 'Carry & Sign flag are set', 'Zero flag is set']],
    ['The part of the computer system that supervises the flow of information between Auxiliary Memory and Main Memory is called', ['Processor Management System', 'Data Management System', 'Address Management System', 'Memory Management System']],
    ['Memory unit accessed by content is called', ['Read only memory', 'Programmable Memory', 'Virtual Memory', 'Associative Memory']],
    ['A microprocessor retrieves instructions from', ['Control memory', 'Cache memory', 'Main memory', 'Virtual memory']],
    ['The addressing mode used in an instruction of the form ADD X,Y is', ['Immediate', 'indirect', 'Direct', 'Index']],
    ['The size of each segment in 8086 is:', ['64 KB', '24 KB', '50 KB', '16 KB']]
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
window.location="comp2.php"
}
</script>
