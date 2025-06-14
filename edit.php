<?php
require_once 'db.php';
$id = (int)($_GET['id'] ?? 0);
$post = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM posts WHERE id=$id"));
if (!$post) {
    header('Location: index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    mysqli_query($con, "UPDATE posts SET title='$title', content='$content' WHERE id=$id");
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Post</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container form-container fadein">
  <h2>Edit Post</h2>
  <form method="POST" id="postForm">
    <input type="text" name="title" id="title" value="<?= htmlspecialchars($post['title']) ?>" required>
    <textarea name="content" id="content" rows="6" required><?= htmlspecialchars($post['content']) ?></textarea>
    <p id="char-count"><?= strlen(htmlspecialchars($post['content'])) ?> characters</p>
    <button class="btn primary" type="submit">Save</button>
    <a class="btn secondary" href="index.php">Cancel</a>
  </form>
</div>
<script src="script.js"></script>
</body>
</html>
