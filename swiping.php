<?php require_once 'conn.php';
// Execute a SQL query to fetch the data for the profile 
$sql = "SELECT name, age, gender FROM profiles";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Create an array to store the data for the profile cards
    $profiles = array();

    // Iterate over the result set and add each row to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $profiles[] = $row;
    }
} ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Start Swiping!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="background">
        <?php if (!empty($profiles)) : ?>
            <?php
            foreach ($profiles as $profile) {
                echo <<<Q
                <div class="card">
                <h3>{$profile['name']}</h3>
                <p>Age: {$profile['age']}</p>
                <p>Gender: {$profile['gender']}</p>
                </div>
                Q;
            }
            ?>

        <?php endif; ?>
    </div>
    <script src="script.js"></script>
</body>

</html>