<!DOCTYPE html>
<head>
    <title> Marix Calculator </title>
</head>
<h1> <u> Matrix Calculator </u> </h1>
<?php
    $r1= "";
    $r2= "";
    $r3= "";
    $r4= "";

    if(isset($_POST['operator'])){
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];
        $a4 = $_POST['a4'];
        $b1 = $_POST['b1'];
        $b2 = $_POST['b2'];
        $b3 = $_POST['b3'];
        $b4 = $_POST['b4'];
        $operator = $_POST ['operator'];
        if(is_numeric($a1) && is_numeric($a2) && is_numeric($a3) && is_numeric($a4) 
           && is_numeric($b1) && is_numeric($b2) && is_numeric($b3) && is_numeric($b4)){
            if($operator=="Add"){
                $r1= $a1 +$b1; $r2= $a2 +$b2; $r3= $a3 +$b3; $r4= $a4 +$b4;
            }
            else if ($operator=="Sub"){
                $r1= $a1 - $b1; $r2= $a2 - $b2; $r3= $a3 - $b3; $r4= $a4 - $b4;
            }
            else{
               $r1= ($a1*$b1)+ ($a2*$b3); $r2= ($a1*$b2) + ($a2*$b4); 
               $r3= ($a3*$b1)+ ($a4*$b3); $r4= ($a3*$b2) + ($a4*$b4);
            }
                                 

        }
    }
?>

<body>

<form method="POST">
    <h2> Matrix A </h2>
    <label> a1 </label>
    <input type="number" name="a1" value= "<?php echo $a1;?>" step="0.01">
    <label> a2 </label> 
    <input type="number" name="a2"  value="<?php echo $a2;?>" step="0.01"> <br> <br>
    <label> a3 </label>
    <input type="number" name="a3" value="<?php echo $a3;?>" step="0.01">
    <label> a4 </label>
    <input type="number" name="a4" value="<?php echo $a4;?>" step="0.01">

    <h2> Matrix B </h2>
    <label> b1 </label>
    <input type="number" name="b1" value="<?php echo $b1;?>" step="0.01">
    <label> b2 </label>
    <input type="number" name="b2" value="<?php echo $b2;?>" step="0.01"> <br> <br>
    <label> b3 </label>
    <input type="number" name="b3" value="<?php echo $b3;?>" step="0.01">
    <label> b4 </label>
    <input type="number" name="b4" value="<?php echo $b4;?>" step="0.01">

    <h2> Result of Matrix </h2>
    <label> r1 </label>
    <input name="r1" value="<?php echo $r1;?>">
    <label> r2 </label>
    <input name="r2" value="<?php echo $r2;?>"> <br> <br>
    <label> r3 </label>
    <input name="r3" value="<?php echo $r3;?>">
    <label> r4 </label>
    <input name="r4" value="<?php echo $r4;?>"> <br> <br>
    <input type= "submit" value="Add" name= "operator">
    <input type= "submit" value="Sub" name= "operator">
    <input type= "submit" value="Multi" name= "operator">

</form>

</body>
</html>