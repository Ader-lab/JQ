<?php
// 一個簡單但可以運作的 REST API，
// 物件導向與MVC課程時，再來寫進化版

$method = $_SERVER['REQUEST_METHOD'];
$url = explode("/", rtrim($_GET["url"], "/") );

$dbLink = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_query($dbLink, "set names utf8");
mysqli_select_db($dbLink, "cozylife");
echo $method . " " . $url[0];

switch ($method . " " . $url[0]) {
    case "POST category":
        insertcategory();
        break;
    case "GET category":
        if (isset($url[1]))
            getcategoryById($url[1]);
        else
            getcategory();
        break;
    case "PUT category":
        updatecategory($url[1]);
        break;
    case "DELETE category":
        deletecategory($url[1]);
        break;
    default:
        echo "Thank you";
}
mysqli_close($dbLink);


function getcategoryById($id) {
    if (!is_numeric($id))
    	die( "id is not a number." );

    global $dbLink;
    $result = mysqli_query($dbLink, 
      "select * from category where categoryID = " . $id );
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}


function getcategory() {
    global $dbLink;
    $result = mysqli_query($dbLink, "select * from category");
    $dataList = null;
    while ($row = mysqli_fetch_assoc($result)) {
        $dataList[] = $row;
    }
    echo json_encode($dataList);
}


function insertcategory() {   //post
    global $dbLink;
    $categoryName = $_POST["categoryName"];
    $categoryID   = $_POST["categoryID"];
    $commandText = "INSERT INTO category (categoryID,categoryName) VALUES ('{$categoryID}','{$categoryName}')";
    $result = mysqli_query($dbLink, $commandText); 
    header("location: http://localhost/cozylife/Dashio2/advanced_table_6.php");
}


function updatecategory($id) {   
    if (! isset ( $id ))
    	die ( "Parameter id not found." );
    if (! is_numeric ( $id ))
        die ( "id not a number." );

    global $dbLink;
    parse_str(file_get_contents('php://input'), $putData); //接資料
    $categoryName = $putData["categoryName"];  
    // $categoryID   = $putData["categoryID"];
    $commandText = "update category set categoryName = '{$categoryName}' where categoryID = {$id}";
    //     "update category "
    //   . "set categoryName   = '{$categoryName}' "
    //   . "  , categoryID     = '{$categoryID}'"
    //   . "  where categoryID = {$id}";

    mysqli_query($dbLink, $commandText); 
}


function deletecategory($id) {
    if (! isset ( $id ))
    	die ( "Parameter id not found." );
    if (! is_numeric ( $id ))
        die ( "id not a number." );

    global $dbLink;
    
    $commandText = 
        "delete from category "
      . "  where categoryID = {$id}";
    mysqli_query($dbLink, $commandText); 
}

?>