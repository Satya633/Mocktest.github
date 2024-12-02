<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=31513165;
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
    if($ans5 == 1) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
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
        <center class="textcolor">  <h1 align="center">COMP - TEST:5/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
<ol type="1" class="font">
<form method="post" action="comp5.php" onsubmit="return validateForm()">
    <li>The 80286 is able to address the physical memory of 
        <ol type="A">
            <li><input type="radio" name="type" value="1">8 MB</li>
            <li><input type="radio" name="type" value="2" id="satya">16 MB</li>
            <li><input type="radio" name="type" value="3">24 MB</li>
            <li><input type="radio" name="type" value="4">64 MB</li>
        </ol></br>

    <li>The 80286 is an upward object code compatible with 8086 or 8088 when operated in 
        <ol type="A">
            <li><input type="radio" name="type1" value="1">Normal mode</li>
            <li><input type="radio" name="type1" value="2">Real address mode only</li>
            <li><input type="radio" name="type1" value="3">Virtual address mode only</li>
            <li><input type="radio" name="type1" value="4" id="satya1">Real and virtual address mode</li>
        </ol></br>

    <li>In 8086, the instruction, MOV AX,[BX] is an example of
        <ol type="A">
            <li><input type="radio" name="type2" value="1">Direct addressing mode</li>
            <li><input type="radio" name="type2" value="2">Register addressing mode</li>
            <li><input type="radio" name="type2" value="3" id="satya2">Register indirect addressing mode</li>
            <li><input type="radio" name="type2" value="4">Register relative addressing mode</li>
        </ol></br>

    <li>The status of the pending interrupts is checked at 
        <ol type="A">
            <li><input type="radio" name="type3" value="1" id="satya3">The end of each instruction cycle</li>
            <li><input type="radio" name="type3" value="2">The beginning of every interrupt</li>
            <li><input type="radio" name="type3" value="3">The end of all the interrupts executed</li>
            <li><input type="radio" name="type3" value="4">The end of the main program</li>
        </ol></br>

    <li>The method for updating the main memory as soon as a word is removed from the cache is called
        <ol type="A">
            <li><input type="radio" name="type4" value="1" id="satya4">write-back</li>
            <li><input type="radio" name="type4" value="2">write-through</li>
            <li><input type="radio" name="type4" value="3">protected write</li>
            <li><input type="radio" name="type4" value="4">cache-write</li>
        </ol></br>

    <li>Zero address instructions format is used for
        <ol type="A">
            <li><input type="radio" name="type5" value="1">RISC architecture</li>
            <li><input type="radio" name="type5" value="2">CISC architecture</li>
            <li><input type="radio" name="type5" value="3" id="satya5">Stack-organized architecture</li>
            <li><input type="radio" name="type5" value="4">Von-Neuman architecture</li>
        </ol></br>

    <li>Cache memory works on the principle of
        <ol type="A">
            <li><input type="radio" name="type6" value="1">The locality of data</li>
            <li><input type="radio" name="type6" value="2" id="satya6">The locality of reference</li>
            <li><input type="radio" name="type6" value="3">The locality of memory</li>
            <li><input type="radio" name="type6" value="4">The locality of reference & memory</li>
        </ol></br>

    <li>Cycle stealing technique is used in
        <ol type="A">
            <li><input type="radio" name="type7" value="1">Interrupt based data transfer</li>
            <li><input type="radio" name="type7" value="2">Polled mode data transfer</li>
            <li><input type="radio" name="type7" value="3" id="sekhar7">DMA based data transfer</li>
            <li><input type="radio" name="type7" value="4">Data parallelism</li>
        </ol></br>

    <li>During DMA acknowledgement cycle, CPU relinquishes
        <ol type="A">
            <li><input type="radio" name="type8" value="1">Address bus only</li>
            <li><input type="radio" name="type8" value="2">Address bus & control bus</li>
            <li><input type="radio" name="type8" value="3" id="sekhar8">Data bus & address bus</li>
            <li><input type="radio" name="type8" value="4">Control bus & data bus</li>
        </ol></br>

    <li>In IEEE 32-bit representations, the mantissa of the fraction occupies___________bits. 
        <ol type="A">
            <li><input type="radio" name="type9" value="1" id="sekhar9">23</li>
            <li><input type="radio" name="type9" value="2">24</li>
            <li><input type="radio" name="type9" value="3">20</li>
            <li><input type="radio" name="type9" value="4">16</li>
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
window.location="comp5key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="comp4.php"
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