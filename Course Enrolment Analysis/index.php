<!DOCTYPE html>
<html>
<head>

    <title>Course Enrolment Analysis</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🎓 Course Enrolment Analysis</h1>

    <p>Enter Number of Students Enrolled</p>

    <form action="process.php" method="POST">

        <div class="course">

            <h2>💻 PHP</h2>

            <input type="number"
                   name="php"
                   placeholder="Students"
                   min="0"
                   required>

        </div>


        <div class="course">

            <h2>🗄️ DBMS</h2>

            <input type="number"
                   name="dbms"
                   placeholder="Students"
                   min="0"
                   required>

        </div>


        <div class="course">

            <h2>🌐 Web Development</h2>

            <input type="number"
                   name="web"
                   placeholder="Students"
                   min="0"
                   required>

        </div>


        <div class="course">

            <h2>🐍 Python</h2>

            <input type="number"
                   name="python"
                   placeholder="Students"
                   min="0"
                   required>

        </div>


        <button type="submit">
            📊 Generate Summary
        </button>

    </form>

</div>

</body>
</html>