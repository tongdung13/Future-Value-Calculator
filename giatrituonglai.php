<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8"/>
<head>
<body>
<form method="post">
    <input type="text" name="giatrihientai" size="30" placeholder="số tiền đầu tư"/>
    <input type="text" name="laisuat" size="30" placeholder="lãi suất"/>
    <input type="text" name="giatrituonglai" size="30" placeholder="số năm đầu tư">
    <input type="submit" value="check"/>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $giatrihientai = $_POST["giatrihientai"];
        $laisuat = $_POST["laisuat"];
        $giatrituonglai = $_POST["giatrituonglai"];
        $tong = $_POST["tong"];
        $giatrituonglai = 0;

            if ($giatrituonglai += 1) {
                $tong = $giatrihientai + ($giatrihientai * $laisuat);

            }

        }
    echo $tong;
    ?>

</form>
</body>
</head>
</html>
