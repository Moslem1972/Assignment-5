<?php
     
    $error1=$error2=$error3=$success="";
    $cat_type_name=$cat_type_code="";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $cat_type_name =trim($_POST['cat_type_name']);
        $cat_type_code =trim($_POST['cat_type_code']);
        if(empty($cat_type_name) || empty($cat_type_code)){
            if(empty($cat_type_name) && empty($cat_type_code)){
                $error1 = "Please fill up both";
            }
            else if (empty($cat_type_name)){

                $error2 = "Please Insert Category Type Name";
                echo $error2;
            }
            else if (empty($cat_type_code)){
                $error3 = "Please Insert Category Type Code";
            }
        }
        else{
            $sql = "INSERT INTO category_type(cat_type_name, cat_type_code) VALUES (?, ?)";
            $sql_statment = mysqli_prepare($link,$sql);
                if ($sql_statment){
                mysqli_stmt_bind_param($sql_statment, "ss", $var1,$var2);
                $var1=$cat_type_name;
                $var2 = $cat_type_code;
                $execute = mysqli_stmt_execute($sql_statment);
                if($execute){
                $cat_type_name='';
                $cat_type_code='';
                    $success = "Successfully Inserted";
                //header("location: index.php");
                }
                else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        }
    }
?>