<?php
$conn = new mysqli('localhost', 'felhasználó', 'jelszó', 'adatbázis_neve');

if ($conn->connect_error) {
    die('Kapcsolódási hiba: ' . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $name, $email, $message);

if ($stmt->execute()) {
    echo 'Üzenet sikeresen mentve!';
} else {
    echo 'Hiba történt: ' . $stmt->error;
}

$stmt->close();
$conn->close();
?>
