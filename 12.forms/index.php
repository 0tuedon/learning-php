<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2> Basic Form</h2>

    <form action="process.php">
        <input type="text" name="username" value="tuedon" />
        <input type="password" name="password" value="Mofeetchie@2001" />

        <button type="submit">
            Submit
        </button>
    </form>

    <hr />
    <br />

    <form action="search.php" method="get">
        <input type="text" name="query" value="tuedon" />

        <button type="submit">
            Submit
        </button>
    </form>

    <hr />
    <br />

    <form action="process.php">
        <input type="text" name="username" value="tuedon" />
        <input type="password" name="password" value="Mofeetchie@2001" />

        <button type="submit">
            Submit
        </button>
    </form>

    <hr />
    <br />

    <form action="process.php" method="post">
        <input type="text" name="username" value="tuedon" />
        <input type="text" name="email" value="" />

        <button type="submit">
            Submit
        </button>
    </form>
</body>

</html>