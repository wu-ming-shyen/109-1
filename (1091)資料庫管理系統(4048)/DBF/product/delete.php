<?php
    $Pro_No = intval($_GET['Pro_No']);

    include('../connect.php');

    $sql = "DELETE FROM `product` WHERE `product`.`Pro_No` = $Pro_No";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        echo "script>alert('ERROR');</script>";
        header("refresh:0;url=../product.php");
    }else{
        echo "<script>alert('刪除成功');</script>";
        header("refresh:0;url=../product.php");
    }

    mysqli_close($connect);
?>