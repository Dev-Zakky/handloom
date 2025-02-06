<?php
include 'config.php'; // Include database connection

// Fetch all handlooms from the database
$stmt = $conn->query("SELECT * FROM handlooms");
$handlooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($handlooms as $handloom) {
    echo "<div>";
    echo "<h2>" . htmlspecialchars($handloom['name']) . "</h2>";
    echo "<p>" . htmlspecialchars($handloom['description']) . "</p>";
    echo "<a href='" . htmlspecialchars($handloom['website_url']) . "' target='_blank'>Visit Website</a>";
    echo "</div>";
}
?>
