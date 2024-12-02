<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=31513163;
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
    if($ans2 == 4) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 4) $score++;
    if($ans9 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">COMP - TEST:3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="comp3.php" onsubmit="return validateForm()">
    <li>8085 micro-processor has_________bit ALU
        <ol type="A">
            <li><input type="radio" name="type" value="1">4</li>
            <li><input type="radio" name="type" value="2" id="satya">8</li>
            <li><input type="radio" name="type" value="3">16</li>
            <li><input type="radio" name="type" value="4">32</li>
        </ol></br>

    <li>Which of the following is not an 8086 general purpose register?
        <ol type="A">
            <li><input type="radio" name="type1" value="1">AX: Accumulator</li>
            <li><input type="radio" name="type1" value="2">BX: Base Register</li>
            <li><input type="radio" name="type1" value="3">SP: Stock Pointer</li>
            <li><input type="radio" name="type1" value="4" id="satya1">AS: Address Segment</li>
        </ol></br>

    <li>What are the data width and address widths of 8086 microprocessor?
        <ol type="A">
            <li><input type="radio" name="type2" value="1">12,16</li>
            <li><input type="radio" name="type2" value="2">16,18</li>
            <li><input type="radio" name="type2" value="3" id="satya2">16,20</li>
            <li><input type="radio" name="type2" value="4">18,20</li>
        </ol></br>

    <li>How many valid flag bits are there in the flag register of 8086 microprocessor?
        <ol type="A">
            <li><input type="radio" name="type3" value="1" id="satya3">9</li>
            <li><input type="radio" name="type3" value="2">10</li>
            <li><input type="radio" name="type3" value="3">12</li>
            <li><input type="radio" name="type3" value="4">16</li>
        </ol></br>

    <li>Who decides the starting address of the segment in physical memory?
        <ol type="A">
            <li><input type="radio" name="type4" value="1">Segment descriptor</li>
            <li><input type="radio" name="type4" value="2" id="satya4">Operating system</li>
            <li><input type="radio" name="type4" value="3">Base address</li>
            <li><input type="radio" name="type4" value="4">Local descriptor</li>
        </ol></br>

    <li>The communication line between CPU, memory and peripherals is called a 
        <ol type="A">
            <li><input type="radio" name="type5" value="1" id="satya5">Bus</li>
            <li><input type="radio" name="type5" value="2">Line</li>
            <li><input type="radio" name="type5" value="3">Media</li>
            <li><input type="radio" name="type5" value="4">Hotline</li>
        </ol></br>

    <li>Which of the following mappings is not used for mapping process in cache memory?
        <ol type="A">
            <li><input type="radio" name="type6" value="1">Associative mapping</li>
            <li><input type="radio" name="type6" value="2">Direct mapping</li>
            <li><input type="radio" name="type6" value="3">Set-associative mapping</li>
            <li><input type="radio" name="type6" value="4" id="satya6">Segmented-page mapping</li>
        </ol></br>

    <li>Identify the false statement among the following.
        <ol type="A">
            <li><input type="radio" name="type7" value="1" id="sekhar7">The program counter holds the memory address of the instructions in execution</li>
            <li><input type="radio" name="type7" value="2">An instruction in the instruction register consists of the opcode and the operand</li>
            <li><input type="radio" name="type7" value="3">The value of the program counter is incremented by 1 once its value has been read to the memory address register</li>
            <li><input type="radio" name="type7" value="4">Only opcode is transferred to the control unit</li>
        </ol></br>

    <li>Which of the following stores the operand during execution and the result of the operation after execution?
        <ol type="A">
            <li><input type="radio" name="type8" value="1">Flag register</li>
            <li><input type="radio" name="type8" value="2">Stack register</li>
            <li><input type="radio" name="type8" value="3" id="sekhar8">Accumulator</li>
            <li><input type="radio" name="type8" value="4">General purpose register</li>
        </ol></br>

    <li>A stack pointer is
        <ol type="A">
            <li><input type="radio" name="type9" value="1" id="sekhar9">a 16-bit register in the microprocessor that indicates the beginning of the stack memory</li>
            <li><input type="radio" name="type9" value="2">a register that decodes and executes 16-bit arithmetic expressions</li>
            <li><input type="radio" name="type9" value="3">The first memory location where a subroutine address is stored</li>
            <li><input type="radio" name="type9" value="4">a register in which flag bits are stored</li>
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
window.location="comp3key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="comp2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="comp4.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>