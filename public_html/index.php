<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/app.css" />
    <title>Document</title>
</head>
<body>
    <p><?php echo "Hello World"; ?></p>

    <p>MySQL Connection Test: </p>
    <pre>
    <?php 
    // Test mysql connection
    $conn = new mysqli("mysql", "root", "secret");
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
    </pre>
</body>
</html>
