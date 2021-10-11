<!DOCTYPE html>
<head>
    <title> Calculatr </title>
</head>
<?php
    $result= "";
    if(isset($_POST['operator'])){
        $first_num = $_POST['first_num'];
        $second_num = $_POST['second_num'];
        $operator = $_POST ['operator'];
        if(is_numeric($first_num) && is_numeric($second_num)){
            if($operator=="Add"){
                $result= $first_num +$second_num;
            }
            else if($operator=="Sub"){
                $result= $first_num - $second_num;
            }
            else if($operator=="Multi"){
                $result= $first_num * $second_num;
            }
            else{
                $result= $first_num / $second_num;
            }

        }
        
    }
    
?>
<body>
    <h1> Calculator </h1>
    <form method= "POST">
        <label>
            First Number
        </label>    
        <input type= "number" name="first_num" value="<?php echo $first_num;?>">
        <label>
            Secont Number
        </label>  
        <input type= "number" name="second_num" value="<?php echo $second_num;?>">
        <label>
            Result
        </label> 
        <input name="result" value="<?php echo $result;?>">
        <input type= "submit" value="Add" name= "operator">
        <input type= "submit" value="Sub" name= "operator">
        <input type= "submit" value="Multi" name= "operator">
        <input type= "submit"value="Division"name= "operator">
    
    </form> 
</body>