<?php include "config.php"; session_start(); ?>
<link rel="stylesheet" href="assets/style.css">
<script src="assets/script.js"></script>

<?php
$f=$_GET['f'];
$m=$_GET['m'];
$c=$_GET['c'];
$path="uploads/manga/$f/";
$imgs=glob("$path*.{jpg,png,webp}",GLOB_BRACE);
sort($imgs);
?>

<div class="container">
<script>saveLast(<?= $m ?>,<?= $c ?>)</script>
<?php foreach($imgs as $i) echo "<img src='$i'>"; ?>
</div>
