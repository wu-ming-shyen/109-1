<?php
    $P_ID = intval($_GET['P_ID']);

    include('../connect.php');

    $sql = "DELETE FROM `producer` WHERE `producer`.`P_ID` = $P_ID";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        echo "script>alert('ERROR');</script>";
        header("refresh:0;url=../producer.php");
    }else{
        echo "<script>alert('刪除成功');</script>";
        header("refresh:0;url=../producer.php");
    }

    mysqli_close($connect);
?>