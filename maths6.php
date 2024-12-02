<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
    $phy = 131208196;
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
    if($ans2 == 2) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 1) $score++;
    if($ans6 == 3) $score++;
    if($ans7 == 3) $score++;
    if($ans8 == 3) $score++;
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
<title>GENERAL/MATHS/Test-6</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
<script type="text/javascript" async
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
  </script>
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
                    <li><a href="#">TEST-6</a>
<ul class="dropdown">
<li><a href="maths.php">TEST-1</a></li>
<li><a href="maths2.php">TEST-2</a></li>
<li><a href="maths3.php">TEST-3</a></li>
<li><a href="maths4.php">TEST-4</a></li>
<li><a href="maths5.php">TEST-5</a></li>
<li><a href="maths7.php">TEST-7</a></li>
<li><a href="maths8.php">TEST-8</a></li>
<li><a href="maths9.php">TEST-9</a></li>
<li><a href="maths10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center"> MATHMATICS - TEST:6/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="maths6.php" onsubmit="return validateForm()">
<li>If \( x^2 - 5x + 6 = 0 \), what are the roots of the equation?
<ol type="A">
<li><input type="radio" name="type" value=1>1, 5</li>
<li><input type="radio" name="type" value=2 id="ans">2, 3</li>
<li><input type="radio" name="type" value=3>3, 5</li>
<li><input type="radio" name="type" value=4>0, 6</li>
</ol></br>

<li>The derivative of \( y = x^2 + 3x + 4 \) with respect to \( x \) is:
<ol type="A">
<li><input type="radio" name="type1" value=1>2x + 3</li>
<li><input type="radio" name="type1" value=2 id="ans1">2x + 3</li>
<li><input type="radio" name="type1" value=3>x + 4</li>
<li><input type="radio" name="type1" value=4>3x + 4</li>
</ol></br>

<li>What is the value of \( \int x dx \)?
<ol type="A">
<li><input type="radio" name="type2" value=1>\( x^2 + C \)</li>
<li><input type="radio" name="type2" value=2>\( \frac{x^2}{2} \)</li>
<li><input type="radio" name="type2" value=3 id="ans2">\( \frac{x^2}{2} + C \)</li>
<li><input type="radio" name="type2" value=4>\( \frac{x}{2} + C \)</li>
</ol></br>

<li>What is the sum of the series \( 1 + 2 + 3 + \dots + n \)?
<ol type="A">
<li><input type="radio" name="type3" value=1>\( n(n+1) \)</li>
<li><input type="radio" name="type3" value=2>\( n(n-1)/2 \)</li>
<li><input type="radio" name="type3" value=3 id="ans3">\( n(n+1)/2 \)</li>
<li><input type="radio" name="type3" value=4>\( n^2 \)</li>
</ol></br>

<li>The value of \( \sin 45^\circ \) is:
<ol type="A">
<li><input type="radio" name="type4" value=1 id="ans4">\( \frac{\sqrt{2}}{2} \)</li>
<li><input type="radio" name="type4" value=2>\( \frac{1}{2} \)</li>
<li><input type="radio" name="type4" value=3>1</li>
<li><input type="radio" name="type4" value=4>\( \sqrt{2} \)</li>
</ol></br>
<li>What is the value of \( (a+b)^2 - (a-b)^2 \)?
<ol type="A">
<li><input type="radio" name="type5" value=1>\( 2ab \)</li>
<li><input type="radio" name="type5" value=2>\( 4ab \)</li>
<li><input type="radio" name="type5" value=3 id="ans5">\( 4ab \)</li>
<li><input type="radio" name="type5" value=4>\( ab \)</li>
</ol></br>

<li>If \( \tan \theta = 1 \), then \( \theta \) is:
<ol type="A">
<li><input type="radio" name="type6" value=1>\( 30^\circ \)</li>
<li><input type="radio" name="type6" value=2>\( 45^\circ \)</li>
<li><input type="radio" name="type6" value=3 id="ans6">\( 45^\circ \)</li>
<li><input type="radio" name="type6" value=4>\( 60^\circ \)</li>
</ol></br>

<li>Evaluate \( \lim_{x \to 0} \frac{\sin x}{x} \):
<ol type="A">
<li><input type="radio" name="type7" value=1>0</li>
<li><input type="radio" name="type7" value=2>1</li>
<li><input type="radio" name="type7" value=3 id="ans7">1</li>
<li><input type="radio" name="type7" value=4>\( \infty \)</li>
</ol></br>

<li>The area of a triangle with sides \( a = 3, b = 4, c = 5 \) is:
<ol type="A">
<li><input type="radio" name="type8" value=1>\( 6 \)</li>
<li><input type="radio" name="type8" value=2>\( 7 \)</li>
<li><input type="radio" name="type8" value=3 id="ans8">\( 6 \)</li>
<li><input type="radio" name="type8" value=4>\( 5 \)</li>
</ol></br>

<li>If \( \cos^2 \theta + \sin^2 \theta = 1 \), what is \( \cos^2 30^\circ \)?
<ol type="A">
<li><input type="radio" name="type9" value=1>\( \frac{1}{2} \)</li>
<li><input type="radio" name="type9" value=2>\( \frac{3}{4} \)</li>
<li><input type="radio" name="type9" value=3 id="ans9">\( \frac{3}{4} \)</li>
<li><input type="radio" name="type9" value=4>\( \frac{2}{3} \)</li>
</ol></br>
</ol>
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
window.location="maths6key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "maths7.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "maths5.php";
}
</script>

</html>