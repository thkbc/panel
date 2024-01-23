<!DOCTYPE html>
<html lang="en">
<head>
<a href="main.php" onclick="history.back();" style="position: absolute; top: 10px; left: 10px; text-decoration: none; color: #333; font-weight: bold;">X</a>
<link rel="stylesheet" href="manageStudents.css">
    <meta charset="UTF-8">  
    <title>Manage Students</title>
</head>
<body>
    <h2>Student List</h2>

    <?php
    include 'connect.php';

    if (isset($_POST['list_students'])) {
        
        $sql_select = "SELECT * FROM students";
        $result = $db->query($sql_select);

        if ($result->num_rows > 0) {
            echo "<table border='1'>
            <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Birthdate</th>
            <th>Email</th>
            <th>Department</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                echo "<td>" . $row['birthdate'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No students found in the database.";
        }
    }

    $db->close(); 
    ?>

    
    <form method="post">
        <input type="submit" name="list_students" value="List Students">
    </form>

</body>
</html>
