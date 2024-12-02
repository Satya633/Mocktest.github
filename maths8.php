<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
    $phy = 131208198;
    $ans1 = $_POST["type1"];
    $ans2 = $_POST["type2"];
    $ans3 = $_POST["type3"];
    $ans4 = $_POST["type4"];
    $ans5 = $_POST["type5"];
    $ans6 = $_POST["type6"];
    $ans7 = $_POST["type7"];
    $ans8 = $_POST["type8"];
    $ans9 = $_POST["type9"];
    $ans0 = $_POST["type10"];
    
    $score = 0;
    if($ans1 == 3) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 3) $score++;
    if($ans5 == 3) $score++;
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
<title>GENERAL/MATHS/Test-8</title>
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
                    <li><a href="genral.html">HOME</a><li></li>
                    <li><a href="about.html">ABOUT</a><li></li>
                    <li><a href="services.html">SERVICE</a><li></li>
                    <li><a href="#">TEST-8</a>
<ul class="dropdown">
<li><a href="maths.php">TEST-1</a></li>
<li><a href="maths2.php">TEST-2</a></li>
<li><a href="maths3.php">TEST-3</a></li>
<li><a href="maths4.php">TEST-4</a></li>
<li><a href="maths5.php">TEST-5</a></li>
<li><a href="maths6.php">TEST-6</a></li>
<li><a href="maths7.php">TEST-7</a></li>
<li><a href="maths9.php">TEST-9</a></li>
<li><a href="maths10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center"> MATHMATICS - TEST:8/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="maths8.php" onsubmit="return validateForm()">
<li>The slope of the tangent to the curve \( y = x^2 \) at \( x = 2 \) is:
    <ol type="A">
      <li><input type="radio" name="type1" value=1>2</li>
      <li><input type="radio" name="type1" value=2>4</li>
      <li><input type="radio" name="type1" value=3 id="ans1">4</li>
      <li><input type="radio" name="type1" value=4>1</li>
    </ol></br>

    <li>The derivative of \( f(x) = 3x^2 + 5x + 2 \) is:
    <ol type="A">
      <li><input type="radio" name="type2" value=1> \( 6x + 5 \)</li>
      <li><input type="radio" name="type2" value=2> \( 6x + 2 \)</li>
      <li><input type="radio" name="type2" value=3 id="ans2"> \( 6x + 5 \)</li>
      <li><input type="radio" name="type2" value=4> \( 3x + 5 \)</li>
    </ol></br>

    <li>The integral of \( \cos x \) is:
    <ol type="A">
      <li><input type="radio" name="type3" value=1> \( \sin x \)</li>
      <li><input type="radio" name="type3" value=2> \( -\sin x \)</li>
      <li><input type="radio" name="type3" value=3 id="ans3"> \( \sin x \)</li>
      <li><input type="radio" name="type3" value=4> \( -\cos x \)</li>
    </ol></br>

    <li>The sum of the angles of a triangle is:
    <ol type="A">
      <li><input type="radio" name="type4" value=1> 180°</li>
      <li><input type="radio" name="type4" value=2> 360°</li>
      <li><input type="radio" name="type4" value=3 id="ans4"> 180°</li>
      <li><input type="radio" name="type4" value=4> 90°</li>
    </ol></br>

    <li>The quadratic equation \( x^2 - 4x + 3 = 0 \) has the roots:
    <ol type="A">
      <li><input type="radio" name="type5" value=1>1, 3</li>
      <li><input type="radio" name="type5" value=2>2, 3</li>
      <li><input type="radio" name="type5" value=3 id="ans5">1, 3</li>
      <li><input type="radio" name="type5" value=4>1, 4</li>
    </ol></br>

    <li>The value of \( \log_{10} 100 \) is:
    <ol type="A">
      <li><input type="radio" name="type6" value=1>1</li>
      <li><input type="radio" name="type6" value=2>2</li>
      <li><input type="radio" name="type6" value=3 id="ans6">2</li>
      <li><input type="radio" name="type6" value=4>10</li>
    </ol></br>

    <li>The area of a circle with radius \( r \) is given by:
    <ol type="A">
      <li><input type="radio" name="type7" value=1>\( \pi r^2 \)</li>
      <li><input type="radio" name="type7" value=2>\( 2\pi r \)</li>
      <li><input type="radio" name="type7" value=3 id="ans7"> \( \pi r^2 \)</li>
      <li><input type="radio" name="type7" value=4>\( \pi r \)</li>
    </ol></br>

    <li>The distance between the points \( (2, 3) \) and \( (5, 7) \) is:
    <ol type="A">
      <li><input type="radio" name="type8" value=1>4</li>
      <li><input type="radio" name="type8" value=2>5</li>
      <li><input type="radio" name="type8" value=3 id="ans8">5</li>
      <li><input type="radio" name="type8" value=4>3</li>
    </ol></br>

    <li>The solution to the system of equations \( x + y = 5 \) and \( 2x - y = 3 \) is:
    <ol type="A">
      <li><input type="radio" name="type9" value=1>\( x = 2, y = 3 \)</li>
      <li><input type="radio" name="type9" value=2>\( x = 3, y = 2 \)</li>
      <li><input type="radio" name="type9" value=3 id="ans9"> \( x = 2, y = 3 \)</li>
      <li><input type="radio" name="type9" value=4>\( x = 1, y = 4 \)</li>
    </ol></br>

    <li>The value of \( \frac{d}{dx} (x^3) \) is:
    <ol type="A">
      <li><input type="radio" name="type10" value=1> \( 3x^2 \)</li>
      <li><input type="radio" name="type10" value=2> \( 2x^3 \)</li>
      <li><input type="radio" name="type10" value=3 id="ans10"> \( 3x^2 \)</li>
      <li><input type="radio" name="type10" value=4> \( x^2 \)</li>
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
window.location="maths8key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "maths9.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "maths7.php";
}
</script>

</html>