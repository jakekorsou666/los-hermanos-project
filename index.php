<!DOCTYPE html>
<html>
<head>
</head>
<style>
            
        body{
            text-align:center;
            font-weight:bold;
            color:rgb(218, 0, 73);
            margin: 250px;
        }
    </Style>
<body>
    <h1>
<?php 
if ($_POST['submit']) { 
$weight = $_POST['weight'];
$height = $_POST['height'];
function bmi($weight,$height) {
$bmi = $weight/($height*$height);
return $bmi;
}
$bmi = bmi($weight,$height);
    if ($bmi <= 18.5) {
    $output = "hey boney start eating";
    }else if ($bmi >18.5 and $bmi<=24.9){
    $output =  "aight you look good";
    }else if ($bmi > 24.9 and $bmi <=29.9){
    $output = "hmm u might be getting fat";
    }else if($bmi > 30.0){
        $output =  "Bitch you Fat As fuck!!";
    }
echo "Your BMI value is " . round($bmi,1) ;
echo "<br>";
echo  $output;
}
?>
    </h1>
</body>
</html>
</html>
