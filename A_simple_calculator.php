

<?php
if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['clicked'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $clicked = $_POST['clicked'];
    $result = '';

    if ($clicked == "Addition"){
        $result = $number1 + $number2;
      
    }
    elseif ($clicked == "Subtraction"){
        $result = $number1 - $number2;
    }
    elseif ($clicked == "Multiplication"){
        $result = $number1 * $number2;
    }
    elseif ($clicked == "Division"){
        $result = $number1 / $number2;
    }
    else{
        $result = "incorrect input";
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Simple Calculator</title>
</head>
<body>
<div>
<h1>A Simple Calculator</h1>
<div id="form-section">
    <form action="A_simple_calculator.php" method="POST">
    Number1:
    <input type="number" name="number1" placeholder="enter number here" value="<?php echo $number1;?>"><br><br>
    Number2:
    <input type="number" name="number2" placeholder="enter number here" value="<?php echo $number2;?>"><br><br>
    Result:
    <textarea name="result" type="number" cols="10" rows="1" > <?php echo $result;?> </textarea><br> <br>
    <input type="submit" name="clicked" value="Addition">
    <input type="submit" name="clicked" value="Subtraction">
    <input type="submit" name="clicked" value="Multiplication">
    <input type="submit" name="clicked" value="Division">
    </form>
</div>
</div>
</body>
</html>


<style>
*{
    box-sizing: border-box;
}
body{
    background: #344a72;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
h1{
    text-align: center;
}
#form-section{
    width: 270px;
    margin: 20px auto 0px auto;
    background: white;
    padding:20px 10px;
    display: block;
    line-height: 1.2em;
}
#form-section input,
#form-section textarea {
    background-color: #f1f1f1;
    width: 100%;
    padding: 10px;
    border: 1px #ddd solid;
}
#form-section input[type=number]:focus, 
#form-section textarea:focus{
  background-color: #EDF2F7;
  border-radius: 5px;
  outline: none;
}
input[type=submit]{
    cursor: pointer;
    outline: none;
}
#form-section input[type=submit]:hover{
    background-color: #344a72;
    color: white;
    
    
}
</style>





