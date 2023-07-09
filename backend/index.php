<?php

// Assuming you have a database connection already established
// Replace the database connection details with your own

$host = 'localhost';
$dbName = 'portfolio';
$user = 'root';
$password = 'password';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $dbh->prepare("SELECT * FROM portfolio_data");
    $stmt->execute();
    $portfolioData = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($portfolioData);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
