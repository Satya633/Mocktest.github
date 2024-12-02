<?php
include 'connect.php';

$answers = [3, 1, 1, 3, 4, 1, 1, 3, 2, 2]; // Correct answers

$sql = "SELECT * FROM data WHERE UID='38510' ORDER BY id DESC LIMIT 1";
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
    <title>ECET-MOCKTEST/CHEMISTRY/Test-10/Key-paper</title>
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
        <h1>CHEMISTRY - TEST:10/10</h1>
        <h1>KEY-PAPER</h1>
    </center>

    <ol type="1">
        <?php 
       
$questionsData = [
    [
        'Vulcanisation of rubber is mainly by the addition of:',
        ['Oxygen gas', 'Magnesium oxide', 'Sulphur', 'Zinc oxide'],
        'Sulphur'
    ],
    [
        'During the refining of petroleum, which of the following is used to remove sulphur impurity:',
        ['Copper Oxide', 'Copper Sulphide', 'Magnesium chloride', 'Magnesium sulphate'],
        'Copper Oxide'
    ],
    [
        'Which of the oxide of nitrogen is not a common pollutant?',
        ['N₂O₅', 'N₂O', 'NO', 'NO₂'],
        'N₂O'
    ],
    [
        'DDT is:',
        ['Nitrogen containing insecticide', 'Biodegradable pollutant', 'Non-Biodegradable pollutant', 'An antibiotic'],
        'Non-Biodegradable pollutant'
    ],
    [
        'According to Bohr\'s theory of hydrogen atom, the angular momentum of electron in fourth orbit of H-atom is equal to:',
        ['h/2π', '2h/π', '3h/2π', '4h/π'],
        '3h/2π'
    ],
    [
        'The quantum number which describes the shape of an atomic orbital is:',
        ['Azimuthal Quantum Number', 'Principal Quantum Number', 'Spin Quantum Number', 'Magnetic Quantum Number'],
        'Azimuthal Quantum Number'
    ],
    [
        'Identify the element in which the ratio of s-electrons to p-electrons is 3:5:',
        ['P', 'Al', 'S', 'K'],
        'Al'
    ],
    [
        'The pair of molecules in which the central atom has octet of electrons is:',
        ['BeCl₂, BF₃', 'H₂O, BeCl₂', 'H₂O, NH₃', 'NH₃, BF₃'],
        'H₂O, NH₃'
    ],
    [
        'The electronic configuration of an element M is [Ne]3S¹ and that of element X is [He]2S²2P⁵. The type of bond present between M and X is:',
        ['Covalent Bond', 'Electrovalent Bond', 'Co-ordinate Covalent Bond', 'Hydrogen Bond'],
        'Electrovalent Bond'
    ],
    [
        'The absolute weight of one molecule of water (in g) is (Nₐ=6x10²³mol⁻¹):',
        ['1.5 X 10⁻²³', '3.0 X 10⁻²³', '4.5 X 10⁻²³', '2.0 X 10⁻²³'],
        '3.0 X 10⁻²³'
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
    window.location = "che10.php";
}
</script>
