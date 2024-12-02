<?php
include 'connect.php';

$answers = [2, 4, 3, 1, 2, 1, 4, 4, 3, 1]; 

$sql = "SELECT * FROM data WHERE UID='31513163' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/COMP/Test-3/Key-paper</title>
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
    <center class="textcolor"><h1 >COMP TEST-3/5</h1><h1>KEY-PAPER</h1></center>
    <ol type="1">
        <?php 
      $questionsData = [
    ['8085 micro-processor has_________bit ALU', ['4', '8', '16', '32']],
    ['Which of the following is not an 8086 general purpose register?', ['AX: Accumulator', 'BX: Base Register', 'SP: Stock Pointer', 'AS: Address Segment']],
    ['What are the data width and address widths of 8086 microprocessor?', ['12,16', '16,18', '16,20', '18,20']],
    ['How many valid flag bits are there in the flag register of 8086 microprocessor?', ['9', '10', '12', '16']],
    ['Who decides the starting address of the segment in physical memory?', ['Segment descriptor', 'Operating system', 'Base address', 'Local descriptor']],
    ['The communication line between CPU, memory and peripherals is called a', ['Bus', 'Line', 'Media', 'Hotline']],
    ['Which of the following mappings is not used for mapping process in cache memory?', ['Associative mapping', 'Direct mapping', 'Set-associative mapping', 'Segmented-page mapping']],
    ['Identify the false statement among the following.', [
        'The program counter holds the memory address of the instructions in execution',
        'An instruction in the instruction register consists of the opcode and the operand',
        'The value of the program counter is incremented by 1 once its value has been read to the memory address register',
        'Only opcode is transferred to the control unit'
    ]],
    ['Which of the following stores the operand during execution and the result of the operation after execution?', ['Flag register', 'Stack register', 'Accumulator', 'General purpose register']],
    ['A stack pointer is', [
        'a 16-bit register in the microprocessor that indicates the beginning of the stack memory',
        'a register that decodes and executes 16-bit arithmetic expressions',
        'The first memory location where a subroutine address is stored',
        'a register in which flag bits are stored'
    ]]
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
window.location="comp3.php"
}
</script>
