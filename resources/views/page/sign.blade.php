<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php session_start();
    include("../sc/connect.php");
    ?>
</head>
<body>
    <div class="sign">
      <form action="sign.php" method="post">
          輸入帳號:<input type="text" name="user"><br>
          輸入密碼:<input type="password" name="password"><br>
          輸入名稱(取貨稱呼):<input type="text" name="name"><br>
          輸入信箱:<input type="email" name="email"><br>
          輸入電話:<input type="tel" name="phone"><br>
          <input type="submit" name="sign" value="register">
      </form>
    </div>
    <a href="../page/login.php">已有帳號?</a>
    <?php
    if(isset($_POST["sign"])&& $_POST["user"]!=""&&$_POST["password"]!=""&&$_POST["name"]!=""&&$_POST["email"]!=""&&$_POST["phone"]!=""){
        
        $account=$_POST["user"];
        $password=$_POST["password"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $tel=$_POST["phone"];

        $sql="SELECT account from member where account="."$account";
        $result=mysqli_query($link,$sql);
        if($result){
            echo("帳號重複");
            sleep(1);
            
        }else{
            //$sql="INSERT INTO member VALUES('$account',$password,'$name','$tel','$email')";
            //$result=mysqli_query($link,$sql);
            //$_SESSION["account"]=$account;
            echo("註冊成功");
            sleep(1);
            //echo("<script>window.location.href='../page/tingshuoo.php'</script>");
        }
    }
    ?>
</body>
</html>