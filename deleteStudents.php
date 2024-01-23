    <!DOCTYPE html>
    <html lang="en">
    <head>
    <a href="main.php" onclick="history.back();" style="position: absolute; top: 10px; left: 10px; text-decoration: none; color: #333; font-weight: bold;">X</a>
    <link rel="stylesheet" href="deleteStudents.css">
        <meta charset="UTF-8">  
        <title>Delete Student</title>
    </head>
    <body>
        <h2>Delete Student</h2>
        <form method="post">
            <label for="search_type">Select Deletion Criteria:</label>
            <select id="search_type" name="search_type">
                <option value="student_id">Student ID</option>
                <option value="name">Name</option>
                <option value="surname">Surname</option>
            </select>
            <br><br>
            <label for="search_key">Search Key:</label>
            <input type="text" id="search_key" name="search_key" required>
            <br><br>
            <input type="submit" value="Delete Student">
        </form>
    </body>
    </html>

    <?php
    include 'connect.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search_key = $_POST['search_key'];
        $search_type = $_POST['search_type'];

       
        $sql_delete = "DELETE FROM students WHERE $search_type = '$search_key'";

        if ($db->query($sql_delete) === TRUE) {
            echo "<p>Student successfully deleted.</p>";
        } else {
            echo "Deletion error: " . $db->error;
        }
    }
    $db->close(); 
    ?>
