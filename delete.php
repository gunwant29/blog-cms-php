<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM posts WHERE id=$id";
    mysqli_query($con, $sql);
}

header('Location: index.php');
exit;
?>
