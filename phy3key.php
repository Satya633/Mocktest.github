<?php
include 'connect.php';

$answers = [3, 2, 4, 1, 3, 1, 4, 2, 2, 2]; 

$sql = "SELECT * FROM data WHERE UID='168253' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/GENERAL/PHYSICS/Test-3/Key-paper</title>
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
    <center class="textcolor"><h1 >PHYSICS TEST-3/10</h1><h1>KEY-PAPER</h1></center>
    <ol type="1">
        <?php 
        $questionsData = [
            ['The Ratio of Specific heats for a mono atomic gas is given by', ['7/5', '5/2', '5/3', '9/5']],
            ['Two Identical samples of a gas are allowed to expand ⑴ isothrmally ⑵ adiabatically. Work done is', ['More in the adiabatic process', 'More in the isothermally process', 'Equal in both Processes', 'Zero']],
            ['The heat required to raise 0.5 Kg of sand from 30<sup>0</sup>C to 90<sup>0</sup>C is given by (Specific heat of sand = 830J/Kg<sup>0</sup>SC)', ['23450J', '54560J', '4578J', '24900J']],
            ['A ray of light will undergo total internal reflection if it', ['Travels from denser medium to rarer medium & angle of incidence should be greater than critical angle', 'Travels from rarer medium to denser medium & angle of incidence should be greater than critical angle', 'Travels from denser medium to rarer medium & angle of incidence should be less than critical angle', 'Travels from rarer medium to denser medium & angle of incidence should be less than critical angle']],
            ['The explusion of a magnetic field from the interior of a superconductor, a phenomemon is known as', ['Isotopic effect', 'BCS theory', 'Meissener effect', 'London theory']],
            ['The dimensions of premeability is', ['MLT<sup>2</sup>A<sup>-2</sup>', 'MLT<sup>-1</sup>A<sup>-2</sup>', 'MLT<sup>-2</sup>A<sup>-1</sup>', 'MLT<sup>1</sup>A<sup>-1</sup>']],
            ['If velocity(V), force(F) and energy(E) are taken as fundamental units, then dimensional formula for mass will be', ['V<sup>0</sup>FE<sup>2</sup>', 'VF<sup>2</sup>E<sup>0</sup>', 'V<sup>2</sup>F<sup>0</sup>E', 'V<sup>2</sup>F<sup>0</sup>E']],
            ['Vector A extends from the origin to s point having coordinates (7,70<sup>0</sup>) and vector B extends from the origin to a point having polar coordinate(4,130<sup>0</sup>). Find A dot B', ['28', '4', '0', '6']],
            ['If two vectors 2i+3j-k and -4i-6j-&lambda;k are parallel to each other then value of &lambda; be', ['2', '4', '0', '6']],
            ['The coefficient of static friction between contact surface of two bodies is 1. The contact surface of one body supports the other till the inclination is less than', ['30<sup>0</sup>', '45<sup>0</sup>', '60<sup>0</sup>', '90<sup>0</sup>']]
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
window.location="phy3.php"
}
</script>
