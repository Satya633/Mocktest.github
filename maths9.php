<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
    $phy = 131208199;
    $ans1 = $_POST["type20"];
    $ans2 = $_POST["type21"];
    $ans3 = $_POST["type22"];
    $ans4 = $_POST["type23"];
    $ans5 = $_POST["type24"];
    $ans6 = $_POST["type25"];
    $ans7 = $_POST["type26"];
    $ans8 = $_POST["type27"];
    $ans9 = $_POST["type28"];
    $ans0 = $_POST["type29"];
    
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
<title>GENERAL/MATHS/Test-9</title>
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
                    <li><a href="#">TEST-9</a>
<ul class="dropdown">
<li><a href="maths.php">TEST-1</a></li>
<li><a href="maths2.php">TEST-2</a></li>
<li><a href="maths3.php">TEST-3</a></li>
<li><a href="maths4.php">TEST-4</a></li>
<li><a href="maths5.php">TEST-5</a></li>
<li><a href="maths6.php">TEST-6</a></li>
<li><a href="maths7.php">TEST-7</a></li>
<li><a href="maths8.php">TEST-8</a></li>
<li><a href="maths10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center"> MATHMATICS - TEST:9/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="maths9.php" onsubmit="return validateForm()">
 <li>The value of \( \tan 45^\circ \) is:
    <ol type="A">
      <li><input type="radio" name="type20" value=1>1</li>
      <li><input type="radio" name="type20" value=2>0</li>
      <li><input type="radio" name="type20" value=3 id="ans20">1</li>
      <li><input type="radio" name="type20" value=4> \( \infty \)</li>
    </ol></br>

    <li>The solution of the equation \( x^2 + 3x + 2 = 0 \) is:
    <ol type="A">
      <li><input type="radio" name="type21" value=1>-1, -2</li>
      <li><input type="radio" name="type21" value=2>1, 2</li>
      <li><input type="radio" name="type21" value=3 id="ans21">-1, -2</li>
      <li><input type="radio" name="type21" value=4>1, -2</li>
    </ol></br>

    <li>The value of \( \log_{2} 8 \) is:
    <ol type="A">
      <li><input type="radio" name="type22" value=1>2</li>
      <li><input type="radio" name="type22" value=2>3</li>
      <li><input type="radio" name="type22" value=3 id="ans22">3</li>
      <li><input type="radio" name="type22" value=4>1</li>
    </ol></br>

    <li>The length of the diagonal of a rectangle with sides 3 and 4 is:
    <ol type="A">
      <li><input type="radio" name="type23" value=1>5</li>
      <li><input type="radio" name="type23" value=2>7</li>
      <li><input type="radio" name="type23" value=3 id="ans23">5</li>
      <li><input type="radio" name="type23" value=4>6</li>
    </ol></br>

    <li>The sum of the angles of a quadrilateral is:
    <ol type="A">
      <li><input type="radio" name="type24" value=1>180°</li>
      <li><input type="radio" name="type24" value=2>360°</li>
      <li><input type="radio" name="type24" value=3 id="ans24">360°</li>
      <li><input type="radio" name="type24" value=4>270°</li>
    </ol></br>

    <li>The expansion of \( (x - 2)^2 \) is:
    <ol type="A">
      <li><input type="radio" name="type25" value=1>\( x^2 - 4x + 4 \)</li>
      <li><input type="radio" name="type25" value=2> \( x^2 + 4x + 4 \)</li>
      <li><input type="radio" name="type25" value=3 id="ans25"> \( x^2 - 4x + 4 \)</li>
      <li><input type="radio" name="type25" value=4>\( x^2 - 2x - 4 \)</li>
    </ol></br>

    <li>The value of \( \frac{d}{dx} \left( e^x \right) \) is:
    <ol type="A">
      <li><input type="radio" name="type26" value=1>\( e^x \)</li>
      <li><input type="radio" name="type26" value=2> \( e^x + C \)</li>
      <li><input type="radio" name="type26" value=3 id="ans26"> \( e^x \)</li>
      <li><input type="radio" name="type26" value=4>\( 1 \)</li>
    </ol></br>

    <li>The ratio of the circumference to the diameter of a circle is:
    <ol type="A">
      <li><input type="radio" name="type27" value=1> \( \pi \)</li>
      <li><input type="radio" name="type27" value=2>2</li>
      <li><input type="radio" name="type27" value=3 id="ans27"> \( \pi \)</li>
      <li><input type="radio" name="type27" value=4>1</li>
    </ol></br>

    <li>The solution to the system of equations \( 2x + y = 10 \) and \( x - y = 1 \) is:
    <ol type="A">
      <li><input type="radio" name="type28" value=1>\( x = 3, y = 4 \)</li>
      <li><input type="radio" name="type28" value=2> \( x = 4, y = 3 \)</li>
      <li><input type="radio" name="type28" value=3 id="ans28"> \( x = 3, y = 4 \)</li>
      <li><input type="radio" name="type28" value=4>\( x = 2, y = 5 \)</li>
    </ol></br>

    <li>The area of a right triangle with base \( b \) and height \( h \) is:
    <ol type="A">
      <li><input type="radio" name="type29" value=1>\( \frac{1}{2} b \cdot h \)</li>
      <li><input type="radio" name="type29" value=2> \( b \cdot h \)</li>
      <li><input type="radio" name="type29" value=3 id="ans29"> \( \frac{1}{2} b \cdot h \)</li>
      <li><input type="radio" name="type29" value=4>\( b^2 + h^2 \)</li>
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
window.location="maths9key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "maths10.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "maths8.php";
}
</script>

</html>