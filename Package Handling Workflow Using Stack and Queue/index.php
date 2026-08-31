
<!DOCTYPE html>
<html>

<head>

    <title>Package Handling Workflow</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📦 Package Handling Workflow</h1>

    <p class="subtitle">
        Manage packages using Stack and Queue operations
    </p>


    <form action="process.php" method="POST">

        <label>Package ID</label>

        <input
            type="text"
            name="package_id"
            placeholder="Example: PKG101"
            required
        >


        <label>Package Name</label>

        <input
            type="text"
            name="package_name"
            placeholder="Enter package name"
            required
        >


        <label>Select Operation</label>

        <select name="operation" required>

            <option value="queue">
                Add to Queue
            </option>

            <option value="stack">
                Add to Stack
            </option>

        </select>


        <button type="submit">
            📦 Process Package
        </button>

    </form>

</div>

</body>

</html>

