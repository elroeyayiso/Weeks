

<doctype html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label> The first number:</label><input type="text" name="num1"><br>

<label>Enter the second number:</label><input type="text" name="num2"><br> 
<input type="submit" value="Add Em!!"></form>
<?php
echo'<p><a href="">Reset page</a></p>';
?>
<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->





    <?php
if(isset($_POST['num1'])) { 
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;


    echo '
    <div class="box">

    <h2>You added '. $num1 .'&'.$num2.' </h2>

    <p style="color:red";> The answer is '.$myTotal .' !</p>

    </div>

';
}


?>



</body>
</html>
