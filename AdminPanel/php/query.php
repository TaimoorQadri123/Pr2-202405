<?php 
include("dbcon.php");
session_start();

$categoryName = $categoryDes = $categoryImageName = ""; 
$categoryNameErr = $categoryDesErr = $categoryImageNameErr = ""; 
if(isset($_POST['addCategory'])){
    $categoryName = $_POST['cName'];
    $categoryDes = $_POST['cDes'];
    // $categoryImageName = $_FILES['cImage']['name'];
    // $categoryImageTmpName = $_FILES['cImage']['tmp_name'];
    if(empty($categoryName)){
        $categoryNameErr = "Category Name is Required"; 
    }
    if(empty($categoryDes)){
        $categoryDesErr = "Category Description is Required"; 
    }

}

?>