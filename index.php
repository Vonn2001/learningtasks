<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="fincss.css">
<script src="script1.js"></script>
<head>
<?php
$title = "Your title goes here";
?>
</head>
<body>
<div class="topnav">
<a href="index.php" target="_blank" onclick="myFunction()"> Home</a>
<a href="LT2/LT2.html" target="_blank" onclick="myFunction1()"> LT2</a>
<a href="LT3/LT3.html" target="_blank" onclick="myFunction2()"> LT3</a>
<a href="CLE1MT/CLE1MT.html" target="_blank" onclick="myFunction3()"> CLE1MT</a>
<a href="LT4/LT4.html" target="_blank" onclick="myFunction4()"> LT4</a>
<a href="LT5/LT5.html" target="_blank" onclick="myFunction5()"> LT5</a>
</div>

<?php
echo "<p class='helo'>Welcome to My Profile!!!</p>";
?>
<div class="wrapper">
<div class="left">
<?php
echo "<img src='prof.jpg' >"; 
echo "<h4 class='name'>Von Blaise Estilles</h4>";
echo "<pp class='des'>Student</pp>";
?>
</div>
<div class="right">
<div class="info">
<?php
echo "<h3 class='inform'>Information :</h3>";
?>
</div>
<div class="data">
<?php
echo "<h4 class='name'>Age</h4>";
echo "<pp class='des'>20 Years Old</pp>";
?>
</div>

<div class="data">
<?php
echo "<h4 class='name'>Sex</h4>";
echo "<pp class='des'>Male</pp>";
?>

<div class="info_data">
<div class="data">
<?php
echo "<h4 class='name'>Email:</h4>";
echo "<pp class='des'>vonblaiseestilles@gmail.com</pp>";
?>
</div>

<div class="data">
<?php
echo "<h4 class='name'>Phone #</h4>";
echo "<pp class='des'>09266888817</pp>";
?>

<div class="data">
<?php
echo "<h4 class='name'>Facebook</h4>";
echo "<pp class='des'>von blaise estilles / Or Click Here</pp>";
?>
<a href="https://www.facebook.com/vonblaise.estilles/" target="_blank"> My Fb</a>
</div>

<div class="data">
<?php
echo "<h4 class='name'>Discord</h4>";
echo "<pp class='des'>Code#8364</pp>";
?>

</div>
</div>	
</div>
</div>
</div>

</body>
</html>
