<?php
$sizeRows = $_GET['sizeRows'];
$sizeCols = $_GET['sizeCols'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table border="1">
        <?php for ($i = 0; $i < $sizeRows; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $sizeCols; $j++): ?>
                    <td><input type="number" name="<?php echo 'number' . $i . $j ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <label>Cot can tinh tong<input type="number" name="colsMatrix"></label>
    <input type="submit" value="Tinh">
</form>
<?php
$colsMatrix = $_POST['colsMatrix'];
$sumColsMatrix = 0;
for ($i = 0; $i < $sizeRows; $i++) {
    $sumColsMatrix += $_POST['number' . $i . $colsMatrix];
}
echo $sumColsMatrix;
?>
</body>
</html>

