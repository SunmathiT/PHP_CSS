
<!DOCTYPE html>
<html>

<head>

    <title>Browser History Using Stack</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>🌐 Browser History</h1>

    <p class="subtitle">
        Manage recently visited pages using Stack operations
    </p>

    <form action="process.php" method="POST">

        <label>Enter Page Name</label>

        <input
            type="text"
            name="page"
            placeholder="Example: Google"
            required
        >

        <label>Enter Page URL</label>

        <input
            type="text"
            name="url"
            placeholder="Example: www.google.com"
            required
        >

        <button type="submit">
            ➕ Visit Page
        </button>

    </form>

</div>

</body>

</html>

