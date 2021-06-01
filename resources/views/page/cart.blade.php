<?php
if ($result = mysqli_query($link,$sql)){
    echo"<table border = 1>";
    echo"<b>訂購資料:</b></br>";
    
    echo "<tr>";
    echo "<th>訂購品項<th>訂購數量<th>訂購者姓名<th>訂購者電話<th>取貨日期<th>取貨時間<th>";
    echo"</tr>";
    $n=1;
    if(isset($_GET["Pages"]))
        $p=$_GET["Pages"];
    else
        $p=1;
    while ($n<$p){
        $row = mysqli_fetch_assoc($result);
        $n++;
    }
    $i=0;
    while ($i<2){
        $row = mysqli_fetch_assoc($result);
        echo "<tr>";
        echo "<td>".$row ["item"]."<td>".$row ["number"]."<td>".$row ["name"]."<td>".$row["phonenumber"]."<td>".$row ["takedate"]."<td>".$row["taketime"]."</br>";
        echo "<td>修改  刪除";
        echo "</tr>";
        $i++; 
    }
    echo "</table>";



if ( $p > 1 )  // 顯示上一頁
   echo "<a href='1001.php?Pages=".($p-1)."'>上一頁</a>| ";
for ( $i = 1; $i <= ceil(mysqli_num_rows($result)/2); $i++ )
   if ($i != $p)
     echo "<a href=\"1001.php?Pages=".$i."\">".
          $i."</a> ";
   else
     echo $i." ";
if ( $p < ceil(mysqli_num_rows($result)/2) )  // 顯示下一頁
   echo "|<a href='1001.php?Pages=".($p+1)."'>下一頁</a> ";
mysqli_free_result($result);
}
mysqli_close($link);
?>