
<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3142;
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
    if($ans1 == 3) $score++;
    if($ans2 == 1) $score++;
    if($ans3 == 1) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 4) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 1) $score++;
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
        <center class="textcolor">  <h1 align="center">COMPUTER NETWORKS: TEST-2/5</h1>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="CN2.php" onsubmit="return validateForm()">
           <li>Among the following layers which layer is responsible for token management?
            <ol type="A">
        <li > <input type="radio" name="type" value="1">Physical
        <li>  <input type="radio" name="type" value="2"id="satya">Application
        <li> <input type="radio" name="type" value="3">Session
        <li><input type="radio" name="type" value="4">Network
        </ol>  </br>
        <li>In TCP/IP, The protocol SMTP is used in Which layer?
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  id="satya1">Apllication
        <li>  <input type="radio" name="type1" value="2" >Host-Network
        <li> <input type="radio" name="type1" value="3">Transport
        <li><input type="radio" name="type1" value="4" >Asssociation
            </ol>   </br>
        <li>Sending a message to a particular group can be named as 
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" id="satya2">Multicasting
        <li>  <input type="radio" name="type2" value="2"  >Broadcasting
        <li> <input type="radio" name="type2" value="3">point-point
        <li><input type="radio" name="type2" value="4">Unicast   
            </ol> </br>
            <li>Among the following Topologies which topology is the reliable one
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >Star
            <li>  <input type="radio" name="type3" value="2"  >Ring
            <li> <input type="radio" name="type3" value="3" id="satya3">Mesh
            <li><input type="radio" name="type3" value="4" >Bus
                </ol> </br>
                <li>Which of the following cables work based on Light?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" >co_axial
                <li>  <input type="radio" name="type4" value="2" >copper
                <li> <input type="radio" name="type4" value="3">twisted pair
                <li><input type="radio" name="type4" value="4" id="satya4">optical
                    </ol> </br>
                    <li>Among the following devices which is used for signal strengths?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >Repeaters
                    <li>  <input type="radio" name="type5" value="2" >Hubs
                    <li> <input type="radio" name="type5" value="3">Switches
                    <li><input type="radio" name="type5" value="4">bridges    
                        </ol> </br>
                        <li>In which of the following networks token bus will be used ?
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  > point_point
                        <li>  <input type="radio" name="type6" value="2" id="satya6">Broadcast
                        <li> <input type="radio" name="type6" value="3">Unicast
                        <li><input type="radio" name="type6" value="4" >Multicast 
                            </ol> </br>
                            <li>When an email is sent from SMTP protocol which port will receive at the destination?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">25
                            <li>  <input type="radio" name="type7" value="2" >31
                            <li> <input type="radio" name="type7" value="3">45
                            <li><input type="radio" name="type7" value="4" >86
                                </ol> </br>
                                <li>The IP address 192.168.2.42 belongs to which of the following ?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >class A
                                <li>  <input type="radio" name="type8" value="2" >class B
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">class c
                                <li><input type="radio" name="type8" value="4" >class D        
                                    </ol> </br>
                                    <li>When searching a website which of the following protocol is helpful ?
                                        <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >SMTP
                                    <li>  <input type="radio" name="type9" value="2" id="sekhar9">HTTP
                                    <li> <input type="radio" name="type9" value="3"  >FTP
                                    <li><input type="radio" name="type9" value="4" >TELNET
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

window.location="CN2KEY.PHP"
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
window.location="cn.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="CN3.php"

        }
   
            </script>
 </html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              