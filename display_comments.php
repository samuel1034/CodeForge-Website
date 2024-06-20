<?php
// Database connection
$db = new PDO('sqlite:feedback.db');

$result = $db->query("SELECT name, country, comment, created_at FROM comments ORDER BY created_at DESC");

foreach ($result as $row) {
    echo '<div class="comment2 mt-4 text-justify float-left">';
    echo '<img src="https://static-00.iconduck.com/assets.00/user-icon-2048x2048-ihoxz4vq.png" alt="" class="rounded-circle" width="40" height="40">';
    echo '<h4>' . htmlspecialchars($row['name']) . ' (' . htmlspecialchars($row['country']) . ')</h4>';
    echo '<span>- ' . date("d F, Y", strtotime($row['created_at'])) . '</span>';
    echo '<br>';
    echo '<p>' . htmlspecialchars($row['comment']) . '</p>';
    echo '</div>';
}
?>
