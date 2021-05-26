<?php
    $P_ID = $_POST['P_ID'];
    $P_Name = $_POST['P_Name'];
    $P_Gender = $_POST['P_Gender'];
    $P_Phone = $_POST['P_Phone'];
    $P_Email = $_POST['P_Email'];
    $P_Address= $_POST['P_Address'];

    include('../connect.php');

    $sql = "INSERT INTO `producer` (`P_ID`, `P_Name`, `P_Gender`, `P_Phone`, `P_Email`, `P_Address`) VALUES ('$P_ID', '$P_Name', '$P_Gender', '$P_Phone', '$P_Email', '$P_Address')";
    $result = mysqli_query($connect,$sql);

    if(!$result){
        echo "script>alert('ERROR');</script>";
        header("refresh:0;url=../producer.php");
    }else{
        echo "<script>alert('新增成功');</script>";
        header("refresh:0;url=../producer.php");
    }
    
    mysqli_close($connect);
?>