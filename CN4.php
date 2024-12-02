
<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3144;
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
    if($ans3 == 1) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
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
<title>COMPUTER NETWORKS/Test-4</title>
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
        <center class="textcolor">  <h1 align="center">COMPUTER NETWORKS: TEST-4/5</h1>
       
        <h2 align="center" ></h2>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="CN4.php" onsubmit="return validateForm()">
           <li>In the layer hierarchy as the data packet moves from the upper to the lower layers, headers are__________
            <ol type="A">
        <li > <input type="radio" name="type" value="1" id="satya">Added
        <li>  <input type="radio" name="type" value="2" >Removed
        <li> <input type="radio" name="type" value="3" >Rearranged
        <li><input type="radio" name="type" value="4" >Modified
        </ol>  </br>
        <li>Three or more devices share a link in ______________ connection.
            <ol type="A">
        <li > <input type="radio" name="type1" value="1"  >Unipoint
        <li>  <input type="radio" name="type1" value="2" id="satya1">Multipoint
        <li> <input type="radio" name="type1" value="3">Point to Point
        <li><input type="radio" name="type1" value="4" >Simplex
            </ol>   </br>
        <li>How many layers are present in the Internet protocol stack(TCP/IP model)?
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" id="satya2">5
        <li>  <input type="radio" name="type2" value="2"  >7
        <li> <input type="radio" name="type2" value="3" >6
        <li><input type="radio" name="type2" value="4">10
            </ol> </br>
            <li>Delimiting and synchronization of data exchange is provided by___________
                <ol type="A">
            <li > <input type="radio" name="type3" value="1" >Application Layer
            <li>  <input type="radio" name="type3" value="2"  id="satya3">Session Layer
            <li> <input type="radio" name="type3" value="3" >Transport Layer
            <li><input type="radio" name="type3" value="4" >Link Layer
                </ol> </br>
                <li>________allows you to connect and login to a remote computer
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">Telnet
                <li>  <input type="radio" name="type4" value="2" >FTP
                <li> <input type="radio" name="type4" value="3" >HTTP
                <li><input type="radio" name="type4" value="4" >SMTP
                    </ol> </br>
                    <li>Which network topology requires a central controller or hub ?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1" id="satya5" >Star
                    <li>  <input type="radio" name="type5" value="2" >Mesh
                    <li> <input type="radio" name="type5" value="3">Ring
                    <li><input type="radio" name="type5" value="4">Bus
                        </ol> </br>
                        <li>In TDM, slots are further divided into __________
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >Seconds
                        <li>  <input type="radio" name="type6" value="2" id="satya6">Frames
                        <li> <input type="radio" name="type6" value="3">Packets
                        <li><input type="radio" name="type6" value="4" >Bits
                            </ol> </br>
                            <li>Automatic repeat request error management mechanism is provided by _________
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" id="sekhar7">logical link control sublayer
                            <li>  <input type="radio" name="type7" value="2" >media access control sublayer
                            <li> <input type="radio" name="type7" value="3" >network interface control sublayer
                            <li><input type="radio" name="type7" value="4" >application access control sublayer
                                </ol> </br>
                                <li>In classful addressing a large part of available address are _____________
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >Organized
                                <li>  <input type="radio" name="type8" value="2" >Blocked
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">Wasted
                                <li><input type="radio" name="type8" value="4" >Communicated   
                                    </ol> </br>
                                    <li>The time taken by a packet to travel from client to server and then back to the Client is called ________                                     <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >STT
                                    <li>  <input type="radio" name="type9" value="2" id="sekhar9">RTT
                                    <li> <input type="radio" name="type9" value="3"  >PTT
                                    <li><input type="radio" name="type9" value="4">FTP
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

window.location="CN4KEY.php"
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
window.location="CN3.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="CN5.php"

        }
   
            </script>
 </html>