<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=31513162;
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
    if($ans2 == 1) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 4) $score++;
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
        <center class="textcolor">  <h1 align="center">COMP - TEST:2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font">
<form method="post" action="comp2.php" onsubmit="return validateForm()">
    <li>In ______subnet each packet is routed independently to reach the destination address.
        <ol type="A">
            <li><input type="radio" name="type" value="1">Circuit</li>
            <li><input type="radio" name="type" value="2" id="satya">Datagram</li>
            <li><input type="radio" name="type" value="3">Virtual Circuit</li>
            <li><input type="radio" name="type" value="4">Static</li>
        </ol></br>

    <li>____________File lock is a reader lock in which several processes can acquire the lock concurrently.
        <ol type="A">
            <li><input type="radio" name="type1" value="1" id="satya1">shared</li>
            <li><input type="radio" name="type1" value="2">mandatory</li>
            <li><input type="radio" name="type1" value="3">exclusive</li>
            <li><input type="radio" name="type1" value="4">Access rights</li>
        </ol></br>

    <li>Cache memory acts between
        <ol type="A">
            <li><input type="radio" name="type2" value="1" id="satya2">CPU and RAM</li>
            <li><input type="radio" name="type2" value="2">RAM and ROM</li>
            <li><input type="radio" name="type2" value="3">CPU and HARD DISK</li>
            <li><input type="radio" name="type2" value="4">RAM and HARD DISK</li>
        </ol></br>

    <li>An n-bit microprocessor has
        <ol type="A">
            <li><input type="radio" name="type3" value="1">n-bit program counter</li>
            <li><input type="radio" name="type3" value="2">n-bit address register</li>
            <li><input type="radio" name="type3" value="3">n-bit ALU</li>
            <li><input type="radio" name="type3" value="4" id="satya3">n-bit instruction register</li>
        </ol></br>

    <li>In 8086, the overflow flag is set when 
        <ol type="A">
            <li><input type="radio" name="type4" value="1">The sum is more than 16 bit</li>
            <li><input type="radio" name="type4" value="2" id="satya4">Signed numbers go out of their range after an arithmetic operation</li>
            <li><input type="radio" name="type4" value="3">Carry & Sign flag are set</li>
            <li><input type="radio" name="type4" value="4">Zero flag is set</li>
        </ol></br>

    <li>The part of the computer system that supervises the flow of information between Auxiliary Memory and Main Memory is called
        <ol type="A">
            <li><input type="radio" name="type5" value="1">Processor Management System</li>
            <li><input type="radio" name="type5" value="2">Data Management System</li>
            <li><input type="radio" name="type5" value="3">Address Management System</li>
            <li><input type="radio" name="type5" value="4" id="satya5">Memory Management System</li>
        </ol></br>

    <li>Memory unit accessed by content is called
        <ol type="A">
            <li><input type="radio" name="type6" value="1">Read only memory</li>
            <li><input type="radio" name="type6" value="2">Programmable Memory</li>
            <li><input type="radio" name="type6" value="3">Virtual Memory</li>
            <li><input type="radio" name="type6" value="4" id="satya6">Associative Memory</li>
        </ol></br>

    <li>A microprocessor retrieves instructions from
        <ol type="A">
            <li><input type="radio" name="type7" value="1">Control memory</li>
            <li><input type="radio" name="type7" value="2">Cache memory</li>
            <li><input type="radio" name="type7" value="3" id="sekhar7">Main memory</li>
            <li><input type="radio" name="type7" value="4">Virtual memory</li>
        </ol></br>

    <li>The addressing mode used in an instruction of the form ADD X,Y is 
        <ol type="A">
            <li><input type="radio" name="type8" value="1">Immediate</li>
            <li><input type="radio" name="type8" value="2">indirect</li>
            <li><input type="radio" name="type8" value="3" id="sekhar8">Direct</li>
            <li><input type="radio" name="type8" value="4">Index</li>
        </ol></br>

    <li>The size of each segment in 8086 is:
        <ol type="A">
            <li><input type="radio" name="type9" value="1" id="sekhar9">64 KB</li>
            <li><input type="radio" name="type9" value="2">24 KB</li>
            <li><input type="radio" name="type9" value="3">50 KB</li>
            <li><input type="radio" name="type9" value="4">16 KB</li>
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
window.location="comp2key.php"
}
</script>

  
<script>
function back()
{<?php session_unset(); ?>
window.location="comp.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="comp3.php"

        }
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
</html>