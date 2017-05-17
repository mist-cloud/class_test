<?php
require_once('func.php');//外部化したクラスを読み込み
$res = "";
if(isset($_POST['submit'])){
    $res = JudgeEvenOdd($_POST['num']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>初めてのクラス</title>
</head>
<body>
    <h1>Classの確認</h1>
    <form method="post" action="">
        <label>数字を入力<input type="text" name="num" required></label>
        <input type="submit" value="　判定　" name="submit" />
    </form>
    <?php
    echo $res;
    ?>
</body>
</html>