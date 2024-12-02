<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=31513161;
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
    if($ans1 == 4) $score++;
    if($ans2 == 4) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 2) $score++;
    if($ans9 == 1) $score++;
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
        <center class="textcolor">  <h1 align="center">COMP - TEST:1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="comp.php" onsubmit="return validateForm()">
    <li>In computers, subtraction is generally carried out by
        <ol type="A">
            <li><input type="radio" name="type" value="1">9's complement</li>
            <li><input type="radio" name="type" value="2">10's complement</li>
            <li><input type="radio" name="type" value="3">1's complement</li>
            <li><input type="radio" name="type" value="4" id="satya">2's complement</li>
        </ol></br>

    <li>Computers use addressing mode techniques for</br>
        (a) giving programming versatility to the user by providing facilities as pointers to memory counters for loop control</br>
        (b) to reduce the number of bits in the field of instruction</br>
        (c) specifying rules for modifying or interpreting the address field of the instruction
        <ol type="A">
            <li><input type="radio" name="type1" value="1">a only</li>
            <li><input type="radio" name="type1" value="2">a and b only</li>
            <li><input type="radio" name="type1" value="3">a and c only</li>
            <li><input type="radio" name="type1" value="4" id="satya1">a, b and c</li>
        </ol></br>

    <li>The instruction, Mov BX, 0008H belongs to the address mode
        <ol type="A">
            <li><input type="radio" name="type2" value="1" id="satya2">Register</li>
            <li><input type="radio" name="type2" value="2">Direct</li>
            <li><input type="radio" name="type2" value="3">Immediate</li>
            <li><input type="radio" name="type2" value="4">Register relative</li>
        </ol></br>

    <li>The Intel 8086 microprocessor is a_______processor.
        <ol type="A">
            <li><input type="radio" name="type3" value="1">8 bit</li>
            <li><input type="radio" name="type3" value="2" id="satya3">16 bit</li>
            <li><input type="radio" name="type3" value="3">32 bit</li>
            <li><input type="radio" name="type3" value="4">4 bit</li>
        </ol></br>

    <li>Which of the following is not a data transfer/copy instruction?
        <ol type="A">
            <li><input type="radio" name="type4" value="1">PUSH</li>
            <li><input type="radio" name="type4" value="2">Mov</li>
            <li><input type="radio" name="type4" value="3">POP</li>
            <li><input type="radio" name="type4" value="4" id="satya4">DAS</li>
        </ol></br>

    <li>The 80286 is able to address the physical memory of
        <ol type="A">
            <li><input type="radio" name="type5" value="1">8 MB</li>
            <li><input type="radio" name="type5" value="2" id="satya5">16 MB</li>
            <li><input type="radio" name="type5" value="3">24 MB</li>
            <li><input type="radio" name="type5" value="4">64 MB</li>
        </ol></br>

    <li>The registers that contain the status information is
        <ol type="A">
            <li><input type="radio" name="type6" value="1">control registers</li>
            <li><input type="radio" name="type6" value="2">instruction registers</li>
            <li><input type="radio" name="type6" value="3" id="satya6">program status word</li>
            <li><input type="radio" name="type6" value="4">program counter</li>
        </ol></br>

    <li>The result of Mov AL, 65 is to store
        <ol type="A">
            <li><input type="radio" name="type7" value="1">store 0100 0010 in AL</li>
            <li><input type="radio" name="type7" value="2">store 42H in AL</li>
            <li><input type="radio" name="type7" value="3">store 40H in AL</li>
            <li><input type="radio" name="type7" value="4" id="sekhar7">store 0100 0001 in AL</li>
        </ol></br>

    <li>The address bits are sent out on lines through_________
        <ol type="A">
            <li><input type="radio" name="type8" value="1" id="sekhar8">A16-19</li>
            <li><input type="radio" name="type8" value="2">A10-17</li>
            <li><input type="radio" name="type8" value="3">D10-D17</li>
            <li><input type="radio" name="type8" value="4">B10-C17</li>
        </ol></br>

    <li>The 8086 fetches instructions one after another from_________of memory
        <ol type="A">
            <li><input type="radio" name="type9" value="1" id="sekhar9">Code segment</li>
            <li><input type="radio" name="type9" value="2">IP</li>
            <li><input type="radio" name="type9" value="3">ES</li>
            <li><input type="radio" name="type9" value="4">SS</li>
        </ol>
</ol>

<center><input type="submit" class="satya" value="Complete" name="complete"/></center>
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
window.location="compkey.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="comp2.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>