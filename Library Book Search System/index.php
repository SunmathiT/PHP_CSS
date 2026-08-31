<!DOCTYPE html>
<html>

<head>

    <title>Library Book Search</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h1>📚 Library Book Search System</h1>

    <p>Enter the book title to check its availability</p>

    <form action="process.php" method="POST">

        <label>Book Title</label>

        <input
            type="text"
            name="book"
            placeholder="Enter book title"
            required
        >

        <button type="submit">
            🔍 Search Book
        </button>

    </form>

</div>

</body>

</html>