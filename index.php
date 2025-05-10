<?php
$day = "Monday";
$mood = "tired";
$quote = "";

if ($mood == "happy") {
    $quote = "Keep smiling and make today amazing!";
} elseif ($mood == "tired") {
    $quote = "Push through — your future self will thank you!";
} else {
    $quote = "Stay strong. You've got this!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daily Motivation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="home">
    <h1>Welcome to Your Daily Motivation</h1>
    <p>Today is <strong><?php echo $day; ?></strong></p>
    <div class="quote"><?php echo $quote; ?></div>
    <a href="quotes.php">See More Quotes</a>
</body>
</html>
