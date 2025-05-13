<?php
// Declaration
$mood = isset($_GET['day']) ? $_GET['day'] : 'unknown';
$quote = "";

// Conditional
if ($mood == "monday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Do the laundry</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Clean my room</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Workout</div>";
    $quote .= "</div>";
} elseif ($mood == "tuesday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Study for a quiz</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Prepare index card</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Prepare for case study</div>";
    $quote .= "</div>";
} elseif ($mood == "wednesday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Prepare food for my cat</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Save money</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Study for upcoming quiz</div>";
    $quote .= "</div>";
} elseif ($mood == "thursday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Workout after class</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Finish pending tasks</div>";
    $quote .= "</div>";
} elseif ($mood == "friday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Attend online classes</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Do daily chores</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Prepare for the weekend</div>";
    $quote .= "</div>";
} elseif ($mood == "saturday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Do the laundry</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Clean the bathroom</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Workout</div>";
    $quote .= "</div>";
} elseif ($mood == "sunday") {
    $quote = "<div class='checkbox-container'>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Prepare for Monday</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Practice coding</div>";
    $quote .= "<div class='checkbox-item'><input type='checkbox'> Rest and relax</div>";
    $quote .= "</div>";
} else {
    $quote = "Day not recognized. Please try again.";
}


// Array of quotes
// credit to the ones who made these quotes
$allQuotes = [
    "If you can dream it, you can do it.",
    "This moment will pass.",
    "Don't let what you cannot do interfere with what you can do.",
    "Every step counts.",
    "Resting is also progress.",
    "Success is not final, failure is not fatal: it is the courage to continue that counts.",
    "The journey of a thousand miles begins with one step.",
    "It does not matter how slowly you go as long as you do not stop.",
    "The only way to do great work is to love what you do.",
    "Believe you can and you're halfway there."
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Things To Do:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Things To Do:</h1>
    <div class="quote"><?php echo $quote; ?></div>

    <h2>Motivation:</h2>
    <?php
    // Looping
    for ($i = 0; $i < 1; $i++) {
    $randIndex = rand(0, count($allQuotes) - 1);
    echo "<p>" . $allQuotes[$randIndex] . "</p>";
    }
    ?>

    <a href="index.php">⬅ Go back to main screen</a>
</body>
</html>
