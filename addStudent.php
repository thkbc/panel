<html lang="en">
    <body>
    <link rel="stylesheet" href="addStudent.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="content" id="addStudent">
        <h2>Add Student</h2> 
        <a href="main.php" onclick="history.back();" style="position: absolute; top: 10px; left: 10px; text-decoration: none; color: #333; font-weight: bold;">X</a>

        <div id="addStudentForm">
            <form method="post">
                
                <div class="form-group">
                    <label for="student_id">Student ID:</label>
                    <input type="text" id="student_id" name="student_id" required>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" id="department" name="department" required>
                </div>
                <div class="form-group">
               <input type="submit" value="Add Student" id="add_student_button" name="add_student_button">
                </div>
            </form>
        </div>
    </div>
    </body>
</html>


<?php
include 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_student_button'])) {
    
    $student_id = $_POST["student_id"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    $sql = "INSERT INTO students (student_id, name, surname, birthdate, email, department)
    VALUES ('$student_id', '$name', '$surname', '$birthdate', '$email', '$department')";

if ($db->query($sql) === TRUE) {
    $message = "Successfully new student added.";
} else {
    $message = "Error: " . $sql . "<br>" . $db->error;
}
    
}


?>


    


