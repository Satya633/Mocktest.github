<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
    $phy = 168251;
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
    if($ans2 == 3) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 2) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 1) $score++;
    if($ans7 == 1) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 4) $score++;
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
<title>GENERAL/PHYSICS/Test-1</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
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
                    <li><a href="general.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="#">TEST-1</a>
<ul class="dropdown">
<li><a href="phy2.php">TEST-2</a></li>
<li><a href="phy3.php">TEST-3</a></li>
<li><a href="phy4.php">TEST-4</a></li>
<li><a href="phy5.php">TEST-5</a></li>
<li><a href="phy6.php">TEST-6</a></li>
<li><a href="phy7.php">TEST-7</a></li>
<li><a href="phy8.php">TEST-8</a></li>
<li><a href="phy9.php">TEST-9</a></li>
<li><a href="phy10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center"> PHYSICS - TEST:1/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="phy.php" onsubmit="return validateForm()">
<li>The Dimension of the Ratio of angular momentum and linear momentum is 
<ol type="A">
<li><input type="radio" name="type" value=1 >L<sup>0
<li><input type="radio" name="type" value=2 id="ans">L<sup>1
<li><input type="radio" name="type" value=3 >L<sup>2
<li><input type="radio" name="type" value=4 >L<sup>3
</ol></br>
<li>One Fermi ism equivalent to 
<ol type="A">
<li><input type="radio" name="type1" value=1 >10<sup>-12</sup> meter
<li><input type="radio" name="type1" value=2 >10<sup>12</sup> meter
<li><input type="radio" name="type1" value=3 id="ans1">10<sup>-15</sup> meter
<li><input type="radio" name="type1" value=4 >10<sup>15</sup> meter
</ol></br>
<li>A cat is situated at point A (0,3,4) and a rat is situated at a point (5,3,-8).
The Cat is free to move but the rat is always at rest. Find the minimum distance travelled by cat to catch the rat
<ol type="A">
<li><input type="radio" name="type2" value=1 >5 units
<li><input type="radio" name="type2" value=2 >12 units 
<li><input type="radio" name="type2" value=3 id="ans2">13 units
<li><input type="radio" name="type2" value=4 >17 units
</ol></br>
<li>Find the values of X and Y for which vector -><sub>A</sub>=(6^i+X^j+2^k) and -><sub>B</sub>=(5^i+6^j-Y^k) may be Parallel
<ol type="A">
<li><input type="radio" name="type3" value=1 >X= 0, Y= 2/3
<li><input type="radio" name="type3" value=2 id="ans3">X= -36/5, Y= 5/3
<li><input type="radio" name="type3" value=3 >X= -15/3, Y= 5/3
<li><input type="radio" name="type3" value=4 >X= 36/5, Y= 15/4
</ol></br>
<li>The Velocity of a body moving along a straight line with uniform deceleration 'a' reduces by 3/4 of its initial velocity. The total time of motion of the body is 
<ol type="A">
<li><input type="radio" name="type4" value=1 id="ans4">3u/4a
<li><input type="radio" name="type4" value=2 >4a/3u
<li><input type="radio" name="type4" value=3 >3u x 4a
<li><input type="radio" name="type4" value=4 >Zero
</ol></br>
<li>A Stone thrown vertically upwards with a speed of 'u' m/s attains a height 'h1'. Another stone thrown vertically upwards from the same point with a speed of u/s m/s attains a height 'h2' . Choose the correct relation
<ol type="A">
<li><input type="radio" name="type5" value=1 id="ans5">h2=h1/9
<li><input type="radio" name="type5" value=2 >h2=h1/19
<li><input type="radio" name="type5" value=3 >h2=h1/3
<li><input type="radio" name="type5" value=4 >h2=3h1
</ol></br>
<li>The Horizontal range of projectile is 4&Sqrt;3 times of its maximum height. Its angle of projectile will be 
<ol type="A">
<li><input type="radio" name="type6" value=1 id="ans6">30<sup>0</sup>
<li><input type="radio" name="type6" value=2 >60<sup>0</sup>
<li><input type="radio" name="type6" value=3 >90<sup>0</sup>
<li><input type="radio" name="type6" value=4 >45<sup>0</sup>
</ol></br>
<li>The Range of Projectile fired at an angle of 15<sup>0</sup> is 30m. If it is fired with the same speed at an angle of 45<sup>0</sup>, its range will be 
<ol type="A">
<li><input type="radio" name="type7" value=1 >50m 
<li><input type="radio" name="type7" value=2 >30m
<li><input type="radio" name="type7" value=3 id="ans7">60m
<li><input type="radio" name="type7" value=4 >100m
</ol></br>
<li>When a body slides down an inclined plane with of coefficient of friction as &mu;, then its acceleratiion is given by 
<ol type="A">
<li><input type="radio" name="type8" value=1 >g(&mu; sin&theta; + cos&theta;)
<li><input type="radio" name="type8" value=2 >g(&mu; sin&theta; - cos&theta;)
<li><input type="radio" name="type8" value=3 >g(sin&theta; + &mu; cos&theta;)
<li><input type="radio" name="type8" value=4 id="ans8">g(sin&theta; -&mu; cos&theta;)
</ol></br>
<li> A body is in equilibrium on a rough inclined plane under its own weight. If the angle of inclination of the inclined plane is '&alpha;' and the angle of friction is '&lambda;' then 
<ol type="A">
<li><input type="radio" name="type9" value=1 >&alpha; > &lambda;
<li><input type="radio" name="type9" value=2 >&alpha; > &lambda;/2
<li><input type="radio" name="type9" value=3 id="ans9">&alpha; = &lambda;
<li><input type="radio" name="type9" value=4 >&alpha; >= &lambda;
</ol></br></ol>
<center><button class="satya" name="complete">Complete</button></center></form>
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
</div>

<button style="display:inline-block;" class="satya" onclick="back()"><< Back</button>
<button style="display:inline-block;position:absolute;left:90%" class="satya" onclick="Next()">Next >></button>


</body>
           
  <script type="text/javascript">  
       let form3 = document.getElementById('form3')
          function closeform3(){
        form3.classList.remove('open-form3');
        }
</script>
<script>
function answer(){
window.location="phykey.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "phy2.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "general.html";
}
</script>

</html>