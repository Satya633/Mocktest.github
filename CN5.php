
<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
$phy=3145;
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
    if($ans2 == 2) $score++;
    if($ans3 == 4) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 2) $score++;
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
?><html>
<head>
<title>COMPUTER NETWORKS/Test-5</title>
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
        <center class="textcolor">  <h1 align="center">COMPUTER NETWORKS: TEST-5/5</h1>
        
        <h2 align="center" ></h2>
        <H3 align="center">ANSWER THE FOLLOWING QUESTIONS : </h3></center> 
         <ol type="1" class="font" ><form method="post" action="CN5.php" onsubmit="return validateForm()">
           <li>Which address identifies a process on a host?
            <ol type="A">
        <li > <input type="radio" name="type" value="1">Physical
        <li>  <input type="radio" name="type" value="2">Logical
        <li> <input type="radio" name="type" value="3" id="satya">Port
        <li><input type="radio" name="type" value="4">MAC
        </ol>  </br>
        <li>Which layer takes care of compression and encryption ?
<ol type="A">
        <li > <input type="radio" name="type1" value="1"  >Application
        <li>  <input type="radio" name="type1" value="2" id="satya1">Presentation
        <li> <input type="radio" name="type1" value="3">Session
        <li><input type="radio" name="type1" value="4" >Network
            </ol>   </br>
        <li>In which topology the network consists of direct link between two computers ?
            <ol type="A">
        <li > <input type="radio" name="type2" value="1" >Bus
        <li>  <input type="radio" name="type2" value="2"  >Ring
        <li> <input type="radio" name="type2" value="3" >Star
        <li><input type="radio" name="type2" value="4" id="satya2">P2P
            </ol> </br>
            <li>If n devices are connected by mesh topology that uses simplex connections, then how many cables or lines are required?
                <ol type="A">
            <li > <input type="radio" name="type3" value="1"  >n
            <li>  <input type="radio" name="type3" value="2" >n-1
            <li> <input type="radio" name="type3" value="3" id="satya3">n(n-1)
            <li><input type="radio" name="type3" value="4" >n(n-1)/2
                </ol> </br>
                <li>Which topology has minimal traffic?
                    <ol type="A">
                <li > <input type="radio" name="type4" value="1" id="satya4">Mesh
                <li>  <input type="radio" name="type4" value="2" >Ring
                <li> <input type="radio" name="type4" value="3" >Bus
                <li><input type="radio" name="type4" value="4" >Star
                    </ol> </br>
                    <li>Two hosts are 10,000 km apart and they are connected by single direct link of bandwidth 10<sup>6</sup>bits per second. What is the propagation time if the propogation speed along the link is 2 x 10<sup>8</sup>m/sec?
                        <ol type="A">
                    <li > <input type="radio" name="type5" value="1"  id="satya5">50 milli sec
                    <li>  <input type="radio" name="type5" value="2" >100 milli sec
                    <li> <input type="radio" name="type5" value="3">200 milli sec
                    <li><input type="radio" name="type5" value="4" >400 milli sec
                        </ol> </br>
                        <li>What is the class of the IP address 172.50.4.12? 
                            <ol type="A">
                        <li > <input type="radio" name="type6" value="1"  >Class D
                        <li>  <input type="radio" name="type6" value="2" >Class C
                        <li> <input type="radio" name="type6" value="3" id="satya6">Class B
                        <li><input type="radio" name="type6" value="4" >Class A
                            </ol> </br>
                            <li>The network address of 172.16.0.0/19 provides how many subnets and hosts?
                                <ol type="A">
                            <li > <input type="radio" name="type7" value="1" >7 subnets, each having 30 hosts 
                            <li>  <input type="radio" name="type7" value="2" id="sekhar7">8 subnets, having 8190 hosts
                            <li> <input type="radio" name="type7" value="3" >8 subnets, each having 2046 hosts
                            <li><input type="radio" name="type7" value="4" >7bsubnets, each having 2046 hosts
                                </ol> </br>
                                <li>Which protocol is used for sending emails and receiving emails respectively?
                                    <ol type="A">
                                <li > <input type="radio" name="type8" value="1" >POP3,SMTP
                                <li>  <input type="radio" name="type8" value="2" >IMAP, POP3
                                <li> <input type="radio" name="type8" value="3" id="sekhar8">SMTP,POP3
                                <li><input type="radio" name="type8" value="4" >IMAP, SMTP
                                    </ol> </br>
             <li>Consider the below 4 actions in a network. What is the order in which these actions should be executed for communication between a web browser and a web server ?</br>
<ol>
<li>The web browser requests a webpage using HTTP.</li>
<li>The web browser establishes a TCP connection with the web browser.</li>
<li>The web server sends the requested webpage using HTTP.</li>
<li>The web browser resolves the domain name using DNS.</li>
</ol>                           <ol type="A">
                                    <li > <input type="radio" name="type9" value="1" >4,2,1,3
                                    <li>  <input type="radio" name="type9" value="2" id="sekhar9">1,2,3,4
                                    <li> <input type="radio" name="type9" value="3"  >4,1,2,3
                                    <li><input type="radio" name="type9" value="4">2,4,1,3
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

window.location="CN5KEY.PHP"
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
window.location="CN4.php"
}
        function Next()
        {<?php session_unset(); ?>
          window.location="CN5.php"

        }
   
            </script>
 </html>