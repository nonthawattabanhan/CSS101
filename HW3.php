<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('https://img.pikbest.com/backgrounds/20190424/bright-stars-background-clouds-texture-background_2820051.jpg!w700wp') center/cover fixed;
        }

        table {
            width: 100%;
        }

        div {
            width: 150px;
            height: 265px;
            overflow: auto;
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <?php $multi_x = 2; ?>
    <div>
        <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
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
        </table>
    </div>
</body>

</html>
