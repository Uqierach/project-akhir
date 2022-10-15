<?php
$opr1 = 8 + 2;
$opr2 = 8 * 2;
$opr3 = 8 / 2;
$opr4 = 8 - 2;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 - Backend</title>

    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <header>
        <h1>Membuat Tabel Sederhana</h1>
    </header>
    <table>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>8 + 2</td>
            <td>
                <?php echo $opr1; ?>
            </td>
        </tr>
        <tr>
            <td>8 * 2</td>
            <td>
                <?php echo $opr2; ?>
            </td>
        </tr>
        <tr>
            <td>8 / 2</td>
            <td>
                <?php echo $opr3; ?>
            </td>
        </tr>
        <tr>
            <td>8 - 2</td>
            <td>
                <?php echo $opr4; ?>
            </td>
        </tr>
    </table>
</body>

</html>