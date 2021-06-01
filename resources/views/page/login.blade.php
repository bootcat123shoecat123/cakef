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
      <form action="login.php" method="post" >
          輸入帳號:<input type="text" name="user"><br>
          輸入密碼:<input type="password" name="password"><br>
          <input type="submit" name="sign" value="register">
      </form>
    </div>
    
    <a href="../page/sign.php">尚未註冊?</a>
    <?php
    if(isset($_POST["sign"])&& $_POST["user"]!=""&& $_POST["password"]!=""){
        
        $account=$_POST["user"];        
        $password=$_POST["password"];
        $sql='SELECT account from member where account='."$account".'AND password='."$password";
        $result=mysqli_query($link,$sql);

        if($result){
            echo("帳號或密碼正確");
            $row=mysqli_fetch_row($result);
            $_SESSION["account"]=$row[0];
            sleep(1);
            //echo("<script>window.location.href='../page/tingshuoo.php'</script>");
        }else{
            echo("帳號或密碼不正確");
        }
    }
    ?>
</body>
</html>