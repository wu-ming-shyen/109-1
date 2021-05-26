<?PHP
    header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST['submit'])){
        exit("錯誤執行");
    }
    session_start();
    $account=$_POST['M_Account'];
    $password=$_POST['M_Password'];

    include('connect.php');
    
    if($account && $password){
        $sql = "SELECT * FROM `member` WHERE `M_Account` = '$account' AND `M_Password` = '$password'";
        $result = mysqli_query($connect,$sql);
        $rows = mysqli_num_rows($result);
        if($rows){
            header("refresh:0;url=signindex.html");
            exit;
        }else{
            echo "
            <script>
            alert('帳號密碼錯誤');
            setTimeout(function(){window.location.href='login.html';},1000);
            </script>
            ";
        }
    }else{
        echo "表單填寫不完整";
        echo "
        <script>
        setTimeout(function(){window.location.href='login.html';},1000);
        </script>";
    }

    mysqli_close($connect);
?>