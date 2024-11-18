<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Date and Time</title>
    <style>
        footer {
            font-family: Georgia, serif;
            text-align: center;
            padding: 10px;
            border-top: 1px solid #0a21c0; /* Bright blue for border */
            background-color: #141619; /* Dark background for footer */
            color: #b3b4bd; /* Light gray for text */
            width: 100%;
            position: absolute;
            bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <main>
            <h1>Welcome to Inventory Helper</h1>
            <p>Manage your inventory with ease and efficiency.</p>
        </main>
    </div>
    <footer>
        <p>&copy; Inventory Helper - Making Inventory Management Easier</p>
        <p>Christopher Rodriguez, IT202-001, cmr82@njit.edu</p>
        <p>
            <?php
            date_default_timezone_set("America/New_York");
            echo "The date and time is " . date("D M j h:ia T Y");
            ?>
        </p>
    </footer>
</body>
</html>
