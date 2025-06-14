<?php
require_once 'db.php';
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    mysqli_query($con, "DELETE FROM posts WHERE id=$id");
    header('Location: index.php');
    exit;
}
$result = mysqli_query($con, "SELECT * FROM posts ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog CMS</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
  <h1>My Blog</h1>
  <a class="btn primary" href="create.php">+ New Post</a>
  <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <div class="post fadein">
      <h2><?= htmlspecialchars($row['title']) ?></h2>
      <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
      <small>Posted: <?= $row['created_at'] ?></small><br>
      <div class="actions">
        <a class="btn secondary" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <button class="btn danger" onclick="confirmDelete(<?= $row['id'] ?>)">Delete</button>
      </div>
    </div>
  <?php endwhile ?>
</div>
<script src="script.js"></script>
</body>
</html>
