<?php
    $O_P_ID = $_POST['O_P_ID'];
    $P_ID = $_POST['P_ID'];
    $P_Name = $_POST['P_Name'];
    $P_Gender = $_POST['P_Gender'];
    $P_Phone = $_POST['P_Phone'];
    $P_Email = $_POST['P_Email'];
    $P_Address = $_POST['P_Address'];

    include('../connect.php');

    $sql = "UPDATE `producer` SET `P_ID` = '$P_ID', `P_Name` = '$P_Name', `P_Gender` = '$P_Gender', `P_Phone` = '$P_Phone', `P_Email` = '$P_Email', `P_Address` = '$P_Address' WHERE `producer`.`P_ID` = '$O_P_ID'";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        echo "script>alert('ERROR');</script>";
        header("refresh:0;url=../producer.php");
    }else{
        echo "<script>alert('修改成功');</script>";
        header("refresh:0;url=../producer.php");
    }

    mysqli_close($connect);
?>