<?php
$host = "localhost";
$user = "root";
$password = "12345";
$db = "reportcardsystem";
$port = 3307;

$data = mysqli_connect($host, $user, $password, $db, $port);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM grades";
$result = mysqli_query($data, $sql);

if (!$result) {
    die("Error executing the query: " . mysqli_error($data));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 20%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>

<div class="container">
    <table>
        <tr>
            <th>Subject</th>
        </tr>
        <tr>
            <td>WebProg</td>
        </tr>
        <tr>
            <td>OOP</td>
        </tr>
        <tr>
            <td>Entrep</td>
        </tr>
        <tr>
            <td>Immersion</td>
        </tr>
    </table>

    <table>
        <tr>
            <th>1st Grading</th>
        </tr>
        <?php
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $info['1st_grading']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <table>
        <tr>
            <th>2nd Grading</th>
        </tr>
        <?php
        mysqli_data_seek($result, 0); // Reset pointer to the beginning of the result set
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $info['2nd_grading']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <table>
        <tr>
            <th>3rd Grading</th>
        </tr>
        <?php
        mysqli_data_seek($result, 0); // Reset pointer to the beginning of the result set
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $info['3rd_grading']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <table>
        <tr>
            <th>4th Grading</th>
        </tr>
        <?php
        mysqli_data_seek($result, 0); // Reset pointer to the beginning of the result set
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $info['4th_grading']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <table>
        <tr>
            <th>1st Semester</th>
        </tr>
        <?php
        mysqli_data_seek($result, 0); // Reset pointer to the beginning of the result set
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $info['1st_sem']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <table>
        <tr>
            <th>2nd Semester</th>
        </tr>
        <?php
        mysqli_data_seek($result, 0); // Reset pointer to the beginning of the result set
        while ($info = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $info['2nd_sem']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

</body>
</html>
