<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3141;
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
    if($ans2 == 2) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 2) $score++;
    if($ans6 == 2) $score++;
    if($ans7 == 4) $score++;
    if($ans8 == 1) $score++;
    if($ans9 == 3) $score++;
    if($ans0 == 3) $score++;
    
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
<title>COMPUTER NETWORKS/Test-1</title>
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
        <center class="textcolor">  <h1 align="center">COMPUTER NETWORKS: TEST-1/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="cn.php" onsubmit="return validateForm()">
           <li>PING stands for 
            <ol type="A">
        <li > <input type="radio" name="type" value="1">Packet internal gateway
        <li>  <input type="radio" name="type" value="2" id="satya"> Packet internet gateway
        <li> <input type="radio" name="type" value="3">Peer interval gateway
        <li><input type="radio" name="type" value="4"> packet internet groper
        </ol>  </br>
        <li>Which of the following is the process of managing data transfer between components with in the netwirk ?
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  >Data control
        <li>  <input type="radio" name="type1" value="2" >Flow control
        <li> <input type="radio" name="type1" value="3">Hop count
        <li><input type="radio" name="type1" value="4" id="satya1">Error control
            </ol>   </br>
        <li>Which of the following layer is not present in TCP/IP?
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Internet Layer
        <li>  <input type="radio" name="type2" value="2" id="satya2" >Network Layer
        <li> <input type="radio" name="type2" value="3">Transport Layer
        <li><input type="radio" name="type2" value="4">Physical Layer     
            </ol> </br>
            <li>Number of networks ID in class A networks are
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >116
            <li>  <input type="radio" name="type3" value="2"  id="satya3">126
            <li> <input type="radio" name="type3" value="3">156
            <li><input type="radio" name="type3" value="4" >176     
                </ol> </br>
                <li>The IPv4 172.16.255.10 belongs to
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >Class A network
                <li>  <input type="radio" name="type4" value="2" id="satya4">Class B network
                <li> <input type="radio" name="type4" value="3">Class c network
                <li><input type="radio" name="type4" value="4">Class D network      
                    </ol> </br>
                    <li>Checksum field takes care of only
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >Connection Oriented
                    <li>  <input type="radio" name="type5" value="2" >Connection less
                    <li> <input type="radio" name="type5" value="3">Framing
                    <li><input type="radio" name="type5" value="4">Acknowledgement       
                        </ol> </br>
                        <li>Which of the following is not the application of TCP ?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  > WWW
                        <li>  <input type="radio" name="type6" value="2" >E-mail
                        <li> <input type="radio" name="type6" value="3">FTP
                        <li><input type="radio" name="type6" value="4" id="satya6">DNS  
                            </ol> </br>
                            <li>TCP is 
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">Connection oriented
                            <li>  <input type="radio" name="type7" value="2" >Connection Less
                            <li> <input type="radio" name="type7" value="3">Not use check sum
                            <li><input type="radio" name="type7" value="4" >Not reliable in delivering the messages
                                </ol> </br>
                                <li>The Length of the internet protocol is 
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >8 bits
                                <li>  <input type="radio" name="type8" value="2" >16 bits
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">32 bits
                                <li><input type="radio" name="type8" value="4" >64 bits          
                                    </ol> </br>
                                    <li> IEEE 802.3 is 
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >Token bus
                                    <li>  <input type="radio" name="type9" value="2" >Token Ring
                                    <li> <input type="radio" name="type9" value="3" id="sekhar9" >Ethernet
                                    <li><input type="radio" name="type9" value="4">Hub
                                        </ol> 
        </ol> 
        <center><input type="submit" class="satya" name="complete" value="Complete"/></center>
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

window.location="CNKEY.PHP"
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
window.location="course.html"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="CN2.php"

        }
   
            </script>
 </html>