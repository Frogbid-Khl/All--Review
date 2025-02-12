<?php
// Database connection details
$host = 'localhost';
$db = 'review_copy';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

// Fetch a random review_copy value from the database
$sql = "SELECT * FROM review_list ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $reviewCopy = $row['review'];
    $id = $row['id'];

    // Delete the row after fetching the value
    $deleteSql = "DELETE FROM review_list WHERE id = ?";
    $stmt = $conn->prepare($deleteSql);
    $stmt->bind_param('s', $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Return the review_copy value as JSON
        echo json_encode(['success' => true, 'review_copy' => $reviewCopy]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete the row']);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'No reviews found']);
}

$conn->close();