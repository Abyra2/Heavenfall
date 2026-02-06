<?php include "config.php"; session_start(); ?>
<link rel="stylesheet" href="assets/style.css">

<div class="container">
<h2>⭐ مفضلتي</h2>

<?php
$uid=$_SESSION['user'];
$q=$conn->query("
SELECT mangas.* FROM favorites
JOIN mangas ON mangas.id=favorites.manga_id
WHERE favorites.user_id=$uid
");
while($m=$q->fetch_assoc()){
echo "<div class='card'>
<a href='manga.php?id={$m['id']}'>{$m['title']}</a>
</div>";
}
?>
</div>
