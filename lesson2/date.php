<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hàm date()</title>
</head>
<body>
    <h1>hàm date() trong php</h1>
    <?php
        echo date("js-F-Y"); // lấy ngày tháng năm hiện tại
        // hiển thị theo định dạng : ngày th- tên tháng - năm
        echo "<br>";
        echo date("M/Y"); // hiển thị tháng / năm hiện tại
        echo "<br>";
        // hiển thị tháng ngày cuối cùng của tháng hiện tại
        echo "Day of ".date("M")." is ".date("t");
        echo "<br>";
    ?>
</body>
</html>