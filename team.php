<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>European Soccer Trade Machine - <?php echo $_GET['team']; ?></title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1><?php echo $_GET['team']; ?></h1>
    <p>This is the page for <?php echo $_GET['team']; ?>.</p>
    <a href="index.html" class="btn">Back to Home</a>
</body>
</html>
