<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['username'];
$pw = $_POST['password'];
$address = $_POST['email'];
$other = $_POST['about-yourself'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性

$sql = "SELECT * FROM member where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if ( $row[username] == $id)
{
	echo '帳號重複，請洽管理員';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';	
}

elseif($id != null && $pw != null)
{
        //新增資料進資料庫語法
         $sql = "insert into ID (username, password, address, other) values ('$id', '$pw', '$address', '$other')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Loginout.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=Login.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=ourStory.html>';
}
?>