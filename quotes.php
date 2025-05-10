<?php
$quotes = [
    "Believe you can and you're halfway there.",
    "Every day is a second chance.",
    "Don’t watch the clock; do what it does. Keep going.",
    "You are capable of amazing things.",
    "Start where you are. Use what you have. Do what you can."
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>More Motivation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="quotes">
    <h1>More Motivational Quotes</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($quotes); $i++) {
            echo "<li>" . $quotes[$i] . "</li>";
        }
        ?>
    </ul>
    <a href="index.php">Back to Home</a>
</body>
</html>
