
<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3143;
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
    if($ans1 == 1) $score++;
    if($ans2 == 2) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 4) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 3) $score++;
    if($ans0 == 2) $score++;
    
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
?><html>
<head>
<title>COMPUTER NETWORKS/Test-3</title>
<link rel="stylesheet" href="satya.css"/>
<link rel="icon" href="logo.png" type="image/x-icon">
<script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 10) { // Assuming 5 questions are required to be answered
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
        <center class="textcolor">  <h1 align="center">COMPUTER NETWORKS: TEST-3/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="CN3.php" onsubmit="return validateForm()">
           <li>In______topology, every device has a dedicated point to oint link to every other device.
            <ol type="A">
        <li > <input type="radio" name="type" value="1" id="satya">Mesh
        <li>  <input type="radio" name="type" value="2" >Star
        <li> <input type="radio" name="type" value="3">Bus
        <li><input type="radio" name="type" value="4">Ring
        </ol>  </br>
        <li>IP Adress which is reserved for loopback testing is___________
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  >192.0.0.1
        <li>  <input type="radio" name="type1" value="2" id="satya1">127.0.0.1
        <li> <input type="radio" name="type1" value="3">255.255.255.255
        <li><input type="radio" name="type1" value="4" >10.255.255.255
            </ol>   </br>
        <li>________Cable accepts and transport signals in the form of light.
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Twisted pair
        <li>  <input type="radio" name="type2" value="2"  >Coaxial
        <li> <input type="radio" name="type2" value="3" id="satya2">Optical fiber
        <li><input type="radio" name="type2" value="4">Copper
            </ol> </br>
            <li>The size of the MAC Address and IPV4 addresses are ________ and __________ respectively.
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >64,32
            <li>  <input type="radio" name="type3" value="2"  >48,64
            <li> <input type="radio" name="type3" value="3" >64,48
            <li><input type="radio" name="type3" value="4" id="satya3">48,32
                </ol> </br>
                <li>The first address of a block of classless addresses if one of the addresses is 12.2.2.127/28 is ___________
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >12.2.2.0
                <li>  <input type="radio" name="type4" value="2" >12.2.2.96
                <li> <input type="radio" name="type4" value="3" id="satya4">12.2.2.112
                <li><input type="radio" name="type4" value="4" >12.2.2.28
                    </ol> </br>
                    <li>In classful addressing, When a direct delivery is made, both the deliverer and receiver have tha same __________.
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >netid
                    <li>  <input type="radio" name="type5" value="2" >hostid
                    <li> <input type="radio" name="type5" value="3">Ip adderess
                    <li><input type="radio" name="type5" value="4">Next hop address
                        </ol> </br>
                        <li>The TELNET server uses_________port and the TELNET client uses ___________ port.
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >an ephermeral;another ephemeral
                        <li>  <input type="radio" name="type6" value="2" >a well-known; another well-known 
                        <li> <input type="radio" name="type6" value="3">an ephemeral; a well-known
                        <li><input type="radio" name="type6" value="4" id="satya6">a well-known; an ephemeral
                            </ol> </br>
                            <li>The data connection can be opened___________, during an FTP session.
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >exactly once
                            <li>  <input type="radio" name="type7" value="2" >exactly twice
                            <li> <input type="radio" name="type7" value="3" id="sekhar7">as many times as necessary
                            <li><input type="radio" name="type7" value="4" >None of the above is correct
                                </ol> </br>
                                <li>HTTP uses the services of TCP on well-known port_______.
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >13
                                <li>  <input type="radio" name="type8" value="2" >21
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">80
                                <li><input type="radio" name="type8" value="4" >88       
                                    </ol> </br>
                                    <li>SMTP is a _________ protocol.                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Pull
                                    <li>  <input type="radio" name="type9" value="2" id="sekhar9">Push
                                    <li> <input type="radio" name="type9" value="3"  >Pull and Push
                                    <li><input type="radio" name="type9" value="4">Neither Pull nor Push
                                        </ol> 
        </ol> 
        <center><input type="submit" class="satya" value="Complete" name="complete"/></center>
</form>
 <button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>
</body>
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
<script>
function answer()
{

window.location="CN3KEY.PHP"
}
</script>
<script type="text/javascript">  
       let form3 = document.getElementById('form3')
        
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
    <script>
function back()
{<?php session_unset(); ?>
window.location="CN2.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="CN4.php"

        }
   
            </script>
 </html>