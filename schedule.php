<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shcool";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_courses = "SELECT * FROM courses";
$result_courses = $conn->query($sql_courses);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание Занятий</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Расписание Занятий</h1>

    <?php
    if ($result_courses->num_rows > 0) {
        while ($row_course = $result_courses->fetch_assoc()) {
            echo "<h2>" . $row_course["name"] . "</h2>";

            $sql_schedule = "SELECT s.id, s.start_time, s.end_time, s.day_of_week, sub.name as subject_name
                             FROM schedule s
                             JOIN subjects sub ON s.subject_id = sub.id
                             WHERE s.course_id = " . $row_course["id"] . "
                             ORDER BY FIELD(day_of_week, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'), s.start_time";

            $result_schedule = $conn->query($sql_schedule);

            if ($result_schedule->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Предмет</th><th>начало занятия</th><th>конец занятия</th><th>День</th></tr>";

                while ($row_schedule = $result_schedule->fetch_assoc()) {
                    echo "<tr>";
                    
                    echo "<td>" . $row_schedule["subject_name"] . "</td>";
                    echo "<td>" . $row_schedule["start_time"] . "</td>";
                    echo "<td>" . $row_schedule["end_time"] . "</td>";
                    echo "<td>" . $row_schedule["day_of_week"] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p>Нет расписания</p>";
            }
        }
    } else {
        echo "<p>No courses found.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
