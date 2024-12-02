<?php
session_start();  
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complete'])) {
    $phy = 1312081910;
    $ans1 = $_POST["type30"];
    $ans2 = $_POST["type31"];
    $ans3 = $_POST["type32"];
    $ans4 = $_POST["type33"];
    $ans5 = $_POST["type34"];
    $ans6 = $_POST["type35"];
    $ans7 = $_POST["type36"];
    $ans8 = $_POST["type37"];
    $ans9 = $_POST["type38"];
   
    
    $score = 0;
    if($ans1 == 4) $score++;
    if($ans2 == 3) $score++;
    if($ans3 == 3) $score++;
    if($ans4 == 1) $score++;
    if($ans5 == 3) $score++;
    if($ans6 == 4) $score++;
    if($ans7 == 2) $score++;
    if($ans8 == 3) $score++;
    if($ans9 == 3) $score++;
    
    $_SESSION['score'] = $score;
    

    $insertQuery = "INSERT INTO data(UID,ques1,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9) 
                    VALUES ('$phy','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$ans8','$ans9')";
    
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
<title>GENERAL/MATHS/Test-10</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="satya.css"/>
<script type="text/javascript" async
    src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML">
  </script>
    <script>
        function validateForm() {
            var radios = document.querySelectorAll('input[type="radio"]:checked');
            if (radios.length < 9) {
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
                    <li><a href="#">TEST-10</a>
<ul class="dropdown">
<li><a href="maths.php">TEST-1</a></li>
<li><a href="maths2.php">TEST-2</a></li>
<li><a href="maths3.php">TEST-3</a></li>
<li><a href="maths4.php">TEST-4</a></li>
<li><a href="maths5.php">TEST-5</a></li>
<li><a href="maths6.php">TEST-6</a></li>
<li><a href="maths7.php">TEST-7</a></li>
<li><a href="maths8.php">TEST-8</a></li>
<li><a href="maths9.php">TEST-9</a></li></ul>
<li></li>
                    </UL>
                </div>
   </br></br></br></br></br>
 <center class="textcolor"><h1 align="center">MATHMATICS - TEST:10/10</h1>
<h2 align="center">Answer the following Questions : </h2></center>
<ol type="1" class="font"><form method="post" action="maths10.php" onsubmit="return validateForm()">
<li>The integral of \( \int 2x \, dx \) is:
    <ol type="A">
      <li><input type="radio" name="type30" value=1>\( x^2 + C \)</li>
      <li><input type="radio" name="type30" value=2>\( 2x^2 + C \)</li>
      <li><input type="radio" name="type30" value=3>\( x^2 \)</li>
      <li><input type="radio" name="type30" value=4  id="ans30"> \( x^2 + C \)</li>
    </ol></br>

    <li>The value of \( \frac{d}{dx} (x^3 + 4x^2 + 2x) \) is:
    <ol type="A">
      <li><input type="radio" name="type31" value=1>\( 3x^2 + 8x + 2 \)</li>
      <li><input type="radio" name="type31" value=2> \( 3x^2 + 4x \)</li>
      <li><input type="radio" name="type31" value=3 id="ans31"> \( 3x^2 + 8x + 2 \)</li>
      <li><input type="radio" name="type31" value=4>\( 4x^2 + 2x \)</li>
    </ol></br>

    <li>The roots of the quadratic equation \( x^2 - 6x + 9 = 0 \) are:
    <ol type="A">
      <li><input type="radio" name="type32" value=1> 3, 3</li>
      <li><input type="radio" name="type32" value=2> 2, 4</li>
      <li><input type="radio" name="type32" value=3 id="ans32"> 3, 3</li>
      <li><input type="radio" name="type32" value=4> 1, 5</li>
    </ol></br>

    <li>The area of a right-angled triangle with perpendicular sides 3 and 4 is:
    <ol type="A">
      <li><input type="radio" name="type33" value=1   id="ans33"> 6</li>
      <li><input type="radio" name="type33" value=2> 6</li>
      <li><input type="radio" name="type33" value=3 > 7</li>
      <li><input type="radio" name="type33" value=4> 5</li>
    </ol></br>

    <li>The value of \( \log_{10} 100 \) is:
    <ol type="A">
      <li><input type="radio" name="type34" value=1> 2</li>
      <li><input type="radio" name="type34" value=2> 1</li>
      <li><input type="radio" name="type34" value=3 id="ans34"> 2</li>
      <li><input type="radio" name="type34" value=4> 0.5</li>
    </ol></br>

    <li>The distance between the points \( (1, 2) \) and \( (4, 6) \) is:
    <ol type="A">
      <li><input type="radio" name="type35" value=1> 4</li>
      <li><input type="radio" name="type35" value=2> 5</li>
      <li><input type="radio" name="type35" value=3 > 6</li>
      <li><input type="radio" name="type35" value=4  id="ans35"> 5</li>
    </ol></br>

    <li>If \( y = \sin x \), then \( \frac{dy}{dx} \) is:
    <ol type="A">
      <li><input type="radio" name="type36" value=1>\( \cos x \)</li>
      <li><input type="radio" name="type36" value=2  id="ans36"> \( \cos x \)</li>
      <li><input type="radio" name="type36" value=3 > \( -\cos x \)</li>
      <li><input type="radio" name="type36" value=4> \( -\sin x \)</li>
    </ol></br>

    <li>The expansion of \( (x + y)^3 \) is:
    <ol type="A">
      <li><input type="radio" name="type37" value=1>\( x^3 + 3x^2 y + 3xy^2 + y^3 \)</li>
      <li><input type="radio" name="type37" value=2> \( x^3 + 3x^2 y + y^3 \)</li>
      <li><input type="radio" name="type37" value=3 id="ans37"> \( x^3 + 3x^2 y + 3xy^2 + y^3 \)</li>
      <li><input type="radio" name="type37" value=4> \( x^3 + y^3 \)</li>
    </ol></br>

    <li>The number of terms in the expansion of \( (x + y)^{10} \) is:
    <ol type="A">
      <li><input type="radio" name="type38" value=1> 10</li>
      <li><input type="radio" name="type38" value=2> 1</li>
      <li><input type="radio" name="type38" value=3 id="ans38"> 11</li>
      <li><input type="radio" name="type38" value=4> 12</li>
    </ol></br></ol>
<center><button class="satya" name="complete">Complete</button></center></form>
<div class="form3" id="form3">
    <h2>Your Score:</h2>
    <h1>
        <span id="score">
            <?php
              
                if (isset($_SESSION['score'])) {
                    $score = $_SESSION['score'];
                    echo $score . '/9'; 

                    
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
window.location="maths10key.php"
}
function Next() {
    <?php session_unset(); ?>
    window.location = "maths10.php";
}

function back() {
    <?php session_unset(); ?>
    window.location = "maths9.php";
}
</script>

</html>