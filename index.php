<?php
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outsource Payment Collection</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <h1>Outsource Payment Collection</h1>
</header>

<section class="banner">
    <div class="slider">
        <div class="slide active" style="background-image: url('assets/images/banner1.jpg');"></div>
        <div class="slide" style="background-image: url('assets/images/banner2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/images/banner3.jpg');"></div>
    </div>
</section>

<section class="icon-block">
    <?php
    $query = "SELECT * FROM posts";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="icon-item">';
            echo '<img src="assets/images/' . $row["icon"] . '" alt="' . $row["title"] . '">';
            echo '<h3>' . $row["title"] . '</h3>';
            echo '<p>' . $row["description"] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No posts found.</p>';
    }
    ?>
</section>

<footer>
    <p>© 2025 Outsource Payment Collection</p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
