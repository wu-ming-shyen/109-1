<?php
    $Pro_No = $_POST['Pro_No'];
    $Pro_Name = $_POST['Pro_Name'];
    $Pro_Category = $_POST['Pro_Category'];
    $Pro_Introduce= $_POST['Pro_Introduce'];

    include('../connect.php');

    $sql = "INSERT INTO `product` (`Pro_No`, `P_ID`, `Pro_Name`, `Pro_Category`, `Pro_Introduce`) VALUES ('$Pro_No', '1', '$Pro_Name', '$Pro_Category', '$Pro_Introduce')";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        echo "script>alert('ERROR');</script>";
        header("refresh:0;url=../product.php");
    }else{
        echo "<script>alert('新增成功');</script>";
        header("refresh:0;url=../product.php");
    }
    
    mysqli_close($connect);
?>