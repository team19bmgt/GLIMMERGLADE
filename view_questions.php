<?php
$file = 'questions.json';

// Kiểm tra xem file có dữ liệu không
if (file_exists($file)) {
    $data = json_decode(file_get_contents($file), true);
} else {
    $data = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Submitted Questions</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Question</th>
            <th>Date</th>
        </tr>
        <?php
        if (!empty($data)) {
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["subject"] . "</td>";
                echo "<td>" . $row["question"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No questions submitted yet.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
