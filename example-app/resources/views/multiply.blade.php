<!-- resources/views/multiplication.blade.php -->

<html>

<head>
    <meta charset="utf-8">
</head>

<body style="display: flex; align-items: center; justify-content: center; height: 100vh; background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTWYenGebfzJCuwiR4WdjzTzI7BdavwbbeHA&usqp=CAU'); background-size: cover; background-position: center;">

    <?php
    // Get the multiplication factor from the user
    $multi_x = isset($_GET['multi_x']) ? $_GET['multi_x'] : 2;
    ?>

    <div style="overflow-y: auto; height: 300px; background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
        <form action="{{ url('/multiply') }}" method="get">
            <label for="multi_x">Enter multiplication factor:</label>
            <input type="number" name="multi_x" id="multi_x" value="{{ $multi_x }}" required>
            <button type="submit">Generate Table</button>
        </form>

        <h1>ตารางสูตรคูณแม่ {{ $multi_x }}</h1>

        <table border="1">
            <tbody>
                @for ($i = 1; $i <= 24; $i++)
                    <tr>
                        <td>{{ $multi_x }}</td>
                        <td>x</td>
                        <td>{{ $i }}</td>
                        <td>=</td>
                        <td>{{ $multi_x * $i }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <style>
        table {
            width: 150px;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
    </style>
</body>

</html>
