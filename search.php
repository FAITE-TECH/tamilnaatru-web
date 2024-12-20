<?php
include('connect.php');

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['query']) || trim($_GET['query']) === '') {
    echo "<p>Please provide a search query / தேடல் கேள்வியை வழங்கவும்.</p>";
    exit;
}

$search_query = trim($_GET['query']);

// Prepare the SQL query
$stmt = $conn->prepare("
    SELECT title, id 
    FROM uploads 
    WHERE content LIKE ? OR title LIKE ? 
    COLLATE utf8mb4_general_ci 
    LIMIT 10
");
$like_query = "%" . $search_query . "%";
$stmt->bind_param("ss", $like_query, $like_query);

if ($stmt->execute()) {
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = htmlspecialchars($row['title']);
            $id = htmlspecialchars($row['id']);
            echo "<a href='view.php?id=$id' class='search-result-item'>$title</a>";
        }
    } else {
        echo "<p>No matching articles found / உங்கள் தேடலுக்குப் பொருத்தமான கட்டுரைகள் எதுவும் இல்லை.</p>";
    }
} else {
    echo "<p>An error occurred: " . $stmt->error . "</p>";
}

$stmt->close();
$conn->close();
?>
