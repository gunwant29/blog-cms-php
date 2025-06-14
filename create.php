<?php
require_once 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    mysqli_query($con, "INSERT INTO posts (title, content) VALUES ('$title', '$content')");
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Post</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container form-container fadein">
  <h2>Create Post</h2>
  <form method="POST" id="postForm">
    <input type="text" name="title" id="title" placeholder="Title" required>
    <textarea name="content" id="content" placeholder="Content" rows="6" required></textarea>
    <p id="char-count">0 characters</p>
    <button class="btn primary" type="submit">Publish</button>
    <a class="btn secondary" href="index.php">Cancel</a>
  </form>
</div>
<script src="script.js"></script>
</body>
</html>
