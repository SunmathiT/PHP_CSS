<!DOCTYPE html>
<html>
<head>
    <title>Student Performance Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Student Performance Analysis</h1>
    <p>Semester Marks Analysis Using Multidimensional Arrays</p>

    <form action="process.php" method="POST">

        <h2>Enter Student Marks</h2>

        <!-- Student 1 -->
        <div class="student-box">

            <h3>Student 1</h3>

            <input type="text" name="name[]" placeholder="Student Name" required>

            <input type="number" name="php[]" placeholder="PHP Mark" min="0" max="100" required>

            <input type="number" name="dbms[]" placeholder="DBMS Mark" min="0" max="100" required>

            <input type="number" name="cn[]" placeholder="Computer Networks Mark" min="0" max="100" required>

            <input type="number" name="java[]" placeholder="Java Mark" min="0" max="100" required>

            <input type="number" name="python[]" placeholder="Python Mark" min="0" max="100" required>

        </div>


        <!-- Student 2 -->
        <div class="student-box">

            <h3>Student 2</h3>

            <input type="text" name="name[]" placeholder="Student Name" required>

            <input type="number" name="php[]" placeholder="PHP Mark" min="0" max="100" required>

            <input type="number" name="dbms[]" placeholder="DBMS Mark" min="0" max="100" required>

            <input type="number" name="cn[]" placeholder="Computer Networks Mark" min="0" max="100" required>

            <input type="number" name="java[]" placeholder="Java Mark" min="0" max="100" required>

            <input type="number" name="python[]" placeholder="Python Mark" min="0" max="100" required>

        </div>


        <!-- Student 3 -->
        <div class="student-box">

            <h3>Student 3</h3>

            <input type="text" name="name[]" placeholder="Student Name" required>

            <input type="number" name="php[]" placeholder="PHP Mark" min="0" max="100" required>

            <input type="number" name="dbms[]" placeholder="DBMS Mark" min="0" max="100" required>

            <input type="number" name="cn[]" placeholder="Computer Networks Mark" min="0" max="100" required>

            <input type="number" name="java[]" placeholder="Java Mark" min="0" max="100" required>

            <input type="number" name="python[]" placeholder="Python Mark" min="0" max="100" required>

        </div>


        <!-- Student 4 -->
        <div class="student-box">

            <h3>Student 4</h3>

            <input type="text" name="name[]" placeholder="Student Name" required>

            <input type="number" name="php[]" placeholder="PHP Mark" min="0" max="100" required>

            <input type="number" name="dbms[]" placeholder="DBMS Mark" min="0" max="100" required>

            <input type="number" name="cn[]" placeholder="Computer Networks Mark" min="0" max="100" required>

            <input type="number" name="java[]" placeholder="Java Mark" min="0" max="100" required>

            <input type="number" name="python[]" placeholder="Python Mark" min="0" max="100" required>

        </div>


        <!-- Student 5 -->
        <div class="student-box">

            <h3>Student 5</h3>

            <input type="text" name="name[]" placeholder="Student Name" required>

            <input type="number" name="php[]" placeholder="PHP Mark" min="0" max="100" required>

            <input type="number" name="dbms[]" placeholder="DBMS Mark" min="0" max="100" required>

            <input type="number" name="cn[]" placeholder="Computer Networks Mark" min="0" max="100" required>

            <input type="number" name="java[]" placeholder="Java Mark" min="0" max="100" required>

            <input type="number" name="python[]" placeholder="Python Mark" min="0" max="100" required>

        </div>


        <button type="submit">Generate Performance Report</button>

    </form>

</div>

</body>
</html>