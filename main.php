<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record System</title>
    <link rel="stylesheet" href="main.css">
    <style>
       
        .content button {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Student Record System</h1>
</header>

<div class="container" style="text-align: left;">
    <nav>
        <ul>
            <li><a href="#" onclick="showDashboard()">Dashboard</a></li>
            <li><a href="addStudent.php" onclick="showAddStudent()">Add Student</a></li>
            <li><a href="deleteStudents.php" onclick="showStudents()">Delete Students</a></li>
            <li><a href="manageStudents.php" onclick="showManageStudents()">Manage Students</a></li>
            <li><a href="#" onclick="logout()">Logout</a></li>
        </ul>
    </nav>

    <div class="content" id="dashboard">
    <h3>Welcome to the Student Record System!</h3>
    </div>

    <div class="content" id="students" style="display: none;">
        <h2>Students List</h2>
    </div>

    <div class="content" id="addStudent" style="display: none;">
    </div>

    <script>
        function showDashboard() {
            document.getElementById('dashboard').style.display = 'block';
            document.getElementById('students').style.display = 'none';
            document.getElementById('addStudent').style.display = 'none';
            document.getElementById('addStudentForm').style.display = 'none';
        }

        function showStudents() {
            document.getElementById('dashboard').style.display = 'none';
            document.getElementById('students').style.display = 'block';
            document.getElementById('addStudent').style.display = 'none';
            document.getElementById('addStudentForm').style.display = 'none';
        }

        function showAddStudent() {
            document.getElementById('dashboard').style.display = 'none';
            document.getElementById('students').style.display = 'none';
            document.getElementById('addStudent').style.display = 'block';
            document.getElementById('addStudentForm').style.display = 'block';
           }

           function showManageStudents() {
    document.getElementById('dashboard').style.display = 'none';
    document.getElementById('students').style.display = 'none';
    document.getElementById('addStudent').style.display = 'none';
    document.getElementById('addStudentForm').style.display = 'none';
    
    document.getElementById('manageStudents').style.display = 'block';
}

        function logout() {
            window.location.href = 'logout.php';
        }

        showDashboard(); 
    </script>
</div>

</body>
</html>



