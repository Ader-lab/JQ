<?php


header("content-type:text/html; charset=utf-8");
$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error()); 
$result = mysqli_query($link, "set names utf8"); 
mysqli_select_db($link, "cozylife");

// -----------------------------------------------
// 新增


if(isset($_POST["action"]) && ($_POST["action"] == "insert")){
    $companyName  = $_POST["companyName"];
    $companyAdd   = $_POST["companyAdd"];
    $companyTel   = $_POST["companyTel"];
    $companyMail  = $_POST["companyMail"];
    $commandText = "INSERT INTO company (companyName,companyAdd,companyTel,companyMail) VALUES ('{$companyName}','{$companyAdd}','{$companyTel}','{$companyMail}')";
    mysqli_query($link, $commandText); 
    header("location: http://localhost/cozylife/Dashio2/advanced_table_4.php");
}



// -------------------------------------------
// 修改


if(isset($_POST["action"]) && ($_POST["action"] == "edit")){
    
    $editID = $_POST["editID"];
    $editName = $_POST["editName"];  
    $editAdd = $_POST["editAdd"];  
    $editTel = $_POST["editTel"];  
    $editMail = $_POST["editMail"];  
    echo $editName;
    echo $_POST["editID"];
    $commandText = "update company "
    . "set companyName   = '{$editName}' "
    . "  , companyAdd     = '{$editAdd}'"
    . "  , companyTel     = '{$editTel}'"
    . "  , companyMail    = '{$editMail}'"
    . "  where companyID  = '{$editID}'";
    mysqli_query($link, $commandText); 
    header("location: http://localhost/cozylife/Dashio2/advanced_table_4.php");

}


// -------------------------------------------
// 刪除

if(isset($_POST["action"]) && ($_POST["action"] == "delete")){
    $deleteID = $_POST['deleteID'];
    echo $deleteID;
    $commandText = 
        "delete from company "
        . "  where companyID = {$deleteID}";
    mysqli_query($link, $commandText); 

    header("location: http://localhost/cozylife/Dashio2/advanced_table_4.php");

}

// -------------------------------------------
// 全選刪除

if(isset($_POST['Checkbox'])) {
   $check=$_POST['Checkbox'];
    foreach($check as $value){
        $commandText = 
            "delete from company "
            . "  where companyID = {$value}";
        mysqli_query($link, $commandText); 
    }
    header("location: http://localhost/cozylife/Dashio2/advanced_table_4.php");
}else{
    header("location: http://localhost/cozylife/Dashio2/advanced_table_4.php");   
}


?>