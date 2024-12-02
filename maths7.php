<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
    $phy = 131208197;
    $ans1 = $_POST["type10"];
    $ans2 = $_POST["type11"];
    $ans3 = $_POST["type12"];
    $ans4 = $_POST["type13"];
    $ans5 = $_POST["type14"];
    $ans6 = $_POST["type15"];
    $ans7 = $_POST["type16"];
    $ans8 = $_POST["type17"];
    $ans9 = $_POST["type18"];
    $ans0 = $_POST["type19"];
    
    $score = 0;
    if($ans1 == 3) $score++;
    if($ans2 == 2) $score++;
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
<title>GENERAL/MATHS/Test-7</title>
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
                    <li><a href="#">TEST-7</a>
<ul class="dropdown">
<li><a href="maths.php">TEST-1</a></li>
<li><a href="maths2.php">TEST-2</a></li>
<li><a href="maths3.php">TEST-3</a></li>
<li><a href="maths4.php">TEST-4</a></li>
<li><a href="maths5.php">TEST-5</a></li>
<li><a href="maths6.php">TEST-6</a></li>
<li><a href="maths8.php">TEST-8</a></li>
<li><a href="maths9.php">TEST-9</a></li>
<li><a href="maths10.php">TEST-10</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center"> MATHMATICS - TEST:7/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="maths7.php" onsubmit="return validateForm()">
<li>The volume of a sphere with radius \( r \) is given by:
<ol type="A">
<li><input type="radio" name="type10" value=1>\( \frac{4}{3} \pi r^2 \)</li>
<li><input type="radio" name="type10" value=2>\( \frac{4}{3} \pi r^3 \)</li>
<li><input type="radio" name="type10" value=3 id="ans10">\( \frac{4}{3} \pi r^3 \)</li>
<li><input type="radio" name="type10" value=4>\( \pi r^3 \)</li>
</ol></br>

<li>What is the solution to the quadratic equation \( x^2 - 7x + 10 = 0 \)?
<ol type="A">
<li><input type="radio" name="type11" value=1>2, 5</li>
<li><input type="radio" name="type11" value=2 id="ans11">2, 5</li>
<li><input type="radio" name="type11" value=3>3, 7</li>
<li><input type="radio" name="type11" value=4>0, 10</li>
</ol></br>

<li>The slope of a line passing through \( (2,3) \) and \( (5,7) \) is:
<ol type="A">
<li><input type="radio" name="type12" value=1>1</li>
<li><input type="radio" name="type12" value=2>1.5</li>
<li><input type="radio" name="type12" value=3 id="ans12">1.33</li>
<li><input type="radio" name="type12" value=4>2</li>
</ol></br>

<li>The sum of the first \( n \) terms of an arithmetic progression is:
<ol type="A">
<li><input type="radio" name="type13" value=1>\( n/2 [a + l] \)</li>
<li><input type="radio" name="type13" value=2>\( n [a + l]/2 \)</li>
<li><input type="radio" name="type13" value=3 id="ans13">\( n/2 [a + l] \)</li>
<li><input type="radio" name="type13" value=4>\( [a + l]/n \)</li>
</ol></br>

<li>What is the solution for \( 2^x = 16 \)?
<ol type="A">
<li><input type="radio" name="type14" value=1>2</li>
<li><input type="radio" name="type14" value=2>3</li>
<li><input type="radio" name="type14" value=3 id="ans14">4</li>
<li><input type="radio" name="type14" value=4>5</li>
</ol></br>
<li>If the matrix \( A = \begin{bmatrix} 1 & 2 \\ 3 & 4 \end{bmatrix} \), then \( \text{det}(A) \) is:
<ol type="A">
<li><input type="radio" name="type15" value=1>10</li>
<li><input type="radio" name="type15" value=2>-2</li>
<li><input type="radio" name="type15" value=3 id="ans15">-2</li>
<li><input type="radio" name="type15" value=4>6</li>
</ol></br>

<li>The value of \( \int_0^\pi \sin x \, dx \) is:
<ol type="A">
<li><input type="radio" name="type16" value=1>0</li>
<li><input type="radio" name="type16" value=2>1</li>
<li><input type="radio" name="type16" value=3 id="ans16">2</li>
<li><input type="radio" name="type16" value=4>\( \pi \)</li>
</ol></br>

<li>The roots of the equation \( x^2 - 4x + 4 = 0 \) are:
<ol type="A">
<li><input type="radio" name="type17" value=1>2, 2</li>
<li><input type="radio" name="type17" value=2>4, 0</li>
<li><input type="radio" name="type17" value=3 id="ans17">2, 2</li>
<li><input type="radio" name="type17" value=4>2, -2</li>
</ol></br>

<li>The derivative of \( f(x) = x^2 \) is:
<ol type="A">
<li><input type="radio" name="type18" value=1>\( x^2 \)</li>
<li><input type="radio" name="type18" value=2>\( 2x \)</li>
<li><input type="radio" name="type18" value=3 id="ans18">\( 2x \)</li>
<li><input type="radio" name="type18" value=4>\( x \)</li>
</ol></br>

<li>If \( \log_b (xy) = \log_b x + \log_b y \), this property is called:
<ol type="A">
<li><input type="radio" name="type19" value=1>Additive Property</li>
<li><input type="radio" name="type19" value=2>Product Property</li>
<li><input type="radio" name="type19" value=3 id="ans19">Product Property</li>
<li><input type="radio" name="type19" value=4>Quotient Property</li>
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
window.location="maths7key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "maths8.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "maths6";
}
</script>

</html>