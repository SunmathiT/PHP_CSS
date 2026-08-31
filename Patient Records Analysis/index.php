<!DOCTYPE html>
<html>

<head>

    <title>Patient Records Analysis</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🏥 Patient Records Analysis</h1>

    <p>Enter Patient Details</p>

    <form action="process.php" method="POST">

        <div class="patient">

            <h2>👤 Patient 1</h2>

            <input type="text"
                   name="name[]"
                   placeholder="Patient Name"
                   required>

            <input type="number"
                   name="age[]"
                   placeholder="Age"
                   min="1"
                   max="100"
                   required>

            <select name="department[]" required>

                <option value="">Select Department</option>

                <option value="Cardiology">Cardiology</option>

                <option value="Neurology">Neurology</option>

                <option value="Orthopedics">Orthopedics</option>

                <option value="General">General</option>

            </select>

            <select name="treatment[]" required>

                <option value="">Select Treatment</option>

                <option value="Medication">Medication</option>

                <option value="Surgery">Surgery</option>

                <option value="Therapy">Therapy</option>

            </select>

        </div>


        <div class="patient">

            <h2>👤 Patient 2</h2>

            <input type="text"
                   name="name[]"
                   placeholder="Patient Name"
                   required>

            <input type="number"
                   name="age[]"
                   placeholder="Age"
                   min="1"
                   max="100"
                   required>

            <select name="department[]" required>

                <option value="">Select Department</option>

                <option value="Cardiology">Cardiology</option>

                <option value="Neurology">Neurology</option>

                <option value="Orthopedics">Orthopedics</option>

                <option value="General">General</option>

            </select>

            <select name="treatment[]" required>

                <option value="">Select Treatment</option>

                <option value="Medication">Medication</option>

                <option value="Surgery">Surgery</option>

                <option value="Therapy">Therapy</option>

            </select>

        </div>


        <div class="patient">

            <h2>👤 Patient 3</h2>

            <input type="text"
                   name="name[]"
                   placeholder="Patient Name"
                   required>

            <input type="number"
                   name="age[]"
                   placeholder="Age"
                   min="1"
                   max="100"
                   required>

            <select name="department[]" required>

                <option value="">Select Department</option>

                <option value="Cardiology">Cardiology</option>

                <option value="Neurology">Neurology</option>

                <option value="Orthopedics">Orthopedics</option>

                <option value="General">General</option>

            </select>

            <select name="treatment[]" required>

                <option value="">Select Treatment</option>

                <option value="Medication">Medication</option>

                <option value="Surgery">Surgery</option>

                <option value="Therapy">Therapy</option>

            </select>

        </div>


        <button type="submit">
            📊 Generate Report
        </button>

    </form>

</div>

</body>
</html>