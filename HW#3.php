<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div style="width: 150px; height: 265px; overflow: auto;">
        <table>
            <tbody>
                <tr>
                    <td></td>
                    <td>x</td>
                    <td></td>
                    <td>=</td>
                    <td></td>
                </tr>
                <?php
                for ($i = 1; $i <= 24; $i++) {
                    $result = $multi_x * $i;
                    echo "<tr>
                            <td>{$multi_x}</td>
                            <td>x</td>
                            <td>{$i}</td>
                            <td>=</td>
                            <td>{$result}</td>
                          </tr>";
                }
                ?>
            </tbody>
            mmll
        </table>
    </div>

    <style>
        table {
            width: 100%;
        }
    </style>
</body>

</html>
