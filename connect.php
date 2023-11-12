<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "hack";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("" . $conn->connect_error);
} else {
    echo "<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["input1"];
    $email = $_POST["input3"];
    $password = $_POST["input2"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the hashed password length exceeds the maximum allowed in the database
    if (strlen($hashed_password&& $username&& $email) > 255) {
        echo "Error: Data is too long.";
    } else {
        // Insert data into the "users" table
        $sql = "INSERT INTO users (username, email, password_hash) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


// Fetch data from the database
$result = $conn->query("SELECT user_id, username, email FROM users");

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="diseño.css">
</head>

<body>

    <form action="index.php" method="post">
        <h1>Iniciar Sesión</h1>
        <label for="input1">Usuario:</label>
        <input type="text" id="input1" name="input1" required>

        <br>

        <label for="input1">Correo:</label>
        <input type="email" id="input3" name="input3" required>
        <br>

        <label for="input2">Contraseña:</label>
        <input type="password" id="input2" name="input2" required>

        <br>

        <input type="submit" value="Acceder" id="btnAcceder">
    </form>

</body>

</html>
