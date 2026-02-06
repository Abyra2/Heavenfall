<?php include "config.php"; session_start(); ?>
<link rel="stylesheet" href="assets/style.css">

<div class="container">
<h1>📚 موقع المانجا</h1>

<form>
<input name="q" placeholder="بحث...">
<button>بحث</button>
<a href="favorites.php">⭐ المفضلة</a>
</form>

<?php
$where="";
if(!empty($_GET['q'])){
$q=$conn->real_escape_string($_GET['q']);
$where="WHERE title LIKE '%$q%'";
}
$r=$conn->query("SELECT * FROM mangas $where");
while($m=$r->fetch_assoc()){
echo "<div class='card'>
<a href='manga.php?id={$m['id']}'>{$m['title']}</a>
</div>";
}
?>

<!-- مربع ديسكورد + نحتاج مترجمين -->
<div class="card" style="text-align:center">
<h3>📝 نحتاج مترجمين</h3>
<p>إذا حاب تترجم معنا أو تنضم للفريق</p>

<a href="https://discord.gg/fall1" target="_blank"
style="
display:inline-block;
background:#5865F2;
color:#fff;
padding:12px 20px;
border-radius:8px;
font-weight:bold;
margin-top:10px;
">
💬 انضم لسيرفر الديسكورد
</a>
</div>

</div>
