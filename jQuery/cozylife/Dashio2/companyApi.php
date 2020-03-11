<?php

header("content-type:text/html; charset=utf-8");
$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error()); 
$result = mysqli_query($link, "set names utf8"); 
mysqli_select_db($link, "cozylife");


$id=$_POST["id"];
if(!empty($id)){
    $sql_db2 = "SELECT * FROM company WHERE companyID={$id}";
    $setmt=$link->query($sql_db2);
    $result2 =$setmt->fetch_object();
    $data['result']=$result2;
    $data['success']=true;
    echo json_encode($data);
}else{
    $data['success']=false;
    echo json_encode($data);
}





?>