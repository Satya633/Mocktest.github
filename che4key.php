<?php
include 'connect.php';

$answers = [4, 2, 3, 2, 1, 2, 1, 1, 1, 3]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='3854' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-4/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:4/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       $questionsData = [
    [
        'The normality of 2.3 M H₂SO₄ solution is:',
        ['0.46 N', '0.23 N', '2.3 N', '4.6 N'],
        '4.6 N'
    ],
    [
        '8 grams of a substance of molecular weight 40 is dissolved in 250 g of water. Then the molality of the solution is:',
        ['0.4', '0.8', '0.2', '0.6'],
        '0.8'
    ],
    [
        'The pH value of 0.05M Ba(OH)₂ solution is:',
        ['10', '12', '13', '11'],
        '13'
    ],
    [
        'Which of the following molecules is not a Lewis Base?',
        ['H₂O', 'BF₃', 'NH₃', 'CO'],
        'BF₃'
    ],
    [
        'During the electrolysis of brine, 710g of Cl₂ was liberated at anode. The weight of NaOH formed is:',
        ['800 g', '400 g', '80 g', '40 g'],
        '800 g'
    ],
    [
        '__________ is a brand of polyester textile fiber that is wrinkle resistant and strong:',
        ['Cellulose', 'Dacron', 'Bakelite', 'Nylon'],
        'Dacron'
    ],
    [
        'Water gas is a mixture of:',
        ['H₂ + CO', 'N₂ + CO', 'H₂ + CO₂', 'H₂ + CH₄'],
        'H₂ + CO'
    ],
    [
        'Which of the following is not a greenhouse gas?',
        ['CO', 'CO₂', 'Water Vapour', 'CH₄'],
        'CO'
    ],
    [
        'Burning of fossil fuels causes:',
        ['Global warming', 'Ozone depletion', 'Acid rain', 'Eutrophication'],
        'Acid rain'
    ],
    [
        'Which among the following is insoluble in water?',
        ['Alcohol', 'Ammonia', 'Benzene', 'Acetone'],
        'Benzene'
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
    window.location = "che4.php";
}
</script>
