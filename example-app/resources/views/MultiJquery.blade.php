<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: url('https://png.pngtree.com/thumb_back/fw800/background/20230527/pngtree-trees-in-a-pink-scene-image_2676099.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        #tableContainer {
            max-height: 400px; /* Adjust the maximum height as needed */
            overflow-y: auto;
            background: rgba(255, 255, 255, 0.8); /* Adding a semi-transparent white background for better readability */
            padding: 20px; /* Adding some padding for better appearance */
            border-radius: 10px; /* Adding border-radius for a rounded appearance */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>ตารางสูตรคูณ</h1>
    <label for="numberInput">กรุณาใส่ตัวเลข: </label>
    <input type="number" id="numberInput">
    <button id="generateTable">สร้างตาราง</button>

    <div id="tableContainer">
        <table id="multiplicationTable">
            <!-- Table content will be dynamically generated here -->
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $("#generateTable").click(function () {
                // Get the input value
                var number = $("#numberInput").val();

                // Clear existing table content
                $("#multiplicationTable").empty();

                // Generate multiplication table and append to the table
                for (var i = 1; i <= 24; i++) {
                    var result = number * i;
                    $("#multiplicationTable").append("<tr><td>" + number + " x " + i + "</td><td>" +" = "+ result + "</td></tr>");
                }
            });
        });
    </script>
</body>

</html>
