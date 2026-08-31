<!DOCTYPE html>
<html>

<head>
    <title>Examination Result Processing</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>📚 Examination Result Processing</h1>

    <p>Enter examination marks for students</p>

    <form action="process.php" method="POST">

        <label>Student 1 Name</label>
        <input type="text" name="name1" placeholder="Enter student name" required>

        <label>Student 1 - Mark 1</label>
        <input type="number" name="mark11" min="0" max="100" required>

        <label>Student 1 - Mark 2</label>
        <input type="number" name="mark12" min="0" max="100" required>

        <label>Student 1 - Mark 3</label>
        <input type="number" name="mark13" min="0" max="100" required>


        <label>Student 2 Name</label>
        <input type="text" name="name2" placeholder="Enter student name" required>

        <label>Student 2 - Mark 1</label>
        <input type="number" name="mark21" min="0" max="100" required>

        <label>Student 2 - Mark 2</label>
        <input type="number" name="mark22" min="0" max="100" required>

        <label>Student 2 - Mark 3</label>
        <input type="number" name="mark23" min="0" max="100" required>


        <label>Student 3 Name</label>
        <input type="text" name="name3" placeholder="Enter student name" required>

        <label>Student 3 - Mark 1</label>
        <input type="number" name="mark31" min="0" max="100" required>

        <label>Student 3 - Mark 2</label>
        <input type="number" name="mark32" min="0" max="100" required>

        <label>Student 3 - Mark 3</label>
        <input type="number" name="mark33" min="0" max="100" required>


        <button type="submit">
            📊 Generate Results
        </button>

    </form>

</div>

</body>

</html>