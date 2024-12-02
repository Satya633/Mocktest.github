<?php
include 'connect.php';

$answers = [4, 4, 1, 2, 4, 2, 3, 2, 1, 1]; 

$sql = "SELECT * FROM data WHERE UID='31513161' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/COMP/Test-1/Key-paper</title>
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
    <center class="textcolor"><h1 >COMP TEST-1/5</h1><h1>KEY-PAPER</h1></center>
    <ol type="1">
        <?php 
      $questionsData = [
    ['In computers, subtraction is generally carried out by', ['9\'s complement', '10\'s complement', '1\'s complement', '2\'s complement']],
    ['Computers use addressing mode techniques for', [
        'giving programming versatility to the user by providing facilities as pointers to memory counters for loop control',
        'to reduce the number of bits in the field of instruction',
        'specifying rules for modifying or interpreting the address field of the instruction',
        'a, b and c'
    ]],
    ['The instruction, Mov BX, 0008H belongs to the address mode', ['Register', 'Direct', 'Immediate', 'Register relative']],
    ['The Intel 8086 microprocessor is a_______processor.', ['8 bit', '16 bit', '32 bit', '4 bit']],
    ['Which of the following is not a data transfer/copy instruction?', ['PUSH', 'Mov', 'POP', 'DAS']],
    ['The 80286 is able to address the physical memory of', ['8 MB', '16 MB', '24 MB', '64 MB']],
    ['The registers that contain the status information is', ['control registers', 'instruction registers', 'program status word', 'program counter']],
    ['The result of Mov AL, 65 is to store', ['store 0100 0010 in AL', 'store 42H in AL', 'store 40H in AL', 'store 0100 0001 in AL']],
    ['The address bits are sent out on lines through', ['A16-19', 'A10-17', 'D10-D17', 'B10-C17']],
    ['The 8086 fetches instructions one after another from_________of memory', ['Code segment', 'IP', 'ES', 'SS']]
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
window.location="comp.php"
}
</script>
