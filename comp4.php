<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=31513164;
    $ans1 = $_POST["type"];
    $ans2 = $_POST["type1"];
    $ans3 = $_POST["type2"];
    $ans4 = $_POST["type3"];
    $ans5 = $_POST["type4"];
    $ans6 = $_POST["type5"];
    $ans7 = $_POST["type6"];
    $ans8 = $_POST["type7"];
    $ans9 = $_POST["type8"];
    $ans0 = $_POST["type9"];
    
    $score = 0;
    if($ans1 == 2) $score++;
    if($ans2 == 2) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 2) $score++;
    if($ans0 == 1) $score++;
    
    $_SESSION['score'] = $score;
    

    $insertQuery = "INSERT INTO data(UID,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques0) 
                    VALUES ('$phy','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9','$ans0')";
    
    if ($conn->query($insertQuery) === TRUE) {
        echo "<script>
                window.onload = function() {
                    document.getElementById('form3').classList.add('open-form3');
                };
              </script>";
    } else {
        echo "ERROR: " . $conn->error;
    }
}
?>
<html>
<head>
<title>COMP/TEST</title>
<link rel="stylesheet" href="satya.css"/>
<link rel="icon" href="logo.png" type="image/x-icon">
<script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 10) { 
                alert("Please answer all questions.");
                return false;
            }
            return true;
        }
    </script>
</head>
    <body class="color">
<div class="icon">
               <h2 class="logo">MOCK TEST</h2>
           </div>
                <div class="menu">
                   <ul> 
                    <li><a href="course.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="contact.html">CONTACT</a><li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
        <center class="textcolor">  <h1 align="center">COMP - TEST:4/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="comp4.php" onsubmit="return validateForm()">
    <li>The CMP instruction that compares the source and destination operands performs_____operation.
        <ol type="A">
            <li><input type="radio" name="type" value="1">Addition</li>
            <li><input type="radio" name="type" value="2" id="satya">Subtraction</li>
            <li><input type="radio" name="type" value="3">Multiplication</li>
            <li><input type="radio" name="type" value="4">Division</li>
        </ol></br>

    <li>A machine in which the least significant byte(LSB) is stored in the lowest location is___________
        <ol type="A">
            <li><input type="radio" name="type1" value="1">Big endian</li>
            <li><input type="radio" name="type1" value="2" id="satya1">Little endian</li>
            <li><input type="radio" name="type1" value="3">Bi endian</li>
            <li><input type="radio" name="type1" value="4">Both Big endian and little endian</li>
        </ol></br>

    <li>What is the maximum number of addresses needed in an instruction?
        <ol type="A">
            <li><input type="radio" name="type2" value="1">0</li>
            <li><input type="radio" name="type2" value="2">1</li>
            <li><input type="radio" name="type2" value="3">2</li>
            <li><input type="radio" name="type2" value="4" id="satya2">3</li>
        </ol></br>

    <li>Using 2's complement notation, what is the result of 11000 + 11100
        <ol type="A">
            <li><input type="radio" name="type3" value="1" id="satya3">10100</li>
            <li><input type="radio" name="type3" value="2">110100</li>
            <li><input type="radio" name="type3" value="3">11100</li>
            <li><input type="radio" name="type3" value="4">011100</li>
        </ol></br>

    <li>What is the order decided by a processor or the CPU of a controller to execute an instruction?
        <ol type="A">
            <li><input type="radio" name="type4" value="1">decode, fetch, execute</li>
            <li><input type="radio" name="type4" value="2">execute, fetch, decode</li>
            <li><input type="radio" name="type4" value="3" id="satya4">fetch, decode, execute</li>
            <li><input type="radio" name="type4" value="4">fetch, execute, decode</li>
        </ol></br>

    <li>The 8086 fetches instruction one after another from________of memory
        <ol type="A">
            <li><input type="radio" name="type5" value="1">INSTRUCTION POINTER</li>
            <li><input type="radio" name="type5" value="2">STACK SEGMENT</li>
            <li><input type="radio" name="type5" value="3">ADDRESS SEGMENT</li>
            <li><input type="radio" name="type5" value="4" id="satya5">CODE SEGMENT</li>
        </ol></br>

    <li>Which instruction is used to load the address of the operand into the provided register?
        <ol type="A">
            <li><input type="radio" name="type6" value="1" id="satya6">LEA</li>
            <li><input type="radio" name="type6" value="2">LDS</li>
            <li><input type="radio" name="type6" value="3">LES</li>
            <li><input type="radio" name="type6" value="4">LAHF</li>
        </ol></br>

    <li>Which instruction affects the program counter?
        <ol type="A">
            <li><input type="radio" name="type7" value="1">Call and Return</li>
            <li><input type="radio" name="type7" value="2" id="sekhar7">Call and Jump</li>
            <li><input type="radio" name="type7" value="3">Push and Pop</li>
            <li><input type="radio" name="type7" value="4">Return and Jump</li>
        </ol></br>

    <li>Which register pair is used to indicate memory?
        <ol type="A">
            <li><input type="radio" name="type8" value="1">B and C</li>
            <li><input type="radio" name="type8" value="2" id="sekhar8">H and L</li>
            <li><input type="radio" name="type8" value="3">D and E</li>
            <li><input type="radio" name="type8" value="4">W and Z</li>
        </ol></br>

    <li>The instruction that is used for reading an input port and writing an output port respectively are 
        <ol type="A">
            <li><input type="radio" name="type9" value="1" id="sekhar9">IN, OUT</li>
            <li><input type="radio" name="type9" value="2">IN, MOV</li>
            <li><input type="radio" name="type9" value="3">MOV, IN</li>
            <li><input type="radio" name="type9" value="4">MOV, XCHG</li>
        </ol>
</ol>

<center><input type="submit" class="satya" value="Complete" name="complete" /></center>
</form>


 <button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
<div class="form3" id="form3">
    <h2>Your Score:</h2>
    <h1>
        <span id="score">
            <?php
              
                if (isset($_SESSION['score'])) {
                    $score = $_SESSION['score'];
                    echo $score . '/10'; 

                    
                } else {
                    echo '0/10'; 
                    echo "<p>Better Luck Next Time</p>";  
                }
            ?>
        </span>
    </h1>
<?php
if ($score >= 8) {
                        echo "<p>Excellent!</p>";
                    } elseif ($score >= 5) {
                        echo "<p>Good!</p>";
                    } else {
                        echo "<p>Better Luck Next Time</p>";
                    }
?>
    <button class="ans" onclick="answer()">KEY</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="rem" onclick="closeform3()">OK</button>
</div>
</body>

<script>
function answer()
{
window.location="comp4key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="comp3.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="comp5.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>