<?php
include 'connect.php';

$answers = [1, 2, 1, 1, 1, 1, 3, 1, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='455' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CORE/DE/Test-5/Key-paper</title>
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
        <h1>DIGITAL ELECTRONICS - TEST:5/5</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
        $questionsData = [
            ['Which among the following was the first version in the TTL family?', ['Standard', 'Low-Power', 'Schottky', 'fast'], 'Standard'],
            ['The logical sum of all the minterms of a Boolean function of n variables is', ['0', '1', 'n', 'n(n+1)/2'], '1'],
            ['Circuits that generate the parity bit in the receiver and transmitter are called______ and ____________ respectively.', ['Parity checker, Parity generator', 'Parity generator, Parity checker', 'Parity generator, Parity encoder', 'Parity encoder, Parity decoder'], 'Parity checker, Parity generator'],
            ['The characteristic equation for the complement output of a JK flip flop is', ['Q\'(t+1)=J\'Q\' + KQ', 'Q\'(t+1)=J\'Q\' + KQ\'', 'Q\'(t+1)=J\'Q + KQ\'', 'Q\'(t+1)=J\'Q\' + K\'Q\''], 'Q\'(t+1)=J\'Q\' + KQ'],
            ['If the register has both shifts and parallel load capabilities that is referred to as', ['Universal shift register', 'Unidirectional shift register', 'Bidirectional shift register', 'Parallel shift register'], 'Universal shift register'],
            ['The capacity of a memory unit is usually stated as the total number of________that it can store.', ['Words', 'Bytes', 'Addresses', 'Bits'], 'Words'],
            ['Which among the following offers shorter read and write cycles?', ['FAST RAM', 'COMMERCIAL RAM', 'STATIC RAM', 'DYNAMIC RAM'], 'STATIC RAM'],
            ['4-to-16 line decoder can be constructed with______2-to-4 line decoders with enable', ['4', '2', '5', '8'], '2'],
            ['The canonical sum of product form of the function y(A,B)=A+B is', ['AB+BB+A\'A', 'AB+A\'B+A\'B\'', 'BA+BA\' + A\'B\'', 'AB+AB\'A\'B'], 'AB+A\'B+A\'B\''],
            ['(A+B)(A\'*B\')=?', ['1', '0', 'AB', 'AB\''], '1']
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
    window.location = "de5.php";
}
</script>
