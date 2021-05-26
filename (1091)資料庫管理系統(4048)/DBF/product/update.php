<?php
    $O_Pro_No = $_POST['O_Pro_No'];
    $Pro_No = $_POST['Pro_No'];
    $Pro_Name = $_POST['Pro_Name'];
    $Pro_Category = $_POST['Pro_Category'];
    $Pro_Introduce = $_POST['Pro_Introduce'];

    include('../connect.php');

    $sql = "UPDATE `product` SET `Pro_No` = '$Pro_No', `Pro_Name` = '$Pro_Name', `Pro_Category` = '$Pro_Category', `Pro_Introduce` = '$Pro_Introduce' WHERE `product`.`Pro_No` = $O_Pro_No";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        echo "script>alert('ERROR');</script>";
        header("refresh:0;url=../product.php");
    }else{
        echo "<script>alert('修改成功');</script>";
        header("refresh:0;url=../product.php");
    }

    mysqli_close($connect);
?>