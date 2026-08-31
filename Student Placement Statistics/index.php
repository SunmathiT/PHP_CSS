<!DOCTYPE html>
<html>

<head>

    <title>Student Placement Statistics</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🎓 Student Placement Statistics</h1>

    <p>Enter student placement details</p>

    <form action="process.php" method="POST">

        <label>Student 1 Name</label>
        <input type="text" name="name1" placeholder="Enter student name" required>

        <label>Department</label>
        <select name="dept1" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="IT">IT</option>
            <option value="EEE">EEE</option>
        </select>

        <label>Placement Status</label>
        <select name="status1" required>
            <option value="">Select Status</option>
            <option value="Placed">Placed</option>
            <option value="Not Placed">Not Placed</option>
        </select>

        <label>Salary (₹)</label>
        <input type="number" name="salary1" min="0" required>


        <label>Student 2 Name</label>
        <input type="text" name="name2" placeholder="Enter student name" required>

        <label>Department</label>
        <select name="dept2" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="IT">IT</option>
            <option value="EEE">EEE</option>
        </select>

        <label>Placement Status</label>
        <select name="status2" required>
            <option value="">Select Status</option>
            <option value="Placed">Placed</option>
            <option value="Not Placed">Not Placed</option>
        </select>

        <label>Salary (₹)</label>
        <input type="number" name="salary2" min="0" required>


        <label>Student 3 Name</label>
        <input type="text" name="name3" placeholder="Enter student name" required>

        <label>Department</label>
        <select name="dept3" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="IT">IT</option>
            <option value="EEE">EEE</option>
        </select>

        <label>Placement Status</label>
        <select name="status3" required>
            <option value="">Select Status</option>
            <option value="Placed">Placed</option>
            <option value="Not Placed">Not Placed</option>
        </select>

        <label>Salary (₹)</label>
        <input type="number" name="salary3" min="0" required>


        <label>Student 4 Name</label>
        <input type="text" name="name4" placeholder="Enter student name" required>

        <label>Department</label>
        <select name="dept4" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="IT">IT</option>
            <option value="EEE">EEE</option>
        </select>

        <label>Placement Status</label>
        <select name="status4" required>
            <option value="">Select Status</option>
            <option value="Placed">Placed</option>
            <option value="Not Placed">Not Placed</option>
        </select>

        <label>Salary (₹)</label>
        <input type="number" name="salary4" min="0" required>


        <button type="submit">
            📊 Generate Placement Report
        </button>

    </form>

</div>

</body>

</html>