<?php include "config.php"; session_start(); ?>
<link rel="stylesheet" href="assets/style.css">
<script src="assets/script.js"></script>

<?php
$id=$_GET['id'];
$m=$conn->query("SELECT * FROM mangas WHERE id=$id")->fetch_assoc();
?>

<div class="container">
<h2><?= $m['title'] ?></h2>

<?php if(isset($_SESSION['user'])): ?>
<form method="post">
<button name="fav">⭐ إضافة للمفضلة</button>
</form>

<?php
if(isset($_POST['fav'])){
$uid=$_SESSION['user'];
$conn->query("INSERT INTO favorites VALUES(NULL,$uid,$id)");
}
?>
<?php endif; ?>

<h3>الفصول</h3>
<?php
$q=$conn->query("SELECT * FROM chapters WHERE manga_id=$id ORDER BY chapter_number DESC");
while($c=$q->fetch_assoc()){
echo "<div class='card'>
<a href='chapter.php?f={$c['folder']}&m=$id&c={$c['chapter_number']}'>
الفصل {$c['chapter_number']}
</a>
</div>";
}
?>
</div>
